<?php 
/**
 * @package Insurance Seba
 * 
 * Template for displaying Blog Page
 * */

if (!defined('ABSPATH')) {
	exit('you are a foolish');
} ?>

<?php get_header(); ?>

    <!-- =========================
        Body Section
    ========================== -->
    <section class="body-section blog-page pt-2">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-3">
            <!-- main conent -->
            <div class="body-main_content col-span-3 lg:col-span-4">
                <!-- blog hero section -->
                <div class="blog-hero mt-1">
                    <h2 class="title uppercase bg-[#EEEEEE] pl-2 text-[26px]"><?php _e('latest news', 'insurance-seba'); ?></h2>
                </div>
                <!-- blog details -->
                <div class="blog-details border-l-8 border-[#EEEEEE] p-4">
                    <!-- blog post -->
                    <div class="blog-row grid sm:grid-cols-3 sm:gap-4">
                        <!-- single blog -->
                        <?php get_template_part('template_parts/blog_page'); ?>
                    </div>
                    <!-- more post button -->
                    <div class="more-post_button mt-2">
                        <a href="#" class="isebaButton !border-2"><?php _e('more posts', 'insurance-seba'); ?></a>
                    </div>
                </div>
            </div>
            <!-- right sidebar -->
            <?php get_sidebar('right'); ?>
        </div>
    </section>
    
<?php get_footer(); ?>