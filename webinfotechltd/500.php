<?php  
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Template for displaying 500 page
 */

// ABSPATH Defined
 if (!defined('ABSPATH')) {
	exit('not valid');
}

get_header(); ?>

    <!-- =========================
        500/server error page
    ========================== -->
    <section class="server_error-page empty-page">
        <div class="container">
            <p class="text-center"><?php _e('You are stying server error page', 'witl'); ?></p>
            <h3 class="text-capitalize text-center"><?php _e('500 Page', 'witl'); ?></h3>
            <p class="text-center"><?php _e('Please contact to your server provider', 'witl'); ?></p>
        </div>
    </section>

<?php
get_footer();