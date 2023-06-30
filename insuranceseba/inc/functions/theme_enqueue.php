<?php  
/**
 * @package Insurance Seba
 * 
 * Theme all Enqueue Files
 */

 if (!defined('ABSPATH')) {
	exit('you are a foolish');
}


/* ===========================
 	All Stylesheet Enqueue
=========================== */
add_action('wp_enqueue_scripts', 'iseba_all_stylesheet');
function iseba_all_stylesheet(){
	// google font
	wp_enqueue_style('insurance-seba-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap');
	// others style
	wp_enqueue_style('insurance-seba-all', get_template_directory_uri().'/assets/css/all.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('insurance-seba-fontawesome', get_template_directory_uri().'/assets/css/fontawesome.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('insurance-seba-tailwindcss', get_template_directory_uri().'/assets/css/tailwind.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('insurance-seba-custom', get_template_directory_uri().'/assets/css/custom.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('insurance-seba-stylesheet', get_stylesheet_uri(), array(), '1.0.0', 'all');
}

/* ========================
 	All Scripts Enqueue
======================== */
add_action('wp_enqueue_scripts', 'iseba_all_scripts');
function iseba_all_scripts(){
	wp_enqueue_script('insurance-seba-custom', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), '1.0.0', true);
    //for comments form
    wp_enqueue_script('comment-reply');
    // Localize the JavaScript file with the AJAX URL
    wp_localize_script('insurance-seba-custom', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
	
}

// conditional scritps
add_action('wp_enqueue_scripts', 'iseba_conditional_scripts');
function iseba_conditional_scripts(){
	wp_enqueue_script('html5shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_script_add_data('html5shim', 'conditional', 'if It ie 9');
}
