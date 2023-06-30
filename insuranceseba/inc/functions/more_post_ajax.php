<?php  
/**
 * @package Insurance Seba
 * 
 * More Post with Ajax
 */

 if (!defined('ABSPATH')) {
	exit('not valid');
}


/* ========================
 	More posts with ajax
======================== */
add_action('wp_ajax_iseba_load_more_posts', 'iseba_load_more_posts'); // For logged-in users
add_action('wp_ajax_nopriv_iseba_load_more_posts', 'iseba_load_more_posts'); // For non-logged-in users
function iseba_load_more_posts(){
    $page = $_POST['page']; // Get the current page number
    $posts_per_page = 6;    // Number of posts to display (give here same shown posts)
  
    // Calculate the offset based on the page number
    $offset = ($page - 1) * $posts_per_page;
  
    // Query posts with the offset and posts per page
    $query = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => $posts_per_page,
        'offset'         => $offset,
        'post_status'    => 'publish',
    ));
  
    // Loop through the posts and display them
    if ($query->have_posts()) {
        while ($query->have_posts()) : $query->the_post(); ?>
    
        <article class="mb-6" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <div class="post-thumb">
                <a href="<?php the_permalink(); ?>" class="block overflow-hidden"><?php the_post_thumbnail(); ?></a>
            </div>
            <div class="category mt-2">
                <a href="#"><p class="uppercase"><?php the_tags('', ', ', ''); ?></p></a>
            </div>
            <div class="title mb-1">
                <a href="<?php the_permalink(); ?>"><h2 class="font-semibold text-xl leading-7 transition-all hover:text-[#DD3627]"><?php the_title(); ?></h2></a>
            </div>
            <div class="description">
                <?php echo wp_trim_words( get_the_content(), 30, '' ); ?>
            </div>
        </article>

        <?php endwhile; 
    }
    wp_reset_postdata(); die();
}
  