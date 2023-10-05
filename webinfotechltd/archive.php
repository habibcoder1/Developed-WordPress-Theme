<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Template for displaying Archive Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} ?>

<?php get_header(); ?>

    <!-- =========================
        Archive Page Start
    ========================== -->
    <section class="blog-page archive-page single_blog-page">
        <div class="container">
            <div class="row">
                <!-- main content -->
                <div class="col-lg-9">
                    <div class="single_page-content">
                        <!-- archive hero section -->
                        <div class="archive-hero">
                            <?php
                            // Archive Title and Description
                            the_archive_title('<h2 class="title text-uppercase">','</h2>');
                            the_archive_description('<div class="description text-capitalize">', '</div>');
                            ?>
                        </div>
                        <!-- article start -->
                        <?php get_template_part('template_parts/blog_page'); ?>

                        <!-- pagination /// -->
                        <div class="witl_pagination text-center">
                            <?php 
                            if (function_exists('the_posts_pagination')) {
                                the_posts_pagination([
                                    'type'               => 'list',
                                    'screen_reader_text' => ' ',
                                    'prev_text'          => '<i class="fa-solid fa-arrow-left"></i>',
                                    'next_text'          => '<i class="fa-solid fa-arrow-right"></i>',
                                    'end_size'           => '4' 
                                ]);
                            }; ?>
                        </div>
                    </div> <!--single post end -->
                </div>
                <!-- main sidebar -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!-- =========================
        Archive Page End
    ========================== -->


<?php get_footer(); ?>