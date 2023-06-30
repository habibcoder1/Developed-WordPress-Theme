<?php 
    if(have_posts()) :
        
        while(have_posts()) : the_post(); ?>

        <div class="post-thumb">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="post-title">
            <h2 title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h2>
        </div>
        <div class="date-time-author">
            <!-- Category -->
            <div class="category"> <?php _e('<i class="fas fa-list-alt"></i>', 'hrpasty'); ?> <?php the_category(', ');?> </div>
            <!-- Tags -->
            <div class="tags d-inline-block"><?php the_tags('<i class="fas fa-tags"></i> ', ' , ', '' ); ?></div>
            <!-- Comments -->
            <div class="comments">
                <i class="fa-solid fa-comment"></i>
                <a href="<?php comments_link(); ?>"><?php comments_number( 'Leave a Comment', '1 Comment', '% Comments' ); ?></a>
            </div>
            <!-- Calender -->
            <div class="calender">
                <i class="fa-solid fa-calendar-days"></i><a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')); ?>"> <?php the_time('d-F-Y'); ?> </a>
            </div>
            <!-- Date -->
            <div class="time">
                <i class="fa-regular fa-clock"></i> <?php the_time('g:i a'); ?>
            </div> 
            <!-- Author -->
            <div class="admin">
                <i class="fa-solid fa-user"></i> 
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?> "> <?php the_author(); ?></a>
            </div>
            <!-- Post Views -->
            <div class="views">
                <i class="fa-solid fa-eye"></i>
                <?php hr_set_post_view(); ?> <?php echo hr_get_post_view(); ?>
            </div>
        </div>
        <!-- Like/Dislike -->
        <div class="like_dislike">
            <div class="likes_item like">
                <a href="<?php echo add_query_arg('post_action', 'like'); ?>">
                    <i class="fa-solid fa-thumbs-up"></i> (<?php echo hr_get_like_count('_likes') ?>)
                </a>
            </div>
            <div class="dislikes_item dislike">
                <a href="<?php echo add_query_arg('post_action', 'dislike'); ?>">
                    <i class="fa-solid fa-thumbs-down"></i> (<?php echo hr_get_like_count('_dislikes') ?>)
                </a>
            </div>
        </div>

        <div class="post-content">
            <!-- Main Content -->
            <p><?php the_content(); ?></p>
        </div>
        <!-- Social Share -->
        <div class="post-socialshare">
            <h3 class="d-inline-block"><?php _e('Share Post:', 'hrpasty'); ?></h3>
            <div class="icons d-inline-block">
                <?php 
                $url   = urlencode(get_the_permalink()); //Get current page URL 
                $title = str_replace( ' ', '%20', get_the_title()); //page title 
                ?>  
                <!-- Facebook -->
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>&title=<?php echo $title; ?>" target="_blank"><i title="Share on Facebook" class="fa-brands fa-facebook"></i></a>
                <!-- Twitter -->
                <a href="https://twitter.com/intent/tweet?text=<?php echo $title ?>&amp;url=<?php echo $url ?>&amp;via=habibcoder" target="_blank"><i title="Share on Twitter" class="fa-brands fa-twitter"></i></a>
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>&amp;title=<?php echo $title; ?>" target="_blank"><i title="Share on LinkedIn" class="fa-brands fa-linkedin"></i></a>
                <!-- WhatsApp for Share -->
                <a href="https://wa.me/send?text=<?php echo $title; echo ' '; echo $url; ?>" target="_blank"><i title="Share on WhatsApp" class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div> <!--Social Share End -->

        <?php endwhile; ?>
        
    <?php else :
        _e('No post', 'hrpasty');
    endif; ?>