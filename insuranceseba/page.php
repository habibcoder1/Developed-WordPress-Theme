<?php 
/**
 * @package Insurance Seba
 * 
 * Template for displaying Page
 * */

if (!defined('ABSPATH')) {
	exit('you are a foolish');
} ?>

<?php get_header(); ?>

    <!-- =========================
        Body Section
    ========================== -->
    <section class="body-section pages pt-2">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-3">
            <!-- main conent -->
            <div class="body-main_content col-span-3 lg:col-span-4">
                <?php the_content(); ?>
            </div>
            <!-- right sidebar -->
            <?php get_sidebar('right'); ?>
        </div>
    </section>
    
<?php get_footer(); ?>