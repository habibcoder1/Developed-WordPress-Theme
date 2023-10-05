<?php  
/**
 * @package Web Info Tech Ltd
 * 
 * Web Info Tech Ltd  theme supports
 * Version: 1.0.0
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 


/* =======================
    Theme Support
======================= */
add_action( 'after_setup_theme', 'witl_theme_supports');
function witl_theme_supports(){
    add_theme_support('title-tag');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('widgets');
	add_theme_support('custom-logo', array('width' => 150, 'height' => 80));
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('audio', 'video', 'gallery'));
	// text domain
	load_theme_textdomain('witl', get_template_directory().'/languages');
	// register menus
	register_nav_menu('witlprimanymenu', __('Primay Menu', 'witl'));
	register_nav_menu('witlfooteronemenu', __('Footer Service Menu', 'witl'));
	register_nav_menu('witlfootertwomenu', __('Footer Quick Links Menu', 'witl'));
	register_nav_menu('witlcopyrightmenu', __('Copyright Area Menu', 'witl'));
};