<?php
/**
 * Kiddies recommended plugins
 *
 * @package Kiddies
 */

if( isset( $_GET['page'] ) && $_GET['page'] == 'theme-dashboard' ){
	return;
}
require_once trailingslashit( get_template_directory() ) . 'inc/admin/recommended-plugins/class-tgm-plugin-activation.php';

function kiddies_recommended_plugins_array() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'               => 'Demo Import Kit',
			'slug'               => 'demo-import-kit',
			'is_callable'        => 'Demo_Import_Kit_Class',
			'required'           => false,
		),
        array(
            'name'               => 'Themeinwp Import Companion',
            'slug'               => 'themeinwp-import-companion',
            'is_callable'        => 'Themeinwp_Import_Companion_Class',
            'required'           => false,
        ),
        array(
            'name'               => 'Contact Form 7',
            'slug'               => 'contact-form-7',
            'is_callable'        => 'WPCF7_ContactForm',
            'required'           => false,
        ),
        array(
            'name'               => 'Mailchimp for WP',
            'slug'               => 'mailchimp-for-wp',
            'is_callable'        => 'MC4WP_Admin',
            'required'           => false,
        ), 
	);

	$config = array(
		'id'           => 'kiddies',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		
	);

	tgmpa( $plugins, $config );
}


add_action( 'tgmpa_register', 'kiddies_recommended_plugins_array' );
