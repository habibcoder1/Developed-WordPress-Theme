<?php 
/**
 * @package Insurance Seba
 * 
 * Insurance Seba Theme Cusomizer
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}

/* ======================
 	Theme Customize
======================= */
add_action('customize_register', 'iseba_theme_customizer');
function iseba_theme_customizer($wp_customize){
	// top header 
	////////////////
	// header panel
	$wp_customize->add_panel('iseba_topheader_panel', array(
		'title'       => __('Top Header', 'insurance-seba'),
		'priority'    => 10,
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_section('iseba_top_header', array(
		'title'       => __('Top Header Details', 'insurance-seba'),
		'description' => __('Top Heaer BG Color & Text here', 'insurance-seba'),
		'panel'       => 'iseba_topheader_panel',
	));
	// bg color
	$wp_customize->add_setting('iseba_topheader_bgcolor', array(
		'default'     => '#333',
		'capability'  => 'edit_theme_options'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'iseba_topheader_bgcolor', array(
		'label'       => __('Top Header Background Color', 'insurance-seba'),
		'section'     => 'iseba_top_header',
		'setting'     => 'iseba_topheader_bgcolor',
	)));
	// top header content
	$wp_customize->add_setting('iseba_theader_content', array(
		'default'     => 'Protect Your Assets',
		'capability'  => 'edit_theme_options'
	));
	$wp_customize->add_control('iseba_theader_content', array(
		'label'       => __('Top Header Text', 'insurance-seba'),
		'section'     => 'iseba_top_header',
		'setting'     => 'iseba_theader_content',
	));

	// header social //
	$wp_customize->add_section('iseba_topheader_socail', array(
		'title'       => __('Header Social', 'insurance-seba'),
		'description' => __('Top Heaer Social Icons here', 'insurance-seba'),
		'panel'       => 'iseba_topheader_panel',
	));
	// facebook
	$wp_customize->add_setting('iseba_facebook', array(
		'default'     => 'habibcoder1',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_facebook', array(
		'label'       => __('Facebook Username', 'insurance-seba'),
		'section'     => 'iseba_topheader_socail',
		'setting'     => 'iseba_facebook',
	));
	// Twitter
	$wp_customize->add_setting('iseba_twitter', array(
		'default'     => 'habibcoder',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_twitter', array(
		'label'       => __('Twitter Username', 'insurance-seba'),
		'section'     => 'iseba_topheader_socail',
		'setting'     => 'iseba_twitter',
	));
	// Linkedin
	$wp_customize->add_setting('iseba_linkedin', array(
		'default'     => 'habibcoder',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_linkedin', array(
		'label'       => __('LinkedIn Username', 'insurance-seba'),
		'section'     => 'iseba_topheader_socail',
		'setting'     => 'iseba_linkedin',
	));
	// Email
	$wp_customize->add_setting('iseba_email', array(
		'default'     => 'contact.habibcoder@gmail.com',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_email', array(
		'label'       => __('Email Username', 'insurance-seba'),
		'section'     => 'iseba_topheader_socail',
		'setting'     => 'iseba_email',
	));
	// Phone
	$wp_customize->add_setting('iseba_phone', array(
		'default'     => '+880 1933885872',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_phone', array(
		'label'       => __('Mobile Number', 'insurance-seba'),
		'section'     => 'iseba_topheader_socail',
		'setting'     => 'iseba_phone',
	));


	// General Option 
	////////////////////
	$wp_customize->add_section('iseba_general_option', array(
		'title'       => __('General Option', 'insurance-seba'),
		'description' => __('General option description here', 'insurance-seba'),
		'priority'    => 12
	));
	// main logo
	$wp_customize->add_setting('iseba_logo', array(
		'default'     => get_template_directory_uri().'/assets/img/logo.png',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'iseba_logo', array(
		'label'       => __('Main Logo', 'insurance-seba'),
		'section'     => 'iseba_general_option',
		'setting'     => 'iseba_logo'
	)));
	// favicon
	$wp_customize->add_setting('iseba_favicon', array(
		'default'     => get_template_directory_uri().'/assets/img/logo.png',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'iseba_favicon', array(
		'label'       => __('Favicon Icon', 'insurance-seba'),
		'section'     => 'iseba_general_option',
		'setting'     => 'iseba_favicon'
	)));
	// preloader
	$wp_customize->add_setting('iseba_preloader', array(
		'default'     => 'yes',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_preloader', array(
		'label'       => __('Preloader Yes/Not', 'insurance-seba'),
		'description' => __('default: yes', 'insurance-seba'),
		'section'     => 'iseba_general_option',
		'setting'     => 'iseba_preloader',
		'type'        => 'select',
		'choices'     => array(
			'yes'     => 'Yes',
			'not'     => 'Not'
		)
	));


	// Footer Option
	//////////////////
	$wp_customize->add_panel('iseba_footer_panel', array(
		'title'       => __('Footer Option', 'insurance-seba'),
		'priority'    => 15,
		'capability'  => 'edit_theme_options',
	));

	$wp_customize->add_section('iseba_footer', array(
		'title'       => __('Footer Bottom', 'insurance-seba'),
		'description' => __('Footer Bottom Details', 'insurance-seba'),
		'panel'       => 'iseba_footer_panel',
	));
	// bg color
	$wp_customize->add_setting('iseba_footerbg', array(
		'default'     => '#333',
		'capability'  => 'edit_theme_options'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'iseba_footerbg', array(
		'label'       => __('Footer Background Color', 'insurance-seba'),
		'section'     => 'iseba_footer',
		'setting'     => 'iseba_footerbg',
	)));
	// Copyright text
	$wp_customize->add_setting('iseba_copryrighttext', array(
		'default'     => '&copy; 2023 Insurance Seba. All Right Reserved.',
		'capability'  => 'edit_theme_options'
	));
	$wp_customize->add_control('iseba_copryrighttext', array(
		'label'       => __('Copryright Text', 'insurance-seba'),
		'section'     => 'iseba_footer',
		'setting'     => 'iseba_copryrighttext',
	));

	// footer one
	$wp_customize->add_section('iseba_footer1', array(
		'title'       => __('Footer One', 'insurance-seba'),
		'description' => __('Footer One Details', 'insurance-seba'),
		'panel'       => 'iseba_footer_panel',
	));
	// title
	$wp_customize->add_setting('iseba_footer1title', array(
		'default'     => 'Mission',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_footer1title', array(
		'label'       => __('Title', 'insurance-seba'),
		'section'     => 'iseba_footer1',
		'setting'     => 'iseba_footer1title',
	));
	// content
	$wp_customize->add_setting('iseba_footer1content', array(
		'default'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus vitae, sequi libero molestias corrupti quisquam tempora quod nostrum consequatur nobis id, repellat quis cum magnam? Alias optio fuga qui facilis!',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_footer1content', array(
		'label'       => __('Description', 'insurance-seba'),
		'section'     => 'iseba_footer1',
		'setting'     => 'iseba_footer1content',
		'type'        => 'textarea',
	));

	// footer two
	$wp_customize->add_section('iseba_footer2', array(
		'title'       => __('Footer Two', 'insurance-seba'),
		'description' => __('Footer Two Details', 'insurance-seba'),
		'panel'       => 'iseba_footer_panel',
	));
	// title
	$wp_customize->add_setting('iseba_footer2title', array(
		'default'     => 'About',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_footer2title', array(
		'label'       => __('Title', 'insurance-seba'),
		'section'     => 'iseba_footer2',
		'setting'     => 'iseba_footer2title',
	));
	// content
	$wp_customize->add_setting('iseba_footer2content', array(
		'default'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus vitae, sequi libero molestias corrupti quisquam tempora quod nostrum consequatur nobis id, repellat quis cum magnam? Alias optio fuga qui facilis!',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_footer2content', array(
		'label'       => __('Description', 'insurance-seba'),
		'section'     => 'iseba_footer2',
		'setting'     => 'iseba_footer2content',
		'type'        => 'textarea',
	));


	// footer three
	$wp_customize->add_section('iseba_footer3', array(
		'title'       => __('Footer Three', 'insurance-seba'),
		'description' => __('Footer Three Details', 'insurance-seba'),
		'panel'       => 'iseba_footer_panel',
	));
	// title
	$wp_customize->add_setting('iseba_footer3title', array(
		'default'     => 'Contact Us',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_footer3title', array(
		'label'       => __('Title', 'insurance-seba'),
		'section'     => 'iseba_footer3',
		'setting'     => 'iseba_footer3title',
	));
	// address
	$wp_customize->add_setting('iseba_footer3address', array(
		'default'     => '91, kazi nazrul islam avenue, dhaka 1215, bangladesh',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_footer3address', array(
		'label'       => __('Address', 'insurance-seba'),
		'section'     => 'iseba_footer3',
		'setting'     => 'iseba_footer3address',
		'type'        => 'textarea',
	));
	// phone
	$wp_customize->add_setting('iseba_footer3phone', array(
		'default'     => '+8801819437714',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_footer3phone', array(
		'label'       => __('Phone Number', 'insurance-seba'),
		'section'     => 'iseba_footer3',
		'setting'     => 'iseba_footer3phone',
	));
	// email
	$wp_customize->add_setting('iseba_footer3email', array(
		'default'     => 'insurance.seba@gmail.com',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_footer3email', array(
		'label'       => __('Email', 'insurance-seba'),
		'section'     => 'iseba_footer3',
		'setting'     => 'iseba_footer3email',
	));
	// facebook
	$wp_customize->add_setting('iseba_footer3fb', array(
		'default'     => 'habibcoder1',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_footer3fb', array(
		'label'       => __('Facebook', 'insurance-seba'),
		'section'     => 'iseba_footer3',
		'setting'     => 'iseba_footer3fb',
	));
	// twitter
	$wp_customize->add_setting('iseba_footer3twitter', array(
		'default'     => 'habibcoder',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_footer3twitter', array(
		'label'       => __('Twitter', 'insurance-seba'),
		'section'     => 'iseba_footer3',
		'setting'     => 'iseba_footer3twitter',
	));
	// linkedin
	$wp_customize->add_setting('iseba_footer3linkedin', array(
		'default'     => 'habibcoder',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('iseba_footer3linkedin', array(
		'label'       => __('LinkedIn', 'insurance-seba'),
		'section'     => 'iseba_footer3',
		'setting'     => 'iseba_footer3linkedin',
	));



}

// remove site identity section
add_action( 'customize_register', 'iseba_hide_section', 20 );
function iseba_hide_section( $wp_customize ) {
    $wp_customize->remove_section( 'title_tagline' );
}
