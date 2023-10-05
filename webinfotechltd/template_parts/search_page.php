<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Template for displaying Search Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
};


if(have_posts()) : ?>
    <!-- Search Title -->
    <div class="search-hero mt-1">
        <h2 class="text-uppercase search-title">
            <?php printf( __( 'Search Results for: %s', 'witl'), '<span>' . get_search_query() . '</span>' ); ?>
        </h2>
    </div>

    <!-- article start -->
    <?php while(have_posts()) : the_post();  ?>
    <article class="post-id" id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="main-article post-classes">
        <!-- thumbnail -->
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
        <!-- title -->
        <div class="title">
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        </div>
        <!-- author, category, tag, comment -->
        <div class="author-category_tag">
             <!-- author -->
            <div class="author">
                <?php echo get_avatar(get_the_author_meta('ID'), 21); //21 is avatar size ?>
                <?php _e('By', 'witl'); ?>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="capitalize"> <?php the_author(); ?></a>
            </div>
            <!-- category -->
            <div class="categories">
                <p class="category">
                    <i class="fa-regular fa-rectangle-list"></i>
                    <?php the_category(' / '); ?>
                </p>
            </div>
            <!-- tags -->
            <div class="tags">
                <p>
                    <i class="fa-solid fa-tags"></i>
                    <?php the_tags('', ' / ', ''); ?>
                </p>
            </div>
            <!-- comment -->
            <div class="comments">
                <i class="fa-regular fa-comment"></i>
                <a href="<?php comments_link(); ?>"><?php comments_number( 'Leave a Comment', '1 Comment', '% Comments' ); ?></a>
            </div>
        </div>
        <!-- main content -->
        <div class="main-content">
            <p><?php echo wp_trim_words( get_the_content(), 60, '' ); ?></p>
        </div>
        <div class="readmore-btn">
            <a href="<?php the_permalink(); ?>" class="text-capitalize witlPrimaryBtn"><?php _e('read more', 'witl'); ?></a>
        </div>
    </article> <!-- article end -->
    <?php  endwhile; wp_reset_postdata(); ?>

     <!-- pagination /// -->
    <div class="witl_pagination text-center">
        <?php 
        if (function_exists('the_posts_pagination')) {
            the_posts_pagination(array(
                'type'               => 'list',
                'screen_reader_text' => ' ',
                'prev_text'          => '<i class="fas fa-chevron-left"></i>',
                'next_text'          => '<i class="fas fa-chevron-right"></i>',
                'end_size'           => 4, 
            ));
        }; ?>
    </div>

<?php
else: ?>
    <!-- No Found Search Result -->
    <div class="search-result search-hero">
        <h2 class="text-uppercase search-title"><?php printf( __( 'Sorry, No Result Found For: %s', 'witl'), '<span>' . get_search_query() . '</span>' ); ?></h2>
    </div>
<?php
endif; ?>