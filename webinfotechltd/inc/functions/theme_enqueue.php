<?php  
/**
 * @package Web Info Tech Ltd
 * 
 * Web Info Tech Ltd theme enqueue files
 * Version: 1.0.0
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 

/* ===========================
    Enqueue All Stylesheet
=========================== */
add_action('wp_enqueue_scripts', 'witl_stylesheet_enqueue');
function witl_stylesheet_enqueue(){
    // google font
    wp_enqueue_style('witl-raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@700;800;900&display=swap');
    wp_enqueue_style('witl-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&display=swap');
    wp_enqueue_style('witl-manrope', 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500&display=swap');
    // stylesheet
    wp_enqueue_style('witl-all', get_template_directory_uri().'/assets/css/all.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('witl-fontawesome', get_template_directory_uri().'/assets/css/fontawesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('witl-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('witl-swiper', get_template_directory_uri().'/assets/css/swiper.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('witl-slick', get_template_directory_uri().'/assets/css/slick.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('witl-custom', get_template_directory_uri().'/assets/css/custom.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('witl-stylesheet', get_stylesheet_uri(), array(), '1.0.0', 'all');
}


/* =======================
    Enqueue All Scripts
======================= */
add_action('wp_enqueue_scripts', 'witl_scripts_enqueue');
function witl_scripts_enqueue(){
    // jquery ui tabs
    wp_enqueue_script('jquery-ui-tabs');
    // scripts
    wp_enqueue_script('witl-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('witl-swiper', get_template_directory_uri().'/assets/js/swiper.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('witl-slick', get_template_directory_uri().'/assets/js/slick.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('witl-custom', get_template_directory_uri().'/assets/js/custom.js', ['jquery'], '1.0.0', true);
    // comments form
    wp_enqueue_script('comment-reply');
    // for ajax  (here custom js id and wp_localize id need to be same)
    wp_localize_script('witl-custom', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
};

// conditional scritps
add_action('wp_enqueue_scripts', 'witl_conditional_scripts');
function witl_conditional_scripts(){
    wp_enqueue_script('html5shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_script_add_data('html5shim', 'conditional', 'if It ie 9');
}

