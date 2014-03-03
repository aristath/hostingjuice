<?php


function hj_package_actions() {
	global $post, $ss_framework;

	$prefix = '_hj_';

	$price_per_month = get_post_meta( $post->ID, $prefix . 'pricepermonth', true );
	$price_per_year  = get_post_meta( $post->ID, $prefix . 'priceperyear', true );
	$purchase_link   = get_post_meta( $post->ID, $prefix . 'purchaselink', true );
	?>

	<hr>

	<?php echo $ss_framework->make_row( 'div', null, 'single-purchase-buttons hosting-buttons' ); ?>
		<?php echo $ss_framework->make_col( 'div', array( 'medium' => 6 ) ); ?>

			<a class="<?php echo $ss_framework->button_classes( 'primary', 'large', 'btn-block' ); ?>" href="<?php echo $purchase_link; ?>">Buy Now!</a>
		</div>
		<?php echo $ss_framework->make_col( 'div', array( 'medium' => 6 ) ); ?>
			<a class="<?php echo $ss_framework->button_classes( 'link', 'large', 'btn-block' ); ?>" href="<?php echo $purchase_link; ?>">
				<?php echo $price_per_year; ?>
			</a>
		</div>
	</div>
	<?php echo $ss_framework->clearfix(); ?>
	<hr>

	<?php

}
add_action( 'shoestrap_single_pre_content', 'hj_package_actions' );


function hj_package_details() {
	global $post;

	$fields = hj_hosting_fields_array();

	hj_section_table( 'features', __('Features', 'hj') );
	hj_section_table( 'domain_ftp', __('Domain / FTP', 'hj') );
	hj_section_table( 'support', __('Support', 'hj') );
	hj_section_table( 'email', __('e-mail', 'hj') );
	hj_section_table( 'hosting_features', __('Advanced Features', 'hj') );

}
add_action( 'shoestrap_single_after_content', 'hj_package_details' );


function hj_table_format_values( $val, $format = '' ) {
	if ( $format == 'checkbox' )
		$return = ( $val ) ? '<i class="el-icon-ok green hosting-mark"></i>' : '<i class="el-icon-remove red hosting-mark"></i>';
	else
		$return = ( $val == '' || !isset( $val ) || is_null( $val ) ) ? '<i class="el-icon-minus null hosting-mark"></i>' : $val;

	return $return;
}


/**
 * Hosting package details widget
 */
class HJ_Package_Widget extends WP_Widget {
	private $fields = array();

	function __construct() {
		$widget_ops = array(
			'classname'   => 'widget_hj_pachage_details',
			'description' => __( 'Use this widget to add details to hosting packages', 'hj' ) );

		$this->WP_Widget('widget_hj_pachage_details', __('Package Details', 'hj'), $widget_ops);
		$this->alt_option_name = 'widget_hj_pachage_details';

		add_action('save_post', array(&$this, 'flush_widget_cache'));
		add_action('deleted_post', array(&$this, 'flush_widget_cache'));
		add_action('switch_theme', array(&$this, 'flush_widget_cache'));
	}

	function widget($args, $instance) {
		$cache = wp_cache_get('widget_hj_pachage_details', 'widget');

		if (!is_array($cache)) {
			$cache = array();
		}

		if (!isset($args['widget_id'])) {
			$args['widget_id'] = null;
		}

		if (isset($cache[$args['widget_id']])) {
			echo $cache[$args['widget_id']];
			return;
		}

		ob_start();
		extract($args, EXTR_SKIP);

		$title = apply_filters('widget_title', empty($instance['title']) ? __('HostingJuice Package Details', 'hj') : $instance['title'], $instance, $this->id_base);

		foreach($this->fields as $name => $label) {
			if (!isset($instance[$name])) { $instance[$name] = ''; }
		}

		echo $before_widget;

		if ($title) {
			echo $before_title, $title, $after_title;
		}

		hj_package_details();

		echo $after_widget;

		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set('widget_hj_pachage_details', $cache, 'widget');
	}

	function update($new_instance, $old_instance) {
		$instance = array_map('strip_tags', $new_instance);

		$this->flush_widget_cache();

		$alloptions = wp_cache_get('alloptions', 'options');

		if (isset($alloptions['widget_hj_pachage_details'])) {
			delete_option('widget_hj_pachage_details');
		}

		return $instance;
	}

	function flush_widget_cache() {
		wp_cache_delete('widget_hj_pachage_details', 'widget');
	}

	function form($instance) {
		foreach($this->fields as $name => $label) {
			${$name} = isset($instance[$name]) ? esc_attr($instance[$name]) : '';
		}
	}
}

add_action( 'widgets_init', function() { register_widget('HJ_Package_Widget'); } );


function hj_section_table( $section_id, $section_name ) {
	global $post, $ss_framework;
	$prefix = '_hj_';
	$fields = hj_hosting_fields_array();

	$section_active = false;
	$content = '';

	foreach ( $fields as $field ) {
		if ( $field['section'] == $section_id ) {
			$field_value = get_post_meta( $post->ID, $field['id'], true );

			if  ( isset( $field_value ) && !empty( $field_value ) ) {
				// set the section as active.
				$section_active = true;

				$content .= '<tr>';
				$content .=  $ss_framework->make_col( 'th', array( 'medium' => 10 ) ) . __( $field['name'] ) . '</th>';
				$content .= $ss_framework->make_col( 'td', array( 'medium' => 2 ) ) . hj_table_format_values( $field_value, $field['type'] ) . '</td>';
				$content .= '</tr>';
			}
		}
	}

	if ( $section_active == true ) {
		echo '<table class="table table-bordered table-striped">';
		echo '<tr class="info"><td colspan="2">' . $section_name . '</td></tr>';
		echo $content;
		echo '</table>';
	}
}