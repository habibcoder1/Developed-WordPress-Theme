<?php  
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * This template for registering widgets
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 



/* ========================
    widget register
======================== */
add_action('widgets_init', 'witl_register_sidebar_widgets');
function witl_register_sidebar_widgets(){

    // Right Sidebar
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'witl'),
        'id'            => 'witl-rightsidebar1',
        'description'   => __('This is main sidebar', 'witl'),
        'class'         => 'adfasdfsdf',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title"><h3 class="text-capitalize">',
        'after_title'   => '</h3></div>',
    ));

    // WITL Latest Post Widget Development
    register_widget('witl_latestpost');

    // WITL Services Widget Development
    register_widget('witl_services_widget');

}