<?php 
/**
 * @package Insurance Seba
 * 
 * Insurance Seba Header
 * */

if (!defined('ABSPATH')) {
	exit('you are a foolish');
} ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <!-- Meta Tags -->
    <meta charset="<?php echo bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="<?php echo get_theme_mod('iseba_favicon'); ?>" type="image/x-icon"> 

    <!-- [if It ie 9]> <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif] -->

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- preloader -->
    <?php if(get_theme_mod('iseba_preloader') == 'yes') : ?>
    <div class="preloader" style="background-image: url('<?php echo esc_url(get_template_directory_uri()).'/assets/img/preloader.gif'; ?>');"></div>
    <?php endif; ?>
    <!-- ==========================
        Heder Area Start
    ============================-->
    <div class="header-area">
        <div class="container mx-auto">
            <!-- top header -->
            <div style="background-color: <?php echo esc_attr(get_theme_mod('iseba_topheader_bgcolor')); ?>;" class="top-header text-white flex items-center justify-between px-2 py-1">
                <div class="header-notice">
                    <p class="text-white capitalize"><?php echo esc_html(get_theme_mod('iseba_theader_content')); ?></p>
                </div>
                <div class="header-social">
                    <ul class="social-icons">
                        <?php if(get_theme_mod('iseba_facebook')) : ?>
                        <li><a href="http://facebook.com/<?php echo get_theme_mod('iseba_facebook'); ?>" target="_blank" title="Facebook"><i class="fa-brands fa-facebook-f px-1"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('iseba_twitter')) : ?>
                        <li><a href="http://twitter.com/<?php echo get_theme_mod('iseba_twitter'); ?>" target="_blank" title="Twitter"><i class="fa-brands fa-twitter text-sm px-1"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('iseba_linkedin')) : ?>
                        <li><a href="http://linkedin.com/in/<?php echo get_theme_mod('iseba_linkedin'); ?>" target="_blank" title="LinkedIn"><i class="fa-brands fa-linkedin-in text-sm px-1"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('iseba_email')) : ?>
                        <li><a href="mailto:<?php echo get_theme_mod('iseba_email'); ?>" target="_blank" title="Email"><i class="fa-regular fa-envelope text-sm px-1"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('iseba_phone')) : ?>
                        <li><a href="#" target="_blank" title="Phone"><i class="fa-solid fa-phone text-[13px] px-1"></i><?php echo esc_html(get_theme_mod('iseba_phone')); ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <!-- middle header -->
            <div class="header-middle flex items-center justify-between px-2 py-2">
                <div class="main-logo">
                    <a href="<?php echo esc_url(site_url()); ?>"><img class="w-52" src="<?php echo esc_url(get_theme_mod('iseba_logo')); ?>" alt="logo"></a>
                </div>
                <div class="main-search hidden sm:block">
                    <?php get_search_form(); ?>
                </div>
                <div class="site-menu-icon">
                    <i class="fa-solid fa-bars cursor-pointer p-3 rounded text-lg" title="Menu Open"></i>
                </div>
            </div>
            <!-- site menu -->
            <div class="site-menu bg-[#DD3627] w-52 sm:w-64 ml-auto h-full fixed right-0 top-0 p-1 sm:p-4 z-50 hidden">
                <div class="close-button mb-5">
                    <i class="fa-sharp fa-regular fa-circle-xmark text-white text-2xl cursor-pointer mt-1 ml-1 sm:mt-0 sm:ml-0" title="Close"></i>
                </div>
                <div class="site-menu-search sm:hidden px-[6px] py-2">
                    <?php get_search_form(); ?>
                </div>
                <nav>
                    <?php 
                        wp_nav_menu(array(
                            'theme_location'  => 'isebasmenu',
                            'container'       => '',
                            'menu_class'      => 'menu',
                            'menu_id'         => '',
                        ));
                     ?>
                </nav>
                <div class="site-menu-author absolute bottom-1 left-1/2 -translate-x-1/2 w-full">
                    <p class="text-white text-center"><?php _e('Created by', 'insurance-seba'); ?> <a href="http://habibcoder.com" target="_blank" class="underline hover:opacity-90 transition-all"><?php _e('HabibCoder', 'insurance-seba'); ?></a></p>
                </div>
            </div>
            <!-- main menu -->
            <div class="main-menu hidden sm:block">
                <nav>
                    <?php 
                        wp_nav_menu(array(
                            'theme_location'  => 'isebapmenu',
                            'container'       => '',
                            'menu_class'      => 'menu flex justify-center items-center',
                            'menu_id'         => '',
                            'link_before'     => '<img class="w-6 invert mr-[2px]" src="'. esc_url(get_template_directory_uri()).'/assets/img/hexagon.png" alt="hexagon image">',
                        ));
                     ?>         
                </nav>
            </div>
        </div>
    </div>
