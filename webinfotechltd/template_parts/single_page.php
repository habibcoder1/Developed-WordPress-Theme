<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Template for displaying Single Blog Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
};

if(have_posts()) :
    while(have_posts()) : the_post() ; ?>

   <!-- article start -->
   <article class="post-id" class="main-article post-classes">
        <!-- thumbnail -->
        <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
        <!-- title -->
        <div class="title">
            <h2><?php the_title(); ?></h2>
        </div>
        <!-- author, category, tag, comment -->
        <div class="author-category_tag">
            <!-- author -->
            <div class="author">
                <?php echo get_avatar(get_the_author_meta('ID'), 21); //21 is avatar size ?>
                <?php _e('By', 'witl'); ?>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <?php the_author(); ?></a>
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
            <?php the_content(); ?>
        </div>
    </article> <!-- article end -->
    <!-- social links -->
    <div class="social-links">
        <div class="social-title">
            <h3 class="text-capitalize"><?php _e('social share:', 'witl'); ?></h3>
        </div>
        <ul>
            <?php 
            $page_url   = urlencode(get_the_permalink()); //Get current page URL 
            $post_title = str_replace( ' ', '%20', get_the_title()); //page title ?>
            <li><a href="<?php echo esc_url('https://www.facebook.com/sharer/sharer.php?u='.$page_url.'&title='.$post_title.'') ?>" title="Share on Facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="<?php echo esc_url('https://twitter.com/intent/tweet?url='.$page_url.'&text='.$post_title.''); ?>" title="Share on Twitter" target="_blank"><i class="fa-brands fa-square-x-twitter"></i></a></li>
            <li><a href="<?php echo esc_url('https://www.linkedin.com/shareArticle?mini=true&url='.$page_url.'&title='.$post_title.''); ?>" title="Share on LinkedIn" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="<?php echo esc_url('https://wa.me/send?text='.$post_title.' '.$page_url.''); ?>" title="Share on WhatsApp" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a></li>
        </ul>
    </div>
    <!-- related posts -->
    <?php 
    $witl_post = get_post(get_the_ID());

    $witlrelated_post = new WP_Query([
        'post_type'      => 'post',
        'category__in'   => wp_get_post_categories($witl_post->ID),  //post categories
        'post__not_in'   => [$witl_post->ID],  //for after post
        'posts_per_page' => 3,
        'order'          => 'DESC',
    ]);
    if($witlrelated_post->have_posts()) : ?>
    <div class="related-post">
        <!-- title -->
        <div class="relatedpost-title">
            <h3 class="text-capitalize"><?php _e('recommended for you', 'witl'); ?></h3>
        </div>
        <!-- related post items -->
        <div class="related_post-items">
            <div class="row">
                <?php while($witlrelated_post->have_posts()) : $witlrelated_post->the_post(); ?>
                <!-- single related post -->
                <div class="col-md-4">
                    <article class="single_related-post">
                        <!-- thumbnail -->
                        <a href="<?php the_permalink(); ?>">
                            <div class="thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </a>
                        <!-- title -->
                        <div class="title">
                            <a href="<?php the_permalink(); ?>"><h3><?php echo wp_trim_words( get_the_title(), 5, '' ); ?></h3></a>
                        </div>
                        <!-- short content -->
                        <div class="short-content">
                            <p><?php echo wp_trim_words( get_the_content(), 15, ''); ?></p>
                        </div>
                    </article>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <?php 
    else:
        _e('No Related Posts', 'witl');

    endif; //endif realted post ?>

   <?php endwhile;  wp_reset_postdata(); //end first loop 

else:
    _e('No Posts', 'witl');
endif;