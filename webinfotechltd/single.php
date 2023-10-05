<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Template for displaying Single Blog Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} 

get_header(); ?> 


    <!-- ==========================
        Single Page Start
    =========================== -->
    <section class="blog-page single-page single_blog-page">
        <div class="container">
            <div class="row">
                <!-- main content -->
                <div class="col-lg-9">
                    <div class="single_page-content">

                        <?php get_template_part('template_parts/single_page'); ?>

                        <!-- comments -->
                        <div class="comments-area">
                            <?php if(comments_open() || get_comments_number() ) :
                                comments_template();
                            endif; ?>
                        </div>
                        <!-- previous, next post -->
                        <div class="previous_next-post">
                            <ul>
                                <li> <?php previous_post_link('%link', ''.'<i class="fa-solid fa-arrow-left"></i>'.' Previous Post'); ?></li>
                                <li> <?php next_post_link('%link', 'Next Post '.'<i class="fa-solid fa-arrow-right"></i>'.''); ?></li>
                                <?php 
                                wp_link_pages(
                                    array(
                                        'before'      => '<div class="page-links">' . __( 'Pages:', 'atsbd' ),
                                        'after'       => '</div>',
                                    )
                                ); ?>
                            </ul>
                        </div>
                    </div> <!--single post end -->
                </div>
                <!-- main sidebar -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!-- ==========================
        Single Page End
    =========================== -->

<?php get_footer(); ?>