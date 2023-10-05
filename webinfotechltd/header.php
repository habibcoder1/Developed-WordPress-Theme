<?php  
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * This template for displaying header section
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <!-- meta tag -->
    <meta charset="<?php echo bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

    <?php if(get_theme_mod('witl_preloader') == 'yes') : ?>
    <!-- Preloader Start -->
    <div id="witl_preloader"></div>
    <!-- Preloader End -->
    <?php endif; ?>

    <!-- ==========================
        Header Area Start
    =========================== -->
    <header class="header-area">
        <!-- sticky menu -->
        <div class="menu_logo-area witl_sticky-menu d-none">
            <div class="container">
                <div class="row  align-items-center">
                    <!-- main logo -->
                    <div class="col-lg-3 col-md-4 col-5">
                        <div class="main-logo">
                        <a href="<?php echo esc_url(home_url()); ?>">
                                <img src="<?php echo esc_url(get_theme_mod('witl_main_logo')); ?>" alt="witl-logo">
                            </a>
                        </div>
                    </div>
                    <!-- main menu -->
                    <div class="col-lg-6 col-md-4 col-2">
                        <!-- mobile bar -->
                        <div class="mobile-bar-icon d-lg-none">
                            <i title="Open Menu" class="fa-solid fa-bars-staggered"></i>
                        </div>
                        <!-- menu -->
                        <nav class="main-menu d-none d-lg-block">
                            <div class="cross-icon d-lg-none">
                                <i class="fa-solid fa-xmark" title="Close Menu"></i>
                            </div>
                            <?php  
                            wp_nav_menu([
                                'theme_location'  => 'witlprimanymenu',
                                'container'       => '',
                                'menu_class'      => 'header-menu',
                                'menu_id'         => '',
                            ]);  ?>
                        </nav>
                    </div>
                    <!-- header button -->
                    <div class="col-lg-3 col-md-4 col-5">
                        <div class="header-btn text-end">
                            <?php $btntext = get_theme_mod('witl_header_btntext');
                            if(!empty($btntext)) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('witl_header_btnlink')); ?>" class="witlSecondaryBtn"><?php echo $btntext; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(get_theme_mod('top_header_hideshow') == 'yes') : ?>
        <!-- top header -->
        <div class="top-header" style="background-color: <?php echo esc_attr( get_theme_mod('witl_topheader_bgcolor') ); ?>; ">
            <div class="container">
                <div class="row  align-items-center">
                    <!-- left side -->
                    <div class="theader-left col-md-6 col-sm-12">
                        <div class="theader-email">
                            <?php if(!empty(get_theme_mod('witl_topheader_email'))) : ?>
                            <p class="email"> <a href="mailto:<?php echo get_theme_mod('witl_topheader_email'); ?>"><?php echo get_theme_mod('witl_topheader_email'); ?></a></p>
                            <?php endif; ?>
                            <?php if(!empty(get_theme_mod('witl_topheader_phone'))) : ?>
                            <p class="phone"> <span><?php echo get_theme_mod('witl_topheader_phone'); ?>​</span></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- right side/Social links -->
                    <div class="theader-right col-md-6 col-sm-12 text-end">
                        <ul>
                            <?php $th_fb = get_theme_mod('witl_th_facebook') ? get_theme_mod('witl_th_facebook') : 'webinfotechltd'; 
                            if($th_fb) : ?>
                            <li><a href="<?php echo esc_url('https://facebook.com/'.$th_fb.''); ?>" title="Facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                            <?php endif; 
                            $th_twitter = get_theme_mod('witl_th_twitter') ? get_theme_mod('witl_th_twitter') : 'WebInfoTechLtd'; 
                            if($th_twitter) : ?>
                            <li><a href="<?php echo esc_url('https://twitter.com/'.$th_twitter.''); ?>" title="Twitter" target="_blank"><i class="fa-brands fa-square-x-twitter"></i></a></li>
                            <?php endif; 
                            $th_linkedin = get_theme_mod('witl_th_linkedin') ? get_theme_mod('witl_th_linkedin') : 'web-info-tech-limited'; 
                            if($th_linkedin) : ?>
                            <li><a href="<?php echo esc_url('https://linkedin.com/company/'.$th_linkedin.''); ?>" title="LinkedIn" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                            <?php endif; 
                            $th_insta = get_theme_mod('witl_th_instagram'); 
                            if($th_insta) : ?>
                            <li><a href="<?php echo esc_url('https://instagram.com/'.$th_insta.''); ?>" title="Instagram" target="_blank"><i class="fa-brands fa-square-instagram"></i></a></li>
                            <?php endif; 
                            $th_whatsapp     = get_theme_mod('witl_th_whatsapp'); 
                            $message         = 'Hello, you are most welcome to Web Info Tech Ltd . How we can help you?';
                            $encoded_message = urlencode($message);
                            $whatsapp_url    = "https://wa.me/$th_whatsapp/?text=$encoded_message";
                            if($th_whatsapp) : ?>
                            <li><a href="<?php echo $whatsapp_url; ?>" title="WhatsApp" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!-- menu & logo area -->
        <div class="menu_logo-area main_menu-area">
            <div class="container">
                <div class="row align-items-center">
                    <!-- main logo -->
                    <div class="col-lg-3 col-md-4 col-5">
                        <div class="main-logo">
                            <a href="<?php echo esc_url(home_url()); ?>">
                                <?php
                                // image alt text
                                $post_id = get_the_ID();
                                $featured_image_id = get_post_thumbnail_id($post_id);
                                $alt_text          = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
                                $title_text        = get_the_title($featured_image_id);
                                ?>

                                <img src="<?php echo esc_url( get_theme_mod('witl_main_logo')); ?>" alt="<?php echo esc_attr($alt_text); ?>">
                            </a>
                        </div>
                    </div>
                    <!-- main menu -->
                    <div class="col-lg-6 col-md-4 col-2">
                        <!-- mobile bar -->
                        <div class="mobile-bar-icon d-lg-none">
                            <i title="Open Menu" class="fa-solid fa-bars-staggered"></i>
                        </div>
                        <!-- menu -->
                        <nav class="main-menu d-none d-lg-block">
                            <div class="cross-icon d-lg-none">
                                <i class="fa-solid fa-xmark" title="Close Menu"></i>
                            </div>
                            <?php  
                            wp_nav_menu([
                                'theme_location'  => 'witlprimanymenu',
                                'container'       => '',
                                'menu_class'      => 'header-menu',
                                'menu_id'         => '',
                            ]);  ?>
                        </nav>
                    </div>
                    <!-- header button -->
                    <div class="col-lg-3 col-md-4 col-5">
                        <div class="header-btn text-end">
                            <?php $btntext = get_theme_mod('witl_header_btntext');
                            if(!empty($btntext)) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('witl_header_btnlink')); ?>" class="witlSecondaryBtn"><?php echo $btntext; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========================
        Header Area End
    =========================== -->