<?php  
/**
 * @package Insurance Seba
 * 
 * Post View Option Code
 */

 if (!defined('ABSPATH')) {
	exit('not valid');
}


/* =========================
 Post View Option
========================= */
// views show in a function
function iseba_get_post_view() {
    $counts = get_post_meta( get_the_ID(), '_post_view', true );

    return "$counts Views";

};
// views set and increase count in a function
function iseba_set_post_view() {

    $count = (int) get_post_meta( get_the_ID(), '_post_view', true );
    $count++;

    update_post_meta( get_the_ID(), '_post_view', $count );

};

// Add a column in post/custom post dashboard
add_filter( 'manage_posts_columns', 'iseba_posts_column_views' );
function iseba_posts_column_views( $columns ) {

    $columns['post_views'] = 'Views';

    return $columns;

};
// How many views count will show in post/custom post dashboard
add_action( 'manage_posts_custom_column', 'iseba_posts_custom_column_views' );
function iseba_posts_custom_column_views( $column ) {

    if ( $column === 'post_views') {

        echo iseba_get_post_view();

    }

};