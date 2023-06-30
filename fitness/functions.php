<?php 

/*
	HR Fitness Theme Functions and Definations
*/

// ABSPATH defined
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}



/* =============================
	Require Files
============================= */

// TGM Plugins
if (file_exists(dirname(__FILE__).'/lib/plugins/config.php')) {
	require_once(dirname(__FILE__).'/lib/plugins/config.php');
}
// Redux Framework
if (file_exists(dirname(__FILE__).'/lib/redux/redux-core/framework.php')) {
	require_once(dirname(__FILE__).'/lib/redux/redux-core/framework.php');
}
// Redux Config
if (file_exists(dirname(__FILE__).'/lib/redux/sample/config.php')) {
	require_once(dirname(__FILE__).'/lib/redux/sample/config.php');
}
// Widgets Development
if (file_exists(dirname(__FILE__).'/widgets/widgets.php')) {
	require_once(dirname(__FILE__).'/widgets/widgets.php');
}
// Shortcode Home Booking
if (file_exists(dirname(__FILE__).'/shortcodes/homeAll/shortcode-homebooking.php')) {
	require_once(dirname(__FILE__).'/shortcodes/homeAll/shortcode-homebooking.php');
}
// Shortcode Home Welcome One
if (file_exists(dirname(__FILE__).'/shortcodes/homeAll/shortcode-homewelcome1.php')) {
	require_once(dirname(__FILE__).'/shortcodes/homeAll/shortcode-homewelcome1.php');
}
// Shortcode Home Fitness Categories
if (file_exists(dirname(__FILE__).'/shortcodes/homeAll/shortcode-homecategory.php')) {
	require_once(dirname(__FILE__).'/shortcodes/homeAll/shortcode-homecategory.php');
}
// Shortcode Home Personal Trainer
if (file_exists(dirname(__FILE__).'/shortcodes/homeAll/shortcode-homepertrainer.php')) {
	require_once(dirname(__FILE__).'/shortcodes/homeAll/shortcode-homepertrainer.php');
}
// Shortcode Home Expert Trainer
if (file_exists(dirname(__FILE__).'/shortcodes/homeAll/shortcode-homeexpertrainer.php')) {
	require_once(dirname(__FILE__).'/shortcodes/homeAll/shortcode-homeexpertrainer.php');
}
// Shortcode Home Contact
if (file_exists(dirname(__FILE__).'/shortcodes/homeAll/shortcode-homecontact.php')) {
	require_once(dirname(__FILE__).'/shortcodes/homeAll/shortcode-homecontact.php');
}
// Shortcode About Company
if (file_exists(dirname(__FILE__).'/shortcodes/aboutAll/shortcode-aboutcompany.php')) {
	require_once(dirname(__FILE__).'/shortcodes/aboutAll/shortcode-aboutcompany.php');
}
// Shortcode About SEO
if (file_exists(dirname(__FILE__).'/shortcodes/aboutAll/shortcode-aboutseospeech.php')) {
	require_once(dirname(__FILE__).'/shortcodes/aboutAll/shortcode-aboutseospeech.php');
}
// Shortcode About Beautiful Trainer
if (file_exists(dirname(__FILE__).'/shortcodes/aboutAll/shortcode-aboutbeautiful-trainer.php')) {
	require_once(dirname(__FILE__).'/shortcodes/aboutAll/shortcode-aboutbeautiful-trainer.php');
}
// Shortcode About Counter
if (file_exists(dirname(__FILE__).'/shortcodes/aboutAll/shortcode-aboutcounter.php')) {
	require_once(dirname(__FILE__).'/shortcodes/aboutAll/shortcode-aboutcounter.php');
}
// Shortcode Team Manager
if (file_exists(dirname(__FILE__).'/shortcodes/teamAll/shortcode-teammanager.php')) {
	require_once(dirname(__FILE__).'/shortcodes/teamAll/shortcode-teammanager.php');
}
// Shortcode Team Members
if (file_exists(dirname(__FILE__).'/shortcodes/teamAll/shortcode-teammembers.php')) {
	require_once(dirname(__FILE__).'/shortcodes/teamAll/shortcode-teammembers.php');
}
// Shortcode Contact Details
if (file_exists(dirname(__FILE__).'/shortcodes/contactAll/shortcode-contactdetails.php')) {
	require_once(dirname(__FILE__).'/shortcodes/contactAll/shortcode-contactdetails.php');
}
// Shortcode Contact Form
if (file_exists(dirname(__FILE__).'/shortcodes/contactAll/shortcode-contactform.php')) {
	require_once(dirname(__FILE__).'/shortcodes/contactAll/shortcode-contactform.php');
}
// Shortcode Contact Map Social Links
if (file_exists(dirname(__FILE__).'/shortcodes/contactAll/shortcode-contactmapsocial.php')) {
	require_once(dirname(__FILE__).'/shortcodes/contactAll/shortcode-contactmapsocial.php');
}
// Shortcode Price Table
if (file_exists(dirname(__FILE__).'/shortcodes/planAll/shortcode-pricetable.php')) {
	require_once(dirname(__FILE__).'/shortcodes/planAll/shortcode-pricetable.php');
}




/* =============================
	Style Enqueue
============================= */
add_action('wp_enqueue_scripts', 'hrfitness_styles_enqueu');
function hrfitness_styles_enqueu(){

	// google fonts
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');
	
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min-5.1.1.css');
	wp_enqueue_style('datetimepicker', get_template_directory_uri().'/css/datetimepicker.min.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/css/owl.carousel.min-2.3.4.css');
	wp_enqueue_style('all-min', get_template_directory_uri().'/css/all.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/fontawesome.min-5.15.4.css');
	wp_enqueue_style('stylesheet', get_stylesheet_uri() );
	wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css' );

}



/* =============================
	Scripts Enqueue
============================= */
add_action('wp_enqueue_scripts', 'hrfitness_scripts_enqueue');
function hrfitness_scripts_enqueue(){

	wp_enqueue_script('owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '', true);
	wp_enqueue_script('validate', get_template_directory_uri().'/js/jquery.validate-1.19.3.min.js', array('jquery'), '', true);
	wp_enqueue_script('date-time', get_template_directory_uri().'/js/jquery.datetimepicker.full.min.js', array('jquery'), '', true);
	wp_enqueue_script('circle-progress-bar', get_template_directory_uri().'/js/circle-progress.min.js', array('jquery'), '', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array('jquery'), '', true);
	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), '', true);
	// comments
	wp_enqueue_script('comment-reply');

}

/// Conditional Scripts for lt IE 9 ////
add_action('wp_enqueue_scripts', 'hrfintess_conditional_scripts');
function hrfintess_conditional_scripts(){

	wp_enqueue_script('html5shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_script_add_data( 'html5shim-9', 'conditional', 'It ie 9' );

}


/* =============================
	Theme Supports
============================= */
add_action('after_setup_theme', 'hrfitness_theme_supports');
function hrfitness_theme_supports(){

	add_theme_support('title-tag');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('custom-logo', array('width' => 120, 'height' => 80));
	add_theme_support('woocommerce');
	add_theme_support('widgets');
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('audio', 'video', 'gallery', 'quote', 'aside'));
	// text domain
	load_theme_textdomain('hrfitness', get_template_directory().'/lang');
	// menu register
	register_nav_menu('hrfitness-mleftmenu', esc_html__('Primary Menu', 'hrfitness'));
	register_nav_menu('hrfitness-mrightmenu', esc_html__('Header Right', 'hrfitness'));
	register_nav_menu('hrfitness-footmenu', esc_html__('Footer Menu', 'hrfitness'));

}


/* =============================
	Custom Post Type
============================= */
add_action('init', 'hrfitness_custom_post_type');
function hrfitness_custom_post_type(){

	// 
	register_post_type('', array(

	));

}


/* =============================
	Register Sidebar
============================= */
add_action('widgets_init', 'hrfitness_sidebar_development');
function hrfitness_sidebar_development(){

	// footer one
	register_sidebar(array(
		'name'          => __('Footer One', 'hrfitness'),
		'id'            => 'hrfitness_footer1',
		'description'   => 'Footer One',
		'before_widget' => '<div class="footer-content">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="footer-title"> <h3>',
		'after_title'   => '</h3> </div>',
		'class'         => '',
	));

	// footer subscribe
	register_sidebar(array(
		'name'          => __('Footer Subscribe', 'hrfitness'),
		'id'            => 'hrfitness_footersubscrbe',
		'description'   => 'Footer Subscribe',
		'before_widget' => '<div class="footer-form">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
		'class'         => '',
	));

	// footer two
	register_sidebar(array(
		'name'          => __('Footer Two', 'hrfitness'),
		'id'            => 'hrfitness_footer2',
		'before_widget' => '<div class="blog">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="blog-title"> <h3>',
		'after_title'   => '</h3> </div>',
		'class'         => '',
	));

	// footer three
	register_sidebar(array(
		'name'          => __('Footer Three', 'hrfitness'),
		'id'            => 'hrfitness_footer3',
		'before_widget' => '<div class="instagram">', 
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'class'         => '',
	));


	// footer blog widgets development
	register_widget('hrfitness_footerblog');

}




/* ==================================
   Visual Composer build in theme
=================================== */

	add_action('vc_before_init', 'hrzfood_vc_set_theme');

	function hrzfood_vc_set_theme(){
		vc_set_as_theme();
	}



/* ===============================
	Comment Filed Set at Bootom
=============================== */
function hr_move_comment_field_to_bottom( $fields ) {
 
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;

    return $fields;
 
}
add_filter( 'comment_form_fields',  'hr_move_comment_field_to_bottom', 18 );




/*
	Woocommerce
*/


add_filter('woocommerce_show_page_title', function(){
	return;
});