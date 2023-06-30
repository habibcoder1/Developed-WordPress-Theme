<?php 

/**
 * 	Template for displaying full with page
 * 
 * 	Template Name: Full Width/No Sidebar
 * 
 * */

// ABSPATH Defined
if(!defined('ABSPATH')){
	exit; // Exit if accessed directly.
}

    get_header(); ?>

		<!-- this style for header section in pages -->
		<style>
			.header-area {
				padding-bottom: 70px;
				padding-top: 0;
			}
		</style>

	</header>
	<!-- ====================
		Header Area End
	====================  -->

	<?php while (have_posts()) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; ?>


<?php get_footer(); ?>