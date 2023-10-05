<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Template for displaying Search Page
 * */

if (!defined('ABSPATH')){
	exit('not valid');
};


get_header(); ?>

    <!-- =========================
        Body Section
    ========================== -->
    <section class="search-page blog-page single_blog-page">
        <div class="container">
            <div class="row">
                <!-- main content -->
                <div class="col-lg-9">
                    <div class="single_page-content"> 
                        <?php get_template_part('template_parts/search_page'); ?>
                    </div> <!--single post end -->
                </div>
                <!-- main sidebar -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>