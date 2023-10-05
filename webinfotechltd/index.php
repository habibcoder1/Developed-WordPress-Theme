<?php  
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * This template for displaying blog page
 */


if(!defined('ABSPATH')){
    exit('not valid');
};


get_header(); ?>

    <!-- ==========================
        Blog Area Start
    =========================== -->
    <section class="blog-page single_blog-page">
        <div class="container">
            <div class="row">
                <!-- main content -->
                <div class="col-lg-9">
                    <div class="single_page-content">

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
    <!-- ==========================
        Blog Area End
    =========================== -->              

<?php 
get_footer();