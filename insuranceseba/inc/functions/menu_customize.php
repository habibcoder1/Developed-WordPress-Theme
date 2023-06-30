<?php  
/**
 * @package Insurance Seba
 * 
 * Menu Customize Code
 */

 if (!defined('ABSPATH')) {
	exit('not valid');
}



/* ======================================
 	Class add in Menus Dynamically
====================================== */
/* == For Side Menu == */
// class add in a tag
add_filter('nav_menu_link_attributes', 'iseba_sidemenu_addin_a_class', 10, 3);
function iseba_sidemenu_addin_a_class($atts, $item, $args) {
    // side menu id
    $iseba_sidemenu_a = array(
        'isebasmenu',  
    );

    if (in_array($args->theme_location, $iseba_sidemenu_a)) {
        $atts['class'] = 'text-white py-2 pl-4 font-bold block border-b-2 rounded-b-md text-lg hover:bg-[#333] hover:text-white'; // classes
    }

    return $atts;
}

/* == For Main Menu == */
// class add in a tag
add_filter('nav_menu_link_attributes', 'iseba_mainmenu_addin_a_class', 10, 3);
function iseba_mainmenu_addin_a_class($atts, $item, $args) {
    // main menu id
    $iseba_mainmenu_a = array(
        'isebapmenu',  
    );

    if (in_array($args->theme_location, $iseba_mainmenu_a)) {
        $atts['class'] = 'text-xl flex justify-start items-center'; // classes
    }

    return $atts;
}
// class add in li list
add_filter('nav_menu_css_class', 'iseba_mainmenu_addin_li_list', 10, 3);
function iseba_mainmenu_addin_li_list($classes, $item, $args) {
    // main menu id
    $iseba_sidemenu_li = array(
        'isebapmenu',   
    );

    if (in_array($args->theme_location, $iseba_sidemenu_li)) {
        $classes[] = 'pr-6 pl-1 py-2 text-white text-left w-full'; // classes
    }

    return $classes;
}
