<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Template for displaying Blog Page
 * */

if (!defined('ABSPATH')){
	exit('not valid');
};


if(have_posts()) :
    while(have_posts()) : the_post() ; ?>

    <!-- article start -->
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
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="text-capitalize"> <?php the_author(); ?></a>
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

   <?php endwhile; //end loop

else:
    _e('No Posts', 'witl');
endif;