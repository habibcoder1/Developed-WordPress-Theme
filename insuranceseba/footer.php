<?php 
/**
 * @package Insurance Seba
 * 
 * Insurance Seba Footer
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}

?>


    <!-- =========================
        Footer Area
    ========================== -->
    <footer class="footer-area mt-5">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 gap-1">
            <div class="footer-one bg-[#EEEEEE] px-3 pt-2 pb-5">
                <div class="footer-title">
                    <h4 class="capitalize text-lg mb-1 font-normal"><?php echo esc_html(get_theme_mod('iseba_footer1title')); ?></h4>
                </div>
                <div class="footer-description">
                    <p><?php echo esc_html(get_theme_mod('iseba_footer1content')); ?></p>
                </div>
            </div>
            <div class="footer-two bg-[#EEEEEE] px-3 pt-2 pb-5">
                <div class="footer-title">
                    <h4 class="capitalize text-lg mb-1 font-normal"><?php echo esc_html(get_theme_mod('iseba_footer2title')); ?></h4>
                </div>
                <div class="footer-description">
                    <p><?php echo esc_html(get_theme_mod('iseba_footer2content')); ?></p>
                </div>
            </div>
            <div class="footer-three bg-[#EEEEEE] px-3 pt-2 pb-5">
                <div class="footer-title">
                    <h4 class="capitalize text-lg mb-1 font-normal"><?php echo esc_html(get_theme_mod('iseba_footer3title')); ?></h4>
                </div>
                <div class="footer-address">
                    <p class="mb-1"><?php echo esc_html(get_theme_mod('iseba_footer3address')); ?></p>
                    <p class="mb-1"><i class="fa-solid fa-phone mr-1"></i> <?php echo esc_html(get_theme_mod('iseba_footer3phone')); ?></p>
                    <p class="mb-1"><i class="fa-regular fa-envelope mr-1"></i> <?php echo esc_html(get_theme_mod('iseba_footer3email')); ?></p>
                    <ul class="footer-social-link">
                        <?php if(get_theme_mod('iseba_footer3fb')) : ?>
                        <li class="mr-1"><a href="http://facebook.com/<?php echo get_theme_mod('iseba_footer3fb'); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('iseba_footer3twitter')) : ?>
                        <li class="mr-1"><a href="http://twitter.com/<?php echo get_theme_mod('iseba_footer3twitter'); ?>" target="_blank"><i class="fa-brands fa-twitter text-sm px-1"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('iseba_footer3linkedin')) : ?>
                        <li><a href="http://linkedin.com/in/<?php echo get_theme_mod('iseba_footer3linkedin'); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div style="background-color: <?php echo get_theme_mod('iseba_footerbg'); ?>;" class="container mx-auto">
            <div class="copyright-section">
                <p class="text-white text-center p-1"><?php echo get_theme_mod('iseba_copryrighttext'); ?></p>
            </div>
        </div>
    </footer>

    <!-- all scripts -->
    <script>
        // preloader //
        let loader = document.querySelector('.preloader');
        window.addEventListener('load', function(){
            loader.style.display = 'none';
        });
    </script>

    <?php wp_footer(); ?>
</body>
</html>