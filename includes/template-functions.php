<?php

/**
 * Add the package selection on top of the purchase button and price
 */
function hj_package_switch() {
	global $post, $ss_framework;

	$prefix = '_hj_';

	// What type of hosting is this?
	$hosting_type = get_post_meta( $post->ID, $prefix . 'type', true );

	$the_query = new WP_Query( 'post_type=hj_hosting&meta_key=' . $prefix . 'type&meta_value=' . $hosting_type . '&order=ASC' );

	$current_post_id = $post->ID;

	if ( is_singular( 'hj_hosting' ) ) {

		if ( $the_query->have_posts() ) {
			echo '<div class="' . $ss_framework->button_group_classes( 'small' ) . '">';

			while ( $the_query->have_posts() ) {
				$the_query->the_post();

				// $btn_class = ( $current_post_id == get_the_ID() ) ? 'disabled' : 'default';
				if ( $current_post_id == get_the_ID() ) {
					echo '<button class="' . $ss_framework->button_classes( 'primary', 'medium', null, 'active' ) . '">' . get_the_title() . '</button>';
				} else {
					echo '<a class="' . $ss_framework->button_classes( 'default' ) . '" href="' . get_permalink() . '">' . get_the_title() . '</a>';
				}
			}

			echo '</div>';
		}
	}
	wp_reset_query();
}
add_action( 'shoestrap_single_pre_content', 'hj_package_switch', 5 );

/**
 * Adds the purchase button and price label
 */
function hj_package_actions() {
	global $post, $ss_framework;

	$prefix = '_hj_';

	if ( is_singular( 'hj_hosting' ) ) {

		$price_per_month = get_post_meta( $post->ID, $prefix . 'pricepermonth', true );
		$price_per_year  = get_post_meta( $post->ID, $prefix . 'priceperyear', true );
		$purchase_link   = get_post_meta( $post->ID, $prefix . 'purchaselink', true );

		echo $ss_framework->make_row( 'div', null, 'single-purchase-buttons hosting-buttons' );
			echo $ss_framework->make_col( 'div', array( 'medium' => 6 ) );
				echo '<a class="' . $ss_framework->button_classes( 'primary', 'large', 'btn-block' ) . '" href="' . $purchase_link . '">' . __( 'Buy Now!', 'hostingjuice' ) . '</a>';
			echo '</div>';

			echo $ss_framework->make_col( 'div', array( 'medium' => 6 ) );
				echo '<a class="' . $ss_framework->button_classes( 'link', 'large', 'btn-block' ) . '" href="' . $purchase_link . '">';
				echo $price_per_year;
				echo '</a>';
			echo '</div>';
		echo '</div>';

		echo $ss_framework->clearfix();

		echo '<hr>';
	}
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
// add_action( 'shoestrap_single_after_content', 'hj_package_details' );


function hj_table_format_values( $val, $format = '' ) {
	if ( $format == 'checkbox' ) {
		$return = ( $val ) ? '<i class="el-icon-ok green hosting-mark"></i>' : '<i class="el-icon-remove red hosting-mark"></i>';
	} else {
		$return = ( $val == '' || !isset( $val ) || is_null( $val ) ) ? '<i class="el-icon-minus null hosting-mark"></i>' : $val;
	}

	return $return;
}

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
				$content .=  $ss_framework->make_col( 'th', array( 'medium' => 9 ) ) . __( $field['name'] ) . '</th>';
				$content .= $ss_framework->make_col( 'td', array( 'medium' => 3 ) ) . hj_table_format_values( $field_value, $field['type'] ) . '</td>';
				$content .= '</tr>';
			}
		}
	}

	if ( $section_active == true ) {
		echo '<table class="table">';
		echo '<tr class="info"><td colspan="2">' . $section_name . '</td></tr>';
		echo $content;
		echo '</table>';
	}
}