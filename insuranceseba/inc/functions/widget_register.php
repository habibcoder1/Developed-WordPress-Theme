<?php  
/**
 * @package Insurance Seba
 * 
 * Widget Register
 */

 if (!defined('ABSPATH')) {
	exit('not valid');
}


/* ========================
 	widget register
======================== */
add_action('widgets_init', 'iseba_register_sidebar_widgets');
function iseba_register_sidebar_widgets(){
    // Home Page Right Sidebar
    register_sidebar(array(
        'name'    		=> __('Home Page Right Sidebar', 'insurance-seba'),
		'id'      		=> 'iseba-rightsidebar1',
		'description'   => __('This is home page right sidebar', 'insurance-seba'),
		'class'   		=> '',
		'before_widget' => '<div class="right_section-one widget bg-[#EEEEEE] pl-1 mt-2 sm:mt-0">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="section-title"><h5 class="text-[15px] uppercase bg-[#EEEEEE] pl-1 py-1">',
		'after_title'   => '</h5></div>',
    ));
    // Policy Post Type Right Sidebar
    register_sidebar(array(
        'name'    		=> __('Policy Page Right Sidebar', 'insurance-seba'),
		'id'      		=> 'iseba-rightsidebar3',
		'description'   => __('This is policy page right sidebar', 'insurance-seba'),
		'class'   		=> '',
		'before_widget' => '<div class="right_section-one bg-[#EEEEEE] mt-2 border-2 border-[#ccc]">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="section-title">
        <h5 class="text-lg capitalize bg-[#333] text-white pl-5 py-2 leading-6">',
		'after_title'   => '</h5></div>',
    ));
    // Insurance Seba Notice Widget Development
    register_widget('iseba_notice');

    // Insurance Seba Policy Summary Widget Development
    register_widget('iseba_policy_summary');

    // Insurance Seba Contact Widget Development
    register_widget('iseba_policy_contact');
}
