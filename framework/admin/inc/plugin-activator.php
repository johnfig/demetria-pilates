<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.1.4
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


locate_template('framework/class/class-tgm-plugin-activation.php', true);


if (!function_exists('cmsms_register_theme_plugins')) {

function cmsms_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Contact Form Builder', 'yoga-fit'), 
			'slug'					=> 'cmsms-contact-form-builder', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsms-contact-form-builder.zip', 
			'required'				=> false, 
			'version'				=> '1.3.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'yoga-fit'), 
			'slug'					=> 'cmsms-content-composer', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsms-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '1.5.4', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'yoga-fit'), 
			'slug'					=> 'cmsms-mega-menu', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsms-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.4', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'yoga-fit'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '6.3.0', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'yoga-fit'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.4.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Timetable', 'yoga-fit'),  
			'slug'					=> 'timetable', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/timetable.zip', 
			'required'				=> false, 
			'version'				=> '3.9', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'yoga-fit'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WordPress SEO by Yoast', 'yoga-fit'), 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'yoga-fit'), 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('PayPal Donations', 'yoga-fit'),  
			'slug' 					=> 'paypal-donations', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('The Events Calendar', 'yoga-fit'), 
			'slug' 					=> 'the-events-calendar', 
			'required'				=> false 
		) 
	);
	
	
	$config = array( 
		'id' => 				'yoga-fit', 
		'default_path' => 		'', 
		'menu' => 				'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	__('Theme Required & Recommended Plugins', 'yoga-fit'), 
			'menu_title' => 	__('Theme Plugins', 'yoga-fit'), 
			'return' => 		__('Return to Theme Required & Recommended Plugins', 'yoga-fit') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'cmsms_register_theme_plugins');

