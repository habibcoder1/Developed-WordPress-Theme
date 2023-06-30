<?php 
/**
 * @package Insurance Seba
 * 
 * Template for displaying Search Page
 * */

if (!defined('ABSPATH')) {
	exit('you are a foolish');
} ?>

<?php get_header(); ?>

    <!-- =========================
        Body Section
    ========================== -->
    <section class="body-section blog-page search-page pt-2">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-3">
            <!-- main conent -->
            <div class="body-main_content col-span-3 lg:col-span-4">
                <!-- Serch -->
                <?php get_template_part('template_parts/search_page'); ?>
            </div>
            <!-- right sidebar -->
            <?php get_sidebar('right'); ?>
        </div>
    </section>
    
<?php get_footer(); ?>