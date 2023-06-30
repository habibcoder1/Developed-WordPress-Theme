<?php 
/**
 * @package Insurance Seba
 * 
 * Template for displaying Blog Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} 


if(have_posts()) : ?>
    <!-- Search Title -->
    <div class="blog-hero mt-1">
        <h2 class="title uppercase bg-[#EEEEEE] pl-2 text-[26px] search-title">
            <?php printf( __( 'Search Results for: %s', 'insurance-seba'), '<span>' . get_search_query() . '</span>' ); ?>
        </h2>
    </div>
    <!-- blog details -->
    <div class="blog-details border-l-8 border-[#EEEEEE] p-4">
        <!-- blog post -->
        <div class="blog-row grid sm:grid-cols-3 sm:gap-4">
            <!-- single blog -->
            <?php while(have_posts()) : the_post();  ?>
            <article class="mb-6" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                <div class="post-thumb">
                    <a href="<?php the_permalink(); ?>" class="block overflow-hidden"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="tag mt-2">
                    <?php  
                    $ptags = get_the_terms( get_the_ID(), 'ispolicy_tags');
                    if(!empty($ptags)){
                        $incrc = 1;
                        foreach($ptags as $ptag){
                            $ptagname = $ptag->name;
                            $ptagurl  = get_term_link( $ptag, 'ispolicy_tags');
                            echo '<a href="'.$ptagurl.'"><p class="uppercase inline-block">'.__($ptagname, 'insurance-seba').'</p></a>';

                            echo ($incrc < count($ptags)) ? ' / ' : '';
                            $incrc++;
                        }
                    } ?>
                    <a href="#"><p class="uppercase"><?php the_tags('', ' / ', ''); ?></p></a>
                </div>
                <div class="title mb-1">
                    <a href="<?php the_permalink(); ?>"><h2 class="font-semibold text-xl leading-7 transition-all hover:text-[#DD3627]"><?php the_title(); ?></h2></a>
                </div>
                <div class="description">
                    <p><?php echo wp_trim_words( get_the_content(), 30, '' ); ?></p>
                </div>
            </article>
            <?php  endwhile; wp_reset_postdata(); ?>
            
        </div>
        <!-- Pagination -->
        <div class="post-pagination text-center mt-3">
            <?php 
            if (function_exists('the_posts_pagination')) {
                the_posts_pagination(array(
                    'type'               => 'list',
                    'screen_reader_text' => ' ',
                    'prev_text'          => '<i class="fas fa-chevron-left"></i>',
                    'next_text'          => '<i class="fas fa-chevron-right"></i>',
                    'end_size'           => 4 
                ));
            }
            ?>
        </div>
    </div>
<?php
else: ?>
    <!-- No Search Result -->
    <div class="search-result">
        <h2 class="title uppercase bg-[#EEEEEE] pl-2 text-[26px] search-title"><?php printf( __( 'Sorry, No Result Found For: %s', 'insurance-seba'), '<span>' . get_search_query() . '</span>' ); ?></h2>
    </div>
<?php
endif; ?>