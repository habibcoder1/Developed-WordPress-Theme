<?php  
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * This template for customizing register
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 


/* ======================
    Theme Customize
======================= */
add_action('customize_register', 'witl_theme_customizer');
function witl_theme_customizer($wp_customize){

    /* =========================
        Top Header Panel
    ========================= */
    $wp_customize->add_panel('witl_topheader_panel', [
        'title'       => __('Top Header', 'witl'),
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
    ]);

    /* =========================
        Top Header Section
    ========================= */
    $wp_customize->add_section('witl_top_header', [
        'title'       => __('Top Header Details', 'witl'),
        'description' => __('Top Heaer BG Color & Text here', 'witl'),
        'panel'       => 'witl_topheader_panel',
    ]);

    // top header hide show
    $wp_customize->add_setting('top_header_hideshow', [
        'default'           => 'yes',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_header_onoff',
    ]);
    $wp_customize->add_control('top_header_hideshow', [
        'label'       => __('Top Header Hide/Show', 'witl'),
        'description' => __('default: yes', 'witl'),
        'section'     => 'witl_top_header',
        'setting'     => 'top_header_hideshow',
        'type'        => 'select',
        'choices'     => [
            'yes'     => 'Yes',
            'not'     => 'Not',
        ]
    ]);
    function top_header_onoff($witlth_input, $witlth_setting){
        $witlth_input  = sanitize_key($witlth_input);
        $valid_options = $witlth_setting->manager->get_control($witlth_setting->id)->choices;

        if (!array_key_exists($witlth_input, $valid_options)){
            $witlth_input = $witlth_setting->default;
        }

        return $witlth_input;
    };

    // top header bg color
    $wp_customize->add_setting('witl_topheader_bgcolor', [
        'default'           => '#19377c',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_top_header_bgcolor',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'witl_topheader_bgcolor', [
        'label'       => __('Top Header Background Color', 'witl'),
        'section'     => 'witl_top_header',
        'setting'     => 'witl_topheader_bgcolor',
    ]));
    function sanitize_top_header_bgcolor($color){
        return sanitize_hex_color($color);
    };
   
    // email
    $wp_customize->add_setting('witl_topheader_email', [
        'default'           => 'info@webinfotechltd.com',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_top_header_email',
    ]);
    $wp_customize->add_control( 'witl_topheader_email', [
        'label'       => __('Top Header Email', 'witl'),
        'section'     => 'witl_top_header',
        'setting'     => 'witl_topheader_email',
    ]);
    function sanitize_top_header_email($input){
        return sanitize_text_field($input);
    };
   
    // phone
    $wp_customize->add_setting('witl_topheader_phone', [
        'default'           => '+880 1404 440010​',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_top_header_phone',
    ]);
    $wp_customize->add_control( 'witl_topheader_phone', [
        'label'       => __('Top Header Contact Number', 'witl'),
        'description' => __('with county code', 'witl'),
        'section'     => 'witl_top_header',
        'setting'     => 'witl_topheader_phone',
    ]);
    function sanitize_top_header_phone($input){
        return sanitize_text_field($input);
    };

    /* ===========================
       Top Header Social Section
    =========================== */
    $wp_customize->add_section('witl_topheader_socail', [
        'title'       => __('Header Social', 'witl'),
        'description' => __('Top Heaer Social Icons here', 'witl'),
        'panel'       => 'witl_topheader_panel',
    ]);

    // facebook
    $wp_customize->add_setting('witl_th_facebook', [
        'default'           => 'webinfotechltd',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_header_fb',
    ]);
    $wp_customize->add_control('witl_th_facebook', [
        'label'       => __('Facebook Username', 'witl'),
        'section'     => 'witl_topheader_socail',
        'setting'     => 'witl_th_facebook',
    ]);
    function sanitize_header_fb($input){
        return sanitize_text_field($input);
    };
 
    // twitter
    $wp_customize->add_setting('witl_th_twitter', [
        'default'           => 'webinfotechltd',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_header_twitter',
    ]);
    $wp_customize->add_control('witl_th_twitter', [
        'label'       => __('Twitter Username', 'witl'),
        'section'     => 'witl_topheader_socail',
        'setting'     => 'witl_th_twitter',
    ]);
    function sanitize_header_twitter($input){
        return sanitize_text_field($input);
    };
 
    // linkedin
    $wp_customize->add_setting('witl_th_linkedin', [
        'default'           => 'webinfotechltd',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_header_linkedin',
    ]);
    $wp_customize->add_control('witl_th_linkedin', [
        'label'       => __('LinkedIn Username', 'witl'),
        'section'     => 'witl_topheader_socail',
        'setting'     => 'witl_th_linkedin',
    ]);
    function sanitize_header_linkedin($input){
        return sanitize_text_field($input);
    };
 
    // instagram
    $wp_customize->add_setting('witl_th_instagram', [
        'default'           => 'webinfotechltd',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_header_instagram',
    ]);
    $wp_customize->add_control('witl_th_instagram', [
        'label'       => __('Instagram Username', 'witl'),
        'section'     => 'witl_topheader_socail',
        'setting'     => 'witl_th_instagram',
    ]);
    function sanitize_header_instagram($input){
        return sanitize_text_field($input);
    };
 
    // whatsapp
    $wp_customize->add_setting('witl_th_whatsapp', [
        'default'           => '01404440010​',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_header_whatsapp',
    ]);
    $wp_customize->add_control('witl_th_whatsapp', [
        'label'       => __('WhatsApp Number', 'witl'),
        'section'     => 'witl_topheader_socail',
        'setting'     => 'witl_th_whatsapp',
    ]);
    function sanitize_header_whatsapp($input){
        return sanitize_text_field($input);
    };
    

    /* =========================
       General Option Section
    ========================= */
    $wp_customize->add_section('witl_general_option', [
        'title'       => __('General Option', 'witl'),
        'description' => __('General option description here', 'witl'),
        'priority'    => 12,
    ]);

    // main logo
    $wp_customize->add_setting('witl_main_logo', [
        'default'           => get_template_directory_uri().'/assets/img/main-logo.png',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_main_logo',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'witl_main_logo', [
        'label'       => __('Main Logo', 'witl'),
        'section'     => 'witl_general_option',
        'setting'     => 'witl_main_logo',
    ]));
    function sanitize_main_logo($logo_url){
        return esc_url_raw($logo_url);
    };


    // preloader
    $wp_customize->add_setting('witl_preloader', [
        'default'           => 'yes',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_preloader_onoff',
    ]);
    $wp_customize->add_control('witl_preloader', [
        'label'       => __('Preloader Yes/Not', 'witl'),
        'section'     => 'witl_general_option',
        'setting'     => 'witl_preloader',
        'type'        => 'select',
        'choices'     => [
            'yes'     => 'Yes',
            'not'     => 'Not'
        ]
    ]);
    function sanitize_preloader_onoff($witlpl_input, $witlpl_setting){
        $witlpl_input = sanitize_key($witlpl_input);
        $valid_options = $witlpl_setting->manager->get_control($witlpl_setting->id)->choices;

        if (!array_key_exists($witlpl_input, $valid_options)){
            $witlpl_input = $witlpl_setting->default;
        }

        return $witlpl_input;
    };

    // header button text
    $wp_customize->add_setting('witl_header_btntext', [
        'default'           => 'get a quote',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_header_btntext',
    ]);
    $wp_customize->add_control('witl_header_btntext', [
        'label'       => __('Header Button Text', 'witl'),
        'section'     => 'witl_general_option',
        'setting'     => 'witl_header_btntext',
    ]);
    function sanitize_header_btntext($input){
        return sanitize_text_field($input);
    };

    // header button link
    $wp_customize->add_setting('witl_header_btnlink', [
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_header_btnlink',
    ]);
    $wp_customize->add_control('witl_header_btnlink', [
        'label'       => __('Header Button Link', 'witl'),
        'description' => __('copy and paste the full link here', 'witl'),
        'section'     => 'witl_general_option',
        'setting'     => 'witl_header_btnlink',
    ]);
    function sanitize_header_btnlink($input){
        return sanitize_text_field($input);
    };


    /* =========================
       Footer Option Panel
    ========================= */
    $wp_customize->add_panel('witl_footer_panel', [
        'title'       => __('Footer Option', 'witl'),
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
    ]);

    /* =========================
       Footer About Us Section
    ========================= */
    $wp_customize->add_section('witl_footer_aboutus', [
        'title'       => __('Footer About Us', 'witl'),
        'description' => __('Footer about us column', 'witl'),
        'panel'       => 'witl_footer_panel',
    ]);

    // footer bg color
    $wp_customize->add_setting('witl_footer_bgcolor', [
        'default'           => '#19377c',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_bgcolor',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'witl_footer_bgcolor', [
        'label'       => __('Footer Background Section Color', 'witl'),
        'section'     => 'witl_footer_aboutus',
        'setting'     => 'witl_footer_bgcolor',
    ]));
    function sanitize_footer_bgcolor($color){
        return sanitize_hex_color($color);
    };

    // footer about us title
    $wp_customize->add_setting('footer_aboutus_title', [
        'default'           => 'about us',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_aboutus_title'
    ]);
    $wp_customize->add_control('footer_aboutus_title', [
        'label'       => __('Copryright Text', 'witl'),
        'section'     => 'witl_footer_aboutus',
        'setting'     => 'footer_aboutus_title',
    ]);
    function sanitize_footer_aboutus_title($input){
        return sanitize_text_field($input);
    };

    // footer logo
    $wp_customize->add_setting('witl_footerone_logo', [
        'default'           => get_template_directory_uri().'/assets/img/main-logo.png',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_logo'
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'witl_footerone_logo', [
        'label'       => __('Footer Logo', 'witl'),
        'section'     => 'witl_footer_aboutus',
        'setting'     => 'witl_footerone_logo',
    ]));
    function sanitize_footer_logo($logo){
        return esc_url_raw($logo);
    };

    // footer about us content
    $wp_customize->add_setting('witl_footer_aboutus_content', [
        'default'           => 'OurStudio is a digital agency UI / UX Design and Website Development located in Ohio, United States of America',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_aboutus_content'
    ]);
    $wp_customize->add_control('witl_footer_aboutus_content', [
        'label'       => __('About Us Content', 'witl'),
        'section'     => 'witl_footer_aboutus',
        'setting'     => 'witl_footer_aboutus_content',
        'type'        => 'textarea',
    ]);
    function sanitize_footer_aboutus_content($textarea){
        return sanitize_textarea_field($textarea);
    };

    /* =========================
       Footer Address
    ========================= */
    $wp_customize->add_section('witl_footer_address', [
        'title'       => __('Footer Address', 'witl'),
        'description' => __('Footer sddress column', 'witl'),
        'panel'       => 'witl_footer_panel',
    ]);

    // footer address title
    $wp_customize->add_setting('footer_address_title', [
        'default'           => 'get in touch',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_address_title'
    ]);
    $wp_customize->add_control('footer_address_title', [
        'label'       => __('Address Title', 'witl'),
        'section'     => 'witl_footer_address',
        'setting'     => 'footer_address_title',
    ]);
    function sanitize_footer_address_title($input){
        return sanitize_text_field($input);
    };

    // footer address details
    $wp_customize->add_setting('witl_footer_adress_details', [
        'default'           => '8819 Ohio St. South Gate, CA 90280',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_address_content'
    ]);
    $wp_customize->add_control('witl_footer_adress_details', [
        'label'       => __('Comapny Address', 'witl'),
        'section'     => 'witl_footer_address',
        'setting'     => 'witl_footer_adress_details',
        'type'        => 'textarea',
    ]);
    function sanitize_footer_address_content($textarea){
        return sanitize_textarea_field($textarea);
    };

    // footer address email
    $wp_customize->add_setting('witl_footer_adress_email', [
        'default'           => 'info@webinfotechltd.com',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_address_email'
    ]);
    $wp_customize->add_control('witl_footer_adress_email', [
        'label'       => __('Comapny Address', 'witl'),
        'section'     => 'witl_footer_address',
        'setting'     => 'witl_footer_adress_email',
    ]);
    function sanitize_footer_address_email($input){
        return sanitize_text_field($input);
    };

    // footer address phone
    $wp_customize->add_setting('witl_footer_adress_phone', [
        'default'           => '+880 1404 440010​',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_address_phone'
    ]);
    $wp_customize->add_control('witl_footer_adress_phone', [
        'label'       => __('Comapny Address', 'witl'),
        'section'     => 'witl_footer_address',
        'setting'     => 'witl_footer_adress_phone',
    ]);
    function sanitize_footer_address_phone($input){
        return sanitize_text_field($input);
    };

    /* =========================
       Footer Services
    ========================= */
    $wp_customize->add_section('witl_footer_services', [
        'title'       => __('Footer Services', 'witl'),
        'description' => __('Footer Services column', 'witl'),
        'panel'       => 'witl_footer_panel',
    ]);

    // footer services title
    $wp_customize->add_setting('footer_services_title', [ 
        'default'           => 'services',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_services_title'
    ]);
    $wp_customize->add_control('footer_services_title', [
        'label'       => __('Services Title', 'witl'),
        'section'     => 'witl_footer_services',
        'setting'     => 'footer_services_title',
    ]);
    function sanitize_footer_services_title($input){
        return sanitize_text_field($input);
    };

    /* =============================
       Footer Company/Quick Links
    ============================= */
    $wp_customize->add_section('witl_footer_quicklinks', [
        'title'       => __('Footer Quick Links', 'witl'),
        'description' => __('Footer Quick Links column', 'witl'),
        'panel'       => 'witl_footer_panel',
    ]);

    // footer services title
    $wp_customize->add_setting('footer_quicklinks_title', [ 
        'default'           => 'Company',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_quicklinks_title'
    ]);
    $wp_customize->add_control('footer_quicklinks_title', [
        'label'       => __('Quick Links Title', 'witl'),
        'section'     => 'witl_footer_quicklinks',
        'setting'     => 'footer_quicklinks_title',
    ]);
    function sanitize_footer_quicklinks_title($input){
        return sanitize_text_field($input);
    };

    /* =========================
       Footer Social Links
    ========================= */
    $wp_customize->add_section('witl_footer_social_links', [
        'title'       => __('Footer Social Links', 'witl'),
        'description' => __('Footer Social Links column', 'witl'),
        'panel'       => 'witl_footer_panel',
    ]);

    // footer social links title
    $wp_customize->add_setting('footer_sociallink_title', [
        'default'           => 'social links',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_sociallinks_title'
    ]);
    $wp_customize->add_control('footer_sociallink_title', [
        'label'       => __('Social Links Title', 'witl'),
        'section'     => 'witl_footer_social_links',
        'setting'     => 'footer_sociallink_title',
    ]);
    function sanitize_footer_sociallinks_title($input){
        return sanitize_text_field($input);
    };

    // footer social links descrition
    $wp_customize->add_setting('footer_sociallink_description', [
        'default'           => 'Don\'t forget to follow us on social media, don\'t miss the latest news from us.',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_sociallinks_description',
    ]);
    $wp_customize->add_control('footer_sociallink_description', [
        'label'       => __('Social Links Title', 'witl'),
        'section'     => 'witl_footer_social_links',
        'setting'     => 'footer_sociallink_description',
        'type'        => 'textarea',
    ]);
    function sanitize_footer_sociallinks_description($textarea){
        return sanitize_textarea_field($textarea);
    };

    // facebook
    $wp_customize->add_setting('witl_footer_facebook', [
        'default'           => 'webinfotechltd',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_fb',
    ]);
    $wp_customize->add_control('witl_footer_facebook', [
        'label'       => __('Facebook Username', 'witl'),
        'section'     => 'witl_footer_social_links',
        'setting'     => 'witl_footer_facebook',
    ]);
    function sanitize_footer_fb($input){
        return sanitize_text_field($input);
    };
 
    // twitter
    $wp_customize->add_setting('witl_footer_twitter', [
        'default'           => 'webinfotechltd',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_twitter',
    ]);
    $wp_customize->add_control('witl_footer_twitter', [
        'label'       => __('Twitter Username', 'witl'),
        'section'     => 'witl_footer_social_links',
        'setting'     => 'witl_footer_twitter',
    ]);
    function sanitize_footer_twitter($input){
        return sanitize_text_field($input);
    };
 
    // linkedin
    $wp_customize->add_setting('witl_footer_linkedin', [
        'default'           => 'webinfotechltd',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_linkedin',
    ]);
    $wp_customize->add_control('witl_footer_linkedin', [
        'label'       => __('LinkedIn Username', 'witl'),
        'section'     => 'witl_footer_social_links',
        'setting'     => 'witl_footer_linkedin',
    ]);
    function sanitize_footer_linkedin($input){
        return sanitize_text_field($input);
    };
 
    // instagram
    $wp_customize->add_setting('witl_footer_instagram', [
        'default'           => 'webinfotechltd',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_instagram',
    ]);
    $wp_customize->add_control('witl_footer_instagram', [
        'label'       => __('Instagram Username', 'witl'),
        'section'     => 'witl_footer_social_links',
        'setting'     => 'witl_footer_instagram',
    ]);
    function sanitize_footer_instagram($input){
        return sanitize_text_field($input);
    };
 
    // whatsapp
    $wp_customize->add_setting('witl_footer_whatsapp', [
        'default'           => '01404440010​',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_whatsapp',
    ]);
    $wp_customize->add_control('witl_footer_whatsapp', [
        'label'       => __('WhatsApp Number', 'witl'),
        'section'     => 'witl_footer_social_links',
        'setting'     => 'witl_footer_whatsapp',
    ]);
    function sanitize_footer_whatsapp($input){
        return sanitize_text_field($input);
    };

   
    /* =========================
       Footer Copy Right Section
    ========================= */
    $wp_customize->add_section('witl_footer_copyright', [
        'title'       => __('Footer Copyright', 'witl'),
        'description' => __('Footer copyright section', 'witl'),
        'panel'       => 'witl_footer_panel',
    ]);


    // copyright bg color
    $wp_customize->add_setting('witl_footer_copyright_bgcolor', [
        'default'           => '#19377c',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_copyright_bgcolor',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'witl_footer_copyright_bgcolor', [
        'label'       => __('Copyright Background Section Color', 'witl'),
        'section'     => 'witl_footer_copyright',
        'setting'     => 'witl_footer_copyright_bgcolor',
    ]));
    function sanitize_footer_copyright_bgcolor($color){
        return sanitize_hex_color($color);
    };

    // Copyright text
    $wp_customize->add_setting('witl_footer_copyrighttext', [
        'default'           => '&copy; Copyright Web Info Tech Ltd 2023 | All Rights Reserved.',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_footer_copyright_text',
    ]);
    $wp_customize->add_control('witl_footer_copyrighttext', [
        'label'       => __('Copryright Text', 'witl'),
        'section'     => 'witl_footer_copyright',
        'setting'     => 'witl_footer_copyrighttext',
        'type'        => 'textarea',
    ]);
    function sanitize_footer_copyright_text($textarea){
        return sanitize_textarea_field($textarea);
    };


    /* =========================
       Footer Copy Right Section
    ========================= */
    $wp_customize->add_section('witl_footer_scrolltop', [
        'title'       => __('Scroll To Top', 'witl'),
        'description' => __('Scroll To Top', 'witl'),
        'panel'       => 'witl_footer_panel',
    ]);

    // scroll to top
    $wp_customize->add_setting('witl_scrollto_top', [
        'default'           => 'yes',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_scrolltotop_onoff',
    ]);
    $wp_customize->add_control('witl_scrollto_top', [
        'label'       => __('Do you want to Scroll To Top Icon', 'witl'),
        'section'     => 'witl_footer_scrolltop',
        'setting'     => 'witl_scrollto_top',
        'type'        => 'select',
        'choices'     => [
            'yes'     => 'Yes',
            'not'     => 'Not'
        ]
    ]);
    function sanitize_scrolltotop_onoff($witlstop_input, $witlstop_setting){
        $witlstop_input = sanitize_key($witlstop_input);
        $valid_options = $witlstop_setting->manager->get_control($witlstop_setting->id)->choices;

        if (!array_key_exists($witlstop_input, $valid_options)){
            $witlstop_input = $witlstop_setting->default;
        }

        return $witlstop_input;
    };

    

}
