<?php  
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * This template for displaying footer section
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; ?>

    
        <!-- ==========================
            Footer Area Start
        =========================== -->
        <?php $footerbg = get_theme_mod('witl_footer_bgcolor') ? get_theme_mod('witl_footer_bgcolor') : '#19377c' ?>
        <footer class="footer-area" style="background-color: <?php echo esc_attr($footerbg); ?>">
            <div class="container">
                <!-- main footer -->
                <div class="main-footer">
                    <div class="container">
                        <div class="row">
                            <!-- footer one -->
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer-one">
                                    <!-- footer one title -->
                                    <div class="footer-title">
                                        <h3 class="text-capitalize"><?php echo get_theme_mod('footer_aboutus_title'); ?></h3>
                                    </div>
                                    <!-- footer logo -->
                                    <div class="footer-content">
                                        <div class="footer-logo">
                                            <a href="<?php echo esc_url(home_url()); ?>">
                                            <img src="<?php echo esc_url(get_theme_mod('witl_footerone_logo')); ?>" alt="footer-logo"></a>
                                        </div>
                                    </div>
                                    <!-- footer short des -->
                                    <div class="footer_short-des">
                                        <p><?php echo get_theme_mod('witl_footer_aboutus_content'); ?></p>
                                    </div>
                                    <!-- footer social & content -->
                                    <ul class="footer-social">
                                        <?php 
                                        $footer_linkedin = get_theme_mod('witl_footer_linkedin') ? get_theme_mod('witl_footer_linkedin') : 'web-info-tech-limited'; 
                                        if($footer_linkedin) : ?>
                                        <li><a href="<?php echo esc_url('https://linkedin.com/company/'.$footer_linkedin.''); ?>" title="LinkedIn" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                                        <?php endif; 
                                        $footer_fb = get_theme_mod('witl_footer_facebook') ? get_theme_mod('witl_footer_facebook') : 'webinfotechltd'; 
                                        if($footer_fb) : ?>
                                        <li><a href="<?php echo esc_url('https://facebook.com/'.$footer_fb.''); ?>" title="Facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                        <?php endif; 
                                        $footer_insta = get_theme_mod('witl_footer_instagram'); 
                                        if($footer_insta) : ?>
                                        <li><a href="<?php echo esc_url('https://instagram.com/'.$footer_insta.''); ?>" title="Instagram" target="_blank"><i class="fa-brands fa-square-instagram"></i></a></li>
                                        <?php endif; 
                                        $footer_twitter = get_theme_mod('witl_footer_twitter') ? get_theme_mod('witl_footer_twitter') : 'WebInfoTechLtd'; 
                                        if($footer_twitter) : ?>
                                        <li><a href="<?php echo esc_url('https://twitter.com/'.$footer_twitter.''); ?>" title="Twitter" target="_blank"><i class="fa-brands fa-square-x-twitter"></i></a></li>
                                        <?php endif; 
                                        $phone_number    = get_theme_mod('witl_footer_whatsapp');
                                        $message         = 'Hello, you are most welcome to Web Info Tech Ltd . How we can help you?';
                                        $encoded_message = urlencode($message);
                                        $whatsapp_url    = "https://wa.me/$phone_number/?text=$encoded_message";
                                        if($phone_number) : ?>
                                        <li><a href="<?php echo $whatsapp_url; ?>" title="WhatsApp" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- footer three -->
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer-three">
                                    <!-- footer two title -->
                                    <div class="footer-title">
                                        <h3 class="text-capitalize"><?php echo get_theme_mod('footer_services_title'); ?></h3>
                                    </div>
                                    <!-- footer menu -->
                                    <?php  
                                    wp_nav_menu([
                                        'theme_location'  => 'witlfooteronemenu',
                                        'container'       => '',
                                        'menu_class'      => 'footer-menu',
                                        'menu_id'         => '',
                                    ]);  ?>
                                </div>
                            </div>
                            <!-- footer four -->
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer-four">
                                    <!-- footer two title -->
                                    <div class="footer-title">
                                        <h3 class="text-capitalize"><?php echo get_theme_mod('footer_quicklinks_title'); ?></h3>
                                    </div>
                                    <!-- footer menu -->
                                    <?php  
                                    wp_nav_menu([
                                        'theme_location'  => 'witlfootertwomenu',
                                        'container'       => '',
                                        'menu_class'      => 'footer-menu',
                                        'menu_id'         => '',
                                    ]);  ?>
                                </div>
                            </div>
                            <!-- footer two -->
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer-two">
                                    <!-- footer two title -->
                                    <div class="footer-title">
                                        <h3 class="text-capitalize"><?php echo get_theme_mod('footer_address_title'); ?></h3>
                                    </div>
                                    <!-- footer contact -->
                                    <div class="footer-contact">
                                        <div class="address">
                                            <div class="row">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col-10">
                                                    <p><?php echo get_theme_mod('witl_footer_adress_details'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="email">
                                            <div class="row">
                                                <div class="col-2">
                                                    <i class="fa-regular fa-envelope"></i>
                                                </div>
                                                <div class="col-10">
                                                    <p><a href="mailto:<?php echo get_theme_mod('witl_footer_adress_email'); ?>"><?php echo get_theme_mod('witl_footer_adress_email'); ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact-number">
                                            <div class="row">
                                                <div class="col-2">
                                                    <i class="fa-solid fa-phone"></i>
                                                </div>
                                                <div class="col-10">
                                                    <p> <a href="tel:<?php echo get_theme_mod('witl_footer_adress_phone'); ?>"><?php echo get_theme_mod('witl_footer_adress_phone'); ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- copyright area -->
            <div class="copyright-area" style="background-color: <?php echo get_theme_mod('witl_footer_copyright_bgcolor'); ?>">
                <div class="container d-flex justify-content-between text-center">
                    <p class="text-capitalize"><?php echo get_theme_mod('witl_footer_copyrighttext'); ?></p>
                    <!-- terms and condition menu -->
                    <?php  
                        wp_nav_menu([
                            'theme_location'  => 'witlcopyrightmenu',
                            'container'       => '',
                            'menu_class'      => 'copyright_area-menu',
                            'menu_id'         => '',
                        ]); 
                    ?>
                </div>
            </div>
            <?php if(get_theme_mod('witl_scrollto_top') == 'yes') : ?>
            <!-- scroll to top -->
            <div class="witl_scrollto-top">
                <a href="#">
                    <i class="fa-solid fa-turn-up"  data-toggle="tooltip" data-placement="right" title="Scroll Top"></i>
                </a>
            </div>
            <?php endif; ?>
        </footer>
        <!-- ==========================
            Footer Area End
        =========================== -->
    </body>
    </html>

    <?php wp_footer(); ?>
</body>
</html>
