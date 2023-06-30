<?php  
/**
 * @package Insurance Seba
 * 
 * Theme Support
 */

 if (!defined('ABSPATH')) {
	exit('not valid');
}


/* ======================
 	Theme Support
======================= */
add_action('after_setup_theme', 'iseba_theme_support');
function iseba_theme_support(){
	add_theme_support('title-tag');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('widgets');
	add_theme_support('woocommerce');
	add_theme_support('custom-logo', array('width' => 150, 'height' => 80));
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('audio', 'video', 'gallery', 'aside', 'quote', 'image', 'chat', 'link', 'status'));
	// text domain
	load_theme_textdomain('insurance-seba', get_template_directory().'/languages');
	// register menus
	register_nav_menu('isebapmenu', __('Primay Menu', 'insurance-seba'));
	register_nav_menu('isebasmenu', __('Side Menu', 'insurance-seba'));
}