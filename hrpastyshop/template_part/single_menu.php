<?php 
    if(have_posts()) :
        
        while(have_posts()) : the_post(); ?>

        <div class="post-thumb">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="post-title">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="date-time-author">
            <!-- Custom Taxonomy -->
            <div class="category"> 
            <?php 
            $taxono = get_the_terms(get_the_ID(), 'hrpasty_taxonomy');
            if (!empty($taxono)) {
                _e('Category: ', 'hrpasty');

                $i = 1;
                foreach ($taxono as $tax){
                    $tax_name = $tax->name;
                    $tax_link = get_term_link($tax, 'hrpasty_taxonomy');

                    echo '<a href="'.esc_url($tax_link).'">'.__($tax_name).'</a>';
                    //Add comma (if will one more taxonomy)
                    echo ($i < count($taxono)) ? ", " : "";
                    $i++;
                };

            } ?>
            </div>
            
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
        <div class="post-content">
            <!-- Price -->
            <?php 
            $fprice = get_post_meta(get_the_ID(), '_hrfmprice', true);
            if (!empty($fprice)): ?>
                <h4><?php _e('Menu Price:', 'hrpasty'); ?> <span class="singlefprice"><?php echo $fprice; ?> </span> </h4>
            <?php endif; ?>

            <!-- Main Content -->
            <p><?php the_content(); ?></p>
        </div>

        <?php endwhile; ?>
        
    <?php else :
        _e('No post', 'hrpasty');
    endif; ?>