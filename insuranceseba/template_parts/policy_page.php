<?php 
/**
 * @package Insurance Seba
 * 
 * Template for displaying Policy Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} 

$currentpage = get_query_var('paged') ? get_query_var('paged') : 1;

$policypost = new WP_Query(array(
    'post_type'      => 'iseba-policy',
    // 'posts_per_page' => -1,
));
if($policypost->have_posts()) :
    while($policypost->have_posts()) : $policypost->the_post() ; ?>

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
        </div>
        <div class="title mb-1">
            <a href="<?php the_permalink(); ?>"><h2 class="font-semibold text-xl leading-7 transition-all hover:text-[#DD3627]"><?php the_title(); ?></h2></a>
        </div>
        <div class="description">
            <p><?php echo wp_trim_words( get_the_content(), 30, '' ); ?></p>
        </div>
    </article>

   <?php endwhile; wp_reset_postdata();
else:
    _e('No Posts', 'insurance-seba');
endif;