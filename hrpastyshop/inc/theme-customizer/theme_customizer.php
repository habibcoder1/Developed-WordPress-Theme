<?php
/** 
* @package hrpastyshop
*
* ==========================
*   Theme Customize Options
* ==========================
*/

add_action('customize_register', 'hrpasty_theme_customize_options');
function hrpasty_theme_customize_options($wp_customize){

	/* =====================
		General Option
	===================== */
	$wp_customize->add_section('hr_general_option', array(
		'title'        => __('General Option', 'hrapsty'),
		'description'  => __('Theme General Option', 'hrpasty'),
		'priority'     => 10,
	));

	// Website Layout
	$wp_customize->add_setting('hr_webiste_layout', array(
		'default'     => 'full',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_webiste_layout', array(
		'label'       => __('Website Layout', 'hrpasty'),
		'description' => __('website full width/box width', 'hrpasty'),
		'section'     => 'hr_general_option',
		'setting'     => 'hr_webiste_layout',
		'type'        => 'select',
		'choices'     => array(
			'full'    => 'Full Width',
			'box'     => 'Box Width',
		)
	));

	// Logo Text
	$wp_customize->add_setting('hr_logo_text', array(
		'default'     => 'Gustoso',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_logo_text', array(
		'label'       => __('Logo Text', 'hrpasty'),
		'description' => __('logo text here', 'hrpasty'),
		'section'     => 'hr_general_option',
		'setting'     => 'hr_logo_text',
	));

	// Favicon
	$wp_customize->add_setting('hr_favicon', array(
		'default'      => get_template_directory_uri().'/img/favicon.png',
		'capability'   => 'edit_theme_options',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hr_favicon', array(
		'label'        => __('Favicon Icon', 'hrpasty'),
		'description'  => __('favicon icon here', 'hrpasty'),
		'section'      => 'hr_general_option',
		'setting'      => 'hr_favicon',
	)));

	// Preloader On/Off
	$wp_customize->add_setting('hr_preloader_onoff', array(
		'default'     => 'visible',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_preloader_onoff', array(
		'label'       => __('Preloader Visible/Hidden', 'hrpasty'),
		'description' => __('preloader on/off. default is visible', 'hrpasty'),
		'section'     => 'hr_general_option',
		'setting'     => 'hr_preloader_onoff',
		'type'        => 'radio',
		'choices'     => array(
			'visible' => 'Visible',
			'hidden'  => 'Hidden',
		)
	));


	/* =====================
		Header Option
	===================== */
	$wp_customize->add_panel('header_panel', array(
		'title'        => __('Header Option', 'hrpasty'),
		'priority'     => 12,
		'capability'   => 'edit_theme_options',
	));
	$wp_customize->add_section('hr_header_option', array(
		'title'        =>  __('Header Details', 'hrapsty'),
		'description'  => __('Theme Header Details', 'hrpasty'),
		'panel'        => 'header_panel',
	));

	// Header Image
	$wp_customize->add_setting('hr_header_img', array(
		'default'      => get_template_directory_uri().'/img/hero.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hr_header_img', array(
		'label'        => __('Header Image', 'hrpasty'),
		'description'  => __('header bg image here', 'hrpasty'),
		'section'      => 'hr_header_option',
		'setting'      => 'hr_header_img',
	)));

	// Menu Position
	$wp_customize->add_setting('hr_menu_options', array(
		'default'      => 'center_menu',
		'capability'   => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_menu_options', array(
		'label'        => __('Menu Position', 'hrpasty'),
		'description'  => __('Select Menu Position(for Desktop & Tablet)', 'hrpasty'),
		'section'      => 'hr_header_option',
		'setting'      => 'hr_menu_options',
		'type'         => 'radio',
		'choices'      => array(
			'left_menu'   => 'Left Menu',
			'right_menu'  => 'Right Menu',
			'center_menu' => 'Center Menu',
		),
	));

	// Header Title
	$wp_customize->add_setting('hr_header_title', array(
		'default'      => 'Pastry with love',
		'capability'   => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_header_title', array(
		'label'        => __('Header Title', 'hrpasty'),
		'description'  => __('header title is here', 'hrpasty'),
		'section'      => 'hr_header_option',
		'setting'      => 'hr_header_title',
	));

	// Header Description First Line
	$wp_customize->add_setting('hr_header_desc_first', array(
		'default'      => 'We\'re bringing you fresh ingredients every',
		'capability'   => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_header_desc_first', array(
		'label'        => __('Header Description First Line', 'hrpasty'),
		'section'      => 'hr_header_option',
		'setting'      => 'hr_header_desc_first',
		'type'         => 'textarea',
	));

	// Header Description Second Line
	$wp_customize->add_setting('hr_header_desc_second', array(
		'default'      => 'day in ways you can\'t resist.',
		'capability'   => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_header_desc_second', array(
		'label'        => __('Header Description Second Line', 'hrpasty'),
		'section'      => 'hr_header_option',
		'setting'      => 'hr_header_desc_second',
	));

	// Header Button Link
	$wp_customize->add_setting('hr_header_button_link', array(
		'default'      => '#',
		'capability'   => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_header_button_link', array(
		'label'        => __('Header Button Link', 'hrpasty'),
		'section'      => 'hr_header_option',
		'setting'      => 'hr_header_button_link',
	));

	// Header Button Text
	$wp_customize->add_setting('hr_header_button_text', array(
		'default'      => 'our menu',
		'capability'   => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_header_button_text', array(
		'label'        => __('Header Button Text', 'hrpasty'),
		'section'      => 'hr_header_option',
		'setting'      => 'hr_header_button_text',
	));

	// Header Bottom Icon
	$wp_customize->add_setting('hr_header_botton_icon', array(
		'default'      => '<i class="fa-regular fa-lemon"></i>',
		'capability'   => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_header_botton_icon', array(
		'label'        => __('Header Bottom & Middle Icon', 'hrpasty'),
		'description'  => __('header bottom & middle icon here(fontawesome icon)', 'hrpasty'),
		'section'      => 'hr_header_option',
		'setting'      => 'hr_header_botton_icon',
	));

	/* ========================
		Header Social Icons 
	======================== */
	$wp_customize->add_section('hr_header_sociallinks', array(
		'title'        =>  __('Header Social Links', 'hrapsty'),
		'description'  => __('Header Social & Dark/Light Option', 'hrpasty'),
		'panel'        => 'header_panel',
	));

	// Dark/Light Mode
	$wp_customize->add_setting('hr_darklight', array(
		'default'     => 'on',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_darklight', array(
		'label'       => __('Dark/Light Mode', 'hrpasty'),
		'section'     => 'hr_header_sociallinks',
		'setting'     => 'hr_darklight',
		'type'        => 'radio',
		'choices'     => array(
			'on'      => 'ON',
			'off'     => 'OFF',
		)
	));

	// Twitter Link
	$wp_customize->add_setting('hr_twitter', array(
		'default'     => 'habibcoder',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_twitter', array(
		'label'       => __('Twitter Username', 'hrpasty'),
		'section'     => 'hr_header_sociallinks',
		'setting'     => 'hr_twitter',
	));
	
	// Facebook Link
	$wp_customize->add_setting('hr_facebook', array(
		'default'     => 'habibcoder1',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_facebook', array(
		'label'       => __('Facebook Username', 'hrpasty'),
		'section'     => 'hr_header_sociallinks',
		'setting'     => 'hr_facebook',
	));

	// Instagram Link
	$wp_customize->add_setting('hr_instagram', array(
		'default'     => 'habibcoder',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_instagram', array(
		'label'       => __('Instagram Username', 'hrpasty'),
		'section'     => 'hr_header_sociallinks',
		'setting'     => 'hr_instagram',
	));


	/* ==================
		Footer Option 
	=================== */
	$wp_customize->add_section('hr_footer_section', array(
		'title'       => __('Footer Option', 'hrpasty'),
		'description' => __('Footer Option Here', 'hrpasty'),
		'priority'    => 15,
	));

	//Footer Logo
	$wp_customize->add_setting('hr_footer_logo', array(
		'default'     => 'Gustoso',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_footer_logo', array(
		'label'       => __('Footer Logo Text', 'hrpasty'),
		'description' => __('footer logo text is here', 'hrpasty'),
		'section'     => 'hr_footer_section',
		'setting'     => 'hr_footer_logo',
	));

	//Copyright Text
	$wp_customize->add_setting('hr_footer_copyright', array(
		'default'     => '© Copyright 2022 | All Rights Reserved. By <a href="http://habibcoder.com" target="_blank">HabibCoder</a>',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_footer_copyright', array(
		'label'       => __('Copyright Text', 'hrpasty'),
		'description' => __('Copyright Text Here', 'hrpasty'),
		'section'     => 'hr_footer_section',
		'setting'     => 'hr_footer_copyright',
		'type'        => 'textarea',
	));

	//Scroll Top Hide/Show
	$wp_customize->add_setting('hr_scrolltop_hideshow', array(
		'default'     => 'show',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control('hr_scrolltop_hideshow', array(
		'label'       => __('Scroll Top Hide/Show', 'hrpasty'),
		'description' => __('scroll top hide or show', 'hrpasty'),
		'section'     => 'hr_footer_section',
		'setting'     => 'hr_scrolltop_hideshow',
		'type'        => 'radio',
		'choices'     => array(
			'show'    => 'Show',
			'hide'    => 'Hide',
		)
	));



	/* ==========================
		Login Dashboard Option 
	========================== */
	$wp_customize->add_section('hr_wplogin_option', array(
		'title'       => __('Login Option', 'hrpasty'),
		'description' => __('Login Dashboard Option', 'hrpasty'),
		'priority'    => 18,
	));

	// Login Primary Color
	$wp_customize->add_setting('hr_login_primary_color', array(
		'default'     => '#CDAD68',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hr_login_primary_color', array(
		'label'       => __('Login Primary Color', 'hrpasty'),
		'description' => __('login dashboard primay color', 'hrpasty'),
		'section'     => 'hr_wplogin_option',
		'setting'     => 'hr_login_primary_color',
	)));

	// Login Secondary Color
	$wp_customize->add_setting('hr_login_secondary_color', array(
		'default'     => '#d4a94b',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hr_login_secondary_color', array(
		'label'       => __('Login Secondary Color', 'hrpasty'),
		'description' => __('login dashboard secondary color', 'hrpasty'),
		'section'     => 'hr_wplogin_option',
		'setting'     => 'hr_login_secondary_color',
	)));
	
	// Login Logo
	$wp_customize->add_setting('hr_login_logo', array(
		'default'     => get_template_directory_uri().'/img/habibcoder.jpg',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hr_login_logo', array(
		'label'       => __('Login Logo Image', 'hrpasty'),
		'description' => __('login dashboard logo image', 'hrpasty'),
		'section'     => 'hr_wplogin_option',
		'setting'     => 'hr_login_logo',
	)));

	// Login BG Image
	$wp_customize->add_setting('hr_login_bgimg', array(
		'default'     => get_template_directory_uri().'/img/p-slider1.jpg',
		'capability'  => 'edit_theme_options',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hr_login_bgimg', array(
		'label'       => __('Login Background Image', 'hrpasty'),
		'description' => __('login dashboard Background image', 'hrpasty'),
		'section'     => 'hr_wplogin_option',
		'setting'     => 'hr_login_bgimg',
	)));



}
