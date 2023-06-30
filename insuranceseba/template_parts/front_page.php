<?php 
/**
 * @package Insurance Seba
 * 
 * Template for displaying Home/Front Page Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} ?>


<div class="body-feature_messge">
    <div class="section-title mb-2">
        <h5 class="text-[15px] uppercase bg-[#EEEEEE] pl-1 py-1"><?php _e('feature message', 'insurance-seba'); ?></h5>
    </div>
    <div class="section-details py-2 grid sm:grid-cols-3 gap-1">
        <!-- feature one -->
        <?php  
        $policyquery = new WP_Query(array(
            'post_type'      => 'iseba-policy',
            'posts_per_page' => 3,
            'tax_query' => array(
                array(
                    'taxonomy' => 'ispolicy_taxonomy',
                    'field'    => 'slug',
                    'terms'    => array('feature-message')  //category slug name
                )
            )
        ));
        if($policyquery->have_posts()) :
            while($policyquery->have_posts()) : $policyquery->the_post(); ?>
            <div class="feature-one">
                <div class="feature-img">
                    <a href="<?php the_permalink(); ?>" class="block overflow-hidden"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="feature-title mt-1">
                    <?php  
                    $isebatags = get_the_terms(get_the_ID(), 'ispolicy_tags');
                    if(!empty($isebatags)){
                        $i = 1;
                        foreach($isebatags as $istag){
                            $tagname = $istag->name;
                            $taglink = get_term_link($istag, 'ispolicy_tags');
                            echo '<a href="'.esc_url($taglink).'"><p class="uppercase opacity-90 pt-1 sm:pt-0 transition-all hover:text-[#DD3627]">'.__($tagname, 'insurance-seba').'</p></a>';

                            //Add comma (if will one more taxonomy)
                            echo ($i < count($isebatags)) ? " / " : "";
                            $i++;
                        };
                    } ?>
                </div>
                <div class="feature-description">
                    <p><?php echo wp_trim_words(get_the_content(), 13, ''); ?> </p>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata();
        endif; ?>  
    </div>
</div>
<!-- blog post -->
<div class="body-regular_message mt-2 sm:mt-1">
    <div class="section-title mb-2">
        <h5 class="text-[15px] uppercase bg-[#EEEEEE] pl-1 py-1"><?php _e('regular message', 'insurance-seba'); ?></h5>
    </div>
    <div class="section-details">
        <?php  
        $isebaRegular = new WP_Query(array(
            'post_type'  => 'iseba-policy',
            'posts_per_page' => 3,
            'tax_query'      => array(
                array(
                    'taxonomy' => 'ispolicy_taxonomy',
                    'field'    => 'slug',
                    'terms'    => array('regular-message'), //category slug
                )
            ),
        ));
        if($isebaRegular->have_posts()) :
            while($isebaRegular->have_posts()) : $isebaRegular->the_post();
        ?>
            <!-- article -->
            <article class="blog-post grid grid-cols-3 gap-3 pb-3">
                <div class="post-thumbnail mb-2 sm:mb-0">
                    <a href="<?php the_permalink(); ?>" class="block overflow-hidden"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="post-details col-span-2">
                    <div class="post-category">
                        <?php  
                        $isrtags = get_the_terms(get_the_ID(), 'ispolicy_tags');
                        if(!empty($isrtags)){
                            $is = 1;
                            foreach($isrtags as $isrtag){
                                $isrtagName = $isrtag->name;
                                $isrurl = get_term_link($isrtag, 'ispolicy_tags');

                                echo '<a href="'.esc_url($isrurl).'" class="uppercase opacity-90 pt-1 sm:pt-0">'.__($isrtagName, 'insurance-seba').'</a>';

                                //add comma in more tags
                                echo ($is < count($isrtags)) ? ' / ' : '';
                                $is++;
                            }
                        } ?>
                    </div>
                    <div class="post-title">
                        <a href="<?php the_permalink(); ?>"><h2 class="text-[17px] font-semibold transition-all hover:text-[#DD3627] sm:-my-1"><?php the_title(); ?></h2></a>
                    </div>
                    <div class="post-content mb-2 sm:mb-0">
                        <p><?php echo wp_trim_words(get_the_content(), 25, ''); ?></p>
                    </div>
                    <div class="post-social mt-2">
                        <ul class="social-link text-end">
                            <?php  
                                $url   = urlencode(get_the_permalink());     //Get current page URL 
                                $title = str_replace( ' ', '%20', get_the_title());    //page title 
                            ?>
                            <li><a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>&title=<?php echo $title; ?>" target="_blank" title="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="https://twitter.com/intent/tweet?url=<?php echo $url; ?>&text=<?php echo $title; ?>" target="_blank" title="Share on Twitter"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>&title=<?php echo $title; ?>" target="_blank" title="Share on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a class="email" href="mailto:contact.habibcoder@gmail.com" target="_blank" title="Email"><i class="fa-regular fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </article>
        <?php endwhile; wp_reset_postdata();
        endif; ?>
        <div class="morepost-button mt-2">
            <a href="<?php echo home_url('/policy') ?>" class="isebaButton"><?php _e('more posts', 'insurance-seba'); ?></a>
        </div>
    </div>
</div>