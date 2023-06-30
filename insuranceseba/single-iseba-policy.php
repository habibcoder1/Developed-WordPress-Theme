<?php 
/**
 * @package Insurance Seba
 * 
 * Template for displaying Policy Single Blog Page
 * */

if (!defined('ABSPATH')) {
	exit('you are a foolish');
} 

get_header(); ?>

<!-- =========================
    Body Section
========================== -->
<section class="body-section single-policy-page single-page pt-2">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6 lg:gap-3">
        <!-- main conent -->
        <div class="body-main_content col-span-3 lg:col-span-4 my-4 mx-4">
            <!-- content will come from template_parts/single_policy -->
            <?php get_template_part('template_parts/single_policy'); ?>
            
            <!-- Comments Box -->
            <div class="comments-area">
                <?php if(comments_open() || get_comments_number() ) :
                    comments_template();
                endif; ?>
            </div>	

            <!-- Previou and Next Text -->
            <div class="previous_next-post text-center mt-5">
                <div class="previous-post inline-block mr-2 font-semibold">
                    <?php previous_post_link('%link', '< Previous Post'); ?>
                </div>
                <div class="next-post inline-block ml-2 font-semibold">
                    <?php next_post_link('%link', 'Next Post >'); ?>
                </div>
            </div>
        </div>
        <!-- right sidebar -->
        <?php get_sidebar('right_policy'); ?>
    </div>
</section>

<?php get_footer(); ?>