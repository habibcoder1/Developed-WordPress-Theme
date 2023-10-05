<?php  
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * template for displaying 404 page
 */

// ABSPATH Defined
 if (!defined('ABSPATH')) {
	exit('not valid');
}

get_header(); ?>

    <!-- =========================
        404 page
    ========================== -->
    <section class="empty-page">
        <div class="container">
            <p class="text-center"><?php _e('You are stying an empty page', 'witl'); ?></p>
            <h3 class="text-capitalize text-center"><?php _e('404 Page', 'witl'); ?></h3>
            <p class="text-center"><?php _e('Please return', 'witl') ?> <a href="<?php echo esc_url(home_url()); ?>"><?php _e('Home Page', 'witl') ?></a></p>
        </div>
    </section>

<?php
get_footer();