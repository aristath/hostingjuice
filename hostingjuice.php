<?php
/*
Plugin Name: Hosting Juice - Hosting Post type
Plugin URI: http://hostingjuic.com
Description: Hosting post type, fields etc.
Version: 1.0.0
Author: Aristeides Stathopoulos
Author URI: http://aristeides.com
License: GPLv2 or later
GitHub Plugin URI: https://github.com/aristath/hostingjuice
*/


/*
 * Create the "Hosting" custom post type
 */
add_action( 'init', 'hj_create_hosting_post_type' );
function hj_create_hosting_post_type() {
	register_post_type(
		'hj_hosting',
		array(
			'labels'            => array(
				'name'          => __( 'Hosting' ),
				'singular_name' => __( 'Hosting' )
			),
			'public'            => true,
			'has_archive'       => true,
		)
	);
}


add_filter( 'cmb_meta_boxes', 'hj_hosting_metabox' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function hj_hosting_metabox( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_hj_';

	$meta_boxes[] = array(
		'id'         => 'hj_hosting_metabox',
		'title'      => 'Hosting Fields',
		'pages'      => array( 'hj_hosting', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => hj_hosting_fields_array(),
	);

	return $meta_boxes;
}

if ( !class_exists( 'cmb_Meta_Box' ) ) :
	require_once( plugin_dir_path(__FILE__) . 'includes/metabox-init.php' );
endif;
require_once( plugin_dir_path(__FILE__) . 'includes/template-functions.php' );


function hj_hosting_fields_array() {
	$fields = array(
		array( 'section' => 'general', 'id'   => $prefix . 'type',        'name' => 'Hosting Type',                'type' => 'select',
			'options' => array(
				array( 'name' => 'Shared',   'value' => 'shared', ),
				array( 'name' => 'Reseller', 'value' => 'reseller', ),
				array( 'name' => 'Special',  'value' => 'special', ),
           ),
		),

		array( 'section' => 'general', 'id'   => $prefix . 'purchaselink',  'name' => 'Purchase Link',   'type' => 'text' ),
		array( 'section' => 'general', 'id'   => $prefix . 'pricepermonth', 'name' => 'Price Per Month', 'type' => 'text' ),
		array( 'section' => 'general', 'id'   => $prefix . 'priceperyear',  'name' => 'Price Per Year',  'type' => 'text' ),


		array( 'section' => 'features', 'id'   => $prefix . 'disk',        'name' => 'Disk Space',      'type' => 'text' ),
		array( 'section' => 'features', 'id'   => $prefix . 'bandwidth',   'name' => 'Bandwidth',       'type' => 'text' ),
		array( 'section' => 'features', 'id'   => $prefix . 'cpanel',      'name' => 'cPanel',          'type' => 'checkbox' ),
		array( 'section' => 'features', 'id'   => $prefix . 'databases',   'name' => 'Databases',       'type' => 'text' ),
		array( 'section' => 'features', 'id'   => $prefix . 'emailsnr',    'name' => 'E-mail Accounts', 'type' => 'text' ),
		array( 'section' => 'features', 'id'   => $prefix . 'softaculous', 'name' => 'Softaculous',     'type' => 'checkbox' ),
		array( 'section' => 'features', 'id'   => $prefix . 'fantastico',  'name' => 'Fantastico',      'type' => 'checkbox' ),

		// Domain/FTP Features
		array( 'section' => 'domain_ftp', 'id'   => $prefix . 'addondomain', 'name' => 'Addon Domains',  'type' => 'text' ),
		array( 'section' => 'domain_ftp', 'id'   => $prefix . 'parkdomains', 'name' => 'Parked Domains', 'type' => 'text' ),
		array( 'section' => 'domain_ftp', 'id'   => $prefix . 'freedomain',  'name' => 'Free Domain',    'type' => 'checkbox' ),
		array( 'section' => 'domain_ftp', 'id'   => $prefix . 'subdomains',  'name' => 'Sub-Domains',    'type' => 'text' ),
		array( 'section' => 'domain_ftp', 'id'   => $prefix . 'ftp',         'name' => 'FTP Access',     'type' => 'checkbox' ),

		// Support
		array( 'section' => 'support', 'id'   => $prefix . 'uptimeguara', 'name' => '99.9% Uptime Guarantee',      'type' => 'checkbox' ),
		array( 'section' => 'support', 'id'   => $prefix . 'support247',  'name' => '24/7 Support',                'type' => 'checkbox' ),
		array( 'section' => 'support', 'id'   => $prefix . 'moneyback',   'name' => '30-Day Money Back Guarantee', 'type' => 'checkbox' ),

		// e-mail
		array( 'section' => 'email', 'id'   => $prefix . 'spamfilter',  'name' => 'Spam Filters',                'type' => 'checkbox' ),
		array( 'section' => 'email', 'id'   => $prefix . 'antivirus',   'name' => 'Virus Protection',            'type' => 'checkbox' ),
		array( 'section' => 'email', 'id'   => $prefix . 'boxtrappers', 'name' => 'Boxtrappers',                 'type' => 'checkbox' ),
		array( 'section' => 'email', 'id'   => $prefix . 'horde',       'name' => 'Horde',                       'type' => 'checkbox' ),
		array( 'section' => 'email', 'id'   => $prefix . 'squirrel',    'name' => 'SquirrelMail',                'type' => 'checkbox' ),
		array( 'section' => 'email', 'id'   => $prefix . 'roundcube',   'name' => 'roundcube',                   'type' => 'checkbox' ),
		array( 'section' => 'email', 'id'   => $prefix . 'imap',        'name' => 'IMAP Support',                'type' => 'checkbox' ),
		array( 'section' => 'email', 'id'   => $prefix . 'forwarder',   'name' => 'Unlimited! E-mail Forwarders','type' => 'checkbox' ),
		array( 'section' => 'email', 'id'   => $prefix . 'responder',   'name' => 'Unlimited! E-mail Responders','type' => 'checkbox' ),
		array( 'section' => 'email', 'id'   => $prefix . 'smtp',        'name' => 'SMTP',                        'type' => 'checkbox' ),

		// Supported Web Hosting Features
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'php5',        'name' => 'PHP 5',                       'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'perl',        'name' => 'PERL',                        'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'mysql',       'name' => 'MySQL',                       'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'postgresql',  'name' => 'PostgreSQL',                  'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'js',          'name' => 'Javascript',                  'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'cgibin',      'name' => 'CGI-Bin',                     'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'gd',          'name' => 'GD Library',                  'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'dirprotect',  'name' => 'Directory Protection',        'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'sendmail',    'name' => 'Sendmail',                    'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'carts',       'name' => 'Shopping Carts',              'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'zend',        'name' => 'Zend Optimizer',              'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'crons',       'name' => 'Cronjobs',                    'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'ioncube',     'name' => 'Ioncube',                     'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'backups',     'name' => 'Ability to Backup/Restore',   'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'anstats',     'name' => 'Analog Stats',                'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'awstats',     'name' => 'Awstats',                     'type' => 'checkbox' ),
		array( 'section' => 'hosting_features', 'id'   => $prefix . 'webalizer',   'name' => 'Webalizer',                   'type' => 'checkbox' ),
	);

	return $fields;
}