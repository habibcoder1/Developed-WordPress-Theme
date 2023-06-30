<?php  
/**
 * @package hrpastyshop
 * 
 *  ========================
 *      THEME OPTIONS
 * =========================
 */

add_action('admin_menu', 'hr_add_theme_page');
function hr_add_theme_page(){

    // Theme Option Menu Item
    add_menu_page( 
        'HR Pasty Theme Option',            //Page Title
        'Theme Option',                     //Menu Name
        'manage_options',                   //Capability
        'hr-theme-option',                  //Slug
        'hr_general',                       //Callback function
        'dashicons-welcome-widgets-menus',  //Icon
        65,                                 // Menu Position
    );

    // Submenu for General Option
    add_submenu_page( 'hr-theme-option', 'General Options', 'General Option', 'manage_options', 'hr-theme-option', 'hr_general' );  //Here two slug & callback function is same for different menu item

    // Submenu for Custom CSS
    add_submenu_page( 'hr-theme-option', 'Custom CSS Options', 'Custom CSS', 'manage_options', 'custom-css', 'hr_custom_css');

    // Submenu for Custom JS
    add_submenu_page( 'hr-theme-option', 'Custom JavaScritp Options', 'Custom JS', 'manage_options', 'custom-js', 'hr_custom_js');

    
}

// Genral Option Details
function hr_general(){
    if (file_exists(dirname(__FILE__).'/general.php')) {
       require_once(dirname(__FILE__).'/general.php');
    }
}

// Custom CSS Details
function hr_custom_css(){
    if (file_exists(dirname(__FILE__).'/custom_css.php')) {
       require_once(dirname(__FILE__).'/custom_css.php');
    }
}

// Custom JavaScritp Details
function hr_custom_js(){
    if (file_exists(dirname(__FILE__).'/custom_js.php')) {
       require_once(dirname(__FILE__).'/custom_js.php');
    }
}





/* ============================================
  CSS add in frond-end between head tag 
============================================ */
$custom_css = get_option('custom-css');
if(!empty($custom_css)){
    add_action('wp_head', 'hr_custom_css_function');
    function hr_custom_css_function(){ ?>
    <style>
        <?php global $custom_css; 
        echo $custom_css; ?>
    </style>
    <?php
    }
}

/* ==============================================
  JS add in frond-end between script tag 
============================================== */
$custom_js = get_option('custom-js');
if(!empty($custom_js)){
    add_action('wp_footer', 'hr_custom_js_function');
    function hr_custom_js_function(){ ?>
    <script>
        (function($){
            'use strict';

            <?php global $custom_js; 
            echo $custom_js; ?>
            
        })(jQuery);
    </script>
    <?php
    }
}
