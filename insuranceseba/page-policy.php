<?php 
/**
 * @package Insurance Seba
 * 
 * Template for displaying Policy Page
 * */

if (!defined('ABSPATH')) {
	exit('you are a foolish');
} ?>

<?php get_header(); ?>

    <!-- =========================
        Body Section
    ========================== -->
    <section class="body-section pages policy-page pt-2">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-3">
            <!-- main conent -->
            <div class="body-main_content col-span-3 lg:col-span-4">
                <!-- blog hero section -->
                <div class="blog-hero mt-1">
                    <h2 class="title uppercase bg-[#EEEEEE] pl-2 text-[26px]"><?php _e('latest policy', 'insurance-seba'); ?></h2>
                </div>
                <!-- blog details -->
                <div class="blog-details border-l-8 border-[#EEEEEE] p-4">
                    <!-- blog post -->
                    <div class="blog-row grid sm:grid-cols-3 sm:gap-4">
                        <!-- single blog -->
                        <?php get_template_part('template_parts/policy_page'); ?>
                    </div>
                    <!-- Pagination -->
                    <div class="post-pagination text-center mt-3">
                        <?php 
                        $currentpage = get_query_var('paged') ? get_query_var('paged') : 1;
                        $policypost = new WP_Query(array(
                            'post_type'      => 'iseba-policy',
                            'paged'          => $currentpage,
                        ));

                        $maxpages    = $policypost->max_num_pages;  //for maximum pages
                        echo paginate_links( array(
                            'type'               => 'list',        // ul li add in pagination
                            'current'            => $currentpage,  // current page
                            'total'              => $maxpages,     // How many max pages
                            'show_all'           => true,    // Show all number without dot
                            'prev_text'          => '<i class="fas fa-chevron-left"></i>',
                            'next_text'          => '<i class="fas fa-chevron-right"></i>', 
                            'screen_reader_text' => ' ',  
                            'end_size'           => 4,  
                        ));
                        ?>
                    </div>
                </div>
            </div>
            <!-- right sidebar -->
            <?php get_sidebar('right'); ?>
        </div>
    </section>
    
<?php get_footer(); ?>