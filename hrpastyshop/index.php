<?php
/***
 *  Template for displaying blog page
 */ 

// ABSPATH Defined
if(!defined('ABSPATH')){
	exit('not valid');  // Exit if accessed directly.
}

 get_header(); ?>

		<!-- Hero Area -->
		<div class="hero-area">
			<div class="container">
				<div class="row">
					<div class="hero-title text-center">
						<h1><?php echo get_option('header-title'); ?></h1>
					</div>
					<div class="dot-underline"></div>
					<div class="hero-content text-center">
						<p><?php echo get_option('header-desc1'); ?> <br> 
						<?php echo get_option('header-desc2'); ?></p>
					</div>
					<div class="hero-button text-center">
						<a href="<?php echo get_theme_mod('hr_header_button_link'); ?>" class="text-uppercase hrbtn"><?php echo get_theme_mod('hr_header_button_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Bottom Round Shape -->
		<div class="headerbottom-roundshape">
			<?php echo get_theme_mod('hr_header_botton_icon'); ?>
		</div>
	</header>
	<!-- ====================
		Header Area End
	====================  -->


	<!-- ====================
		Blog Content Start
	====================  -->

	<section class="blog-page">
		<div class="container">
			<div class="row">
				<!-- main contents -->
				<div class="col-md-9">
					<div class="main-content">

						<?php get_template_part('template_part/blog_page'); ?>
						
					</div>
					<!-- Pagination -->
					<div class="post-pagination">
						<?php 
						if (function_exists('the_posts_pagination')) {
							the_posts_pagination(array(
								'type'               => 'list',
								'screen_reader_text' => ' ',
								'prev_text'          => '<i class="fas fa-chevron-left"></i>',
								'next_text'          => '<i class="fas fa-chevron-right"></i>',
								'end_size'           => '4' 
							));
						}
						?>
					</div>
				</div>
				<!-- Sidebar -->
				<?php get_sidebar(); ?>

			</div>
		</div>
	</section>	

	<!-- ====================
		Blog Content End
	====================  -->


<?php get_footer(); ?>
