<?php

/**
 * Hosting package details widget
 */
class HJ_Package_Widget extends WP_Widget {
	private $fields = array();

	function __construct() {
		$widget_ops = array(
			'classname'   => 'widget_hj_pachage_details',
			'description' => __( 'Use this widget to add details to hosting packages', 'hj' ) );

		$this->WP_Widget('widget_hj_pachage_details', __( 'Package Details', 'hj' ), $widget_ops);
		$this->alt_option_name = 'widget_hj_pachage_details';

		add_action( 'save_post', array( &$this, 'flush_widget_cache' ) );
		add_action( 'deleted_post', array( &$this, 'flush_widget_cache' ) );
		add_action( 'switch_theme', array( &$this, 'flush_widget_cache' ) );
	}

	function widget( $args, $instance ) {
		global $post;
		$cache = wp_cache_get( 'widget_hj_pachage_details', 'widget' );

		if ( ! is_array( $cache ) ) {
			$cache = array();
		}

		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = null;
		}

		if ( isset($cache[$args['widget_id']] ) ) {
			echo $cache[$args['widget_id']];
			return;
		}

		ob_start();
		extract( $args, EXTR_SKIP );

		if ( ! is_singular( 'hj_hosting' ) ) {
			return;
		}

		$title = apply_filters('widget_title', empty( $instance['title'] ) ? __( 'Package Details', 'hj' ) : $instance['title'], $instance, $this->id_base );

		foreach( $this->fields as $name => $label ) {
			if ( ! isset( $instance[$name] ) ) { $instance[$name] = ''; }
		}

		echo $before_widget;

		if ( $title ) {
			echo $before_title, $title, $after_title;
		}

		hj_section_table( 'features', __('Features', 'hj') );
		// hj_section_table( 'domain_ftp', __('Domain / FTP', 'hj') );
		// hj_section_table( 'support', __('Support', 'hj') );
		// hj_section_table( 'email', __('e-mail', 'hj') );
		// hj_section_table( 'hosting_features', __('Advanced Features', 'hj') );

		echo $after_widget;

		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set( 'widget_hj_pachage_details', $cache, 'widget' );
	}

	function update( $new_instance, $old_instance ) {
		$instance = array_map( 'strip_tags', $new_instance );

		$this->flush_widget_cache();

		$alloptions = wp_cache_get( 'alloptions', 'options' );

		if ( isset( $alloptions['widget_hj_pachage_details'] ) ) {
			delete_option( 'widget_hj_pachage_details' );
		}

		return $instance;
	}

	function flush_widget_cache() {
		wp_cache_delete( 'widget_hj_pachage_details', 'widget' );
	}

	function form( $instance ) {
		foreach( $this->fields as $name => $label ) {
			${$name} = isset( $instance[$name] ) ? esc_attr( $instance[$name] ) : '';
		}
	}
}

add_action( 'widgets_init', function() { register_widget( 'HJ_Package_Widget' ); } );
