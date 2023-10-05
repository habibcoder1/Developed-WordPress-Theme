<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Template for displaying Full Width Page
 * 
 * Template Name: Full Width/No Sidebar
 * */

// ABSPATH Defined
if (!defined('ABSPATH')) {
	exit('not valid');
};

get_header(); ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php get_footer(); ?>