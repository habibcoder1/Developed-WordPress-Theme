<?php 
/**
 * @package Insurance Seba
 * 
 * Template for displaying Home/Front Page Page
 * */

if (!defined('ABSPATH')) {
	exit('you are a foolish');
} ?>

<?php get_header(); ?>

    <!-- =========================
        Body Section
    ========================== -->
    <section class="body-section front-page pt-2">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-4 gap-3">
            <!-- Left Sidebar -->
            <?php get_sidebar('left'); ?>
            <!-- main conent -->
            <div class="body-main_content col-span-2">
                <!-- feature section -->
                <?php get_template_part('template_parts/front_page'); ?>
            </div>
            <!-- Right Sidebar for Home Page -->
            <?php get_sidebar('right_home'); ?>
        </div>
    </section>
    
<?php get_footer(); ?>