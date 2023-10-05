<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
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
    <section class="blog-page single_blog-page">
        <div class="container">
            <div class="row">
                <!-- main content -->
                <div class="col-lg-9">
                    <div class="single_page-content">
                        <?php the_content(); ?>
                    </div> <!--single post end -->
                </div>
                <!-- main sidebar -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>