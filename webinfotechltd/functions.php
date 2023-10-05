<?php  
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Web Info Tech Ltd all theme functions and defination
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 

/* =======================
    Require Files
======================= */
// theme support
$theme_support = dirname(__FILE__).'/inc/functions/theme_support.php';
if(file_exists($theme_support)){
    require_once($theme_support);
}

// theme enqueue
$theme_enqueue = dirname(__FILE__).'/inc/functions/theme_enqueue.php';
if(file_exists($theme_enqueue)){
    require_once($theme_enqueue);
}

// Custom Post
$custom_post = dirname(__FILE__).'/inc/functions/custom_post_register.php';
if(file_exists($custom_post)){
    require_once($custom_post);
}

// Other Functions
$other_function = dirname(__FILE__).'/inc/functions/other_functions.php';
if(file_exists($other_function)){
    require_once($other_function);
}

// Widget Register
$widget_register = dirname(__FILE__).'/inc/functions/widget_register.php';
if(file_exists($widget_register)){
    require_once($widget_register);
}

// Theme Customizer
$theme_customizer = dirname(__FILE__).'/inc/theme-customizer/theme_customizer.php';
if(file_exists($theme_customizer)){
    require_once($theme_customizer);
}

// Latest Post Widget Development
$latestpost_widget_dev = dirname(__FILE__).'/inc/widgets/widget_latest_post.php';
if(file_exists($latestpost_widget_dev)){
    require_once($latestpost_widget_dev);
}

// Services Widget Development
$service_widget_dev = dirname(__FILE__).'/inc/widgets/widget_services.php';
if(file_exists($service_widget_dev)){
    require_once($service_widget_dev);
}

// Elementor Widget Development
$elementor_widget_dev = dirname(__FILE__).'/inc/elementor/witl_elementor_widgets.php';
if(file_exists($elementor_widget_dev)){
    require_once($elementor_widget_dev);
}