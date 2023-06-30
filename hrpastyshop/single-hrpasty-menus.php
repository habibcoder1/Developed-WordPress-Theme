<?php
/***
 *  Template for displaying single menu page
 */ 

// ABSPATH Defined
if(!defined('ABSPATH')){
	exit('not valid');
}

 get_header(); ?>

		<!-- Hero Area -->
		<div class="hero-area">
			<div class="container">
				<div class="row">
					<div class="hero-title text-center">
						<h1><?php echo get_theme_mod('hr_header_title'); ?></h1>
					</div>
					<div class="dot-underline"></div>
					<div class="hero-content text-center">
						<p><?php echo get_theme_mod('hr_header_desc_first'); ?> <br> <?php echo get_theme_mod('hr_header_desc_second'); ?></p>
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

	<section class="blog-page single-blog">
		<div class="container">
			<div class="row">
				<!-- main contents -->
				<div class="col-md-9">
					<div class="main-content">

						<?php get_template_part('template_part/single_menu'); ?>

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

					<!-- Comments Box -->
					<div class="comments-area">
						<?php 
						if(comments_open() || get_comments_number() ) :
							comments_template();
						endif; 
						 ?>

					</div>		

					<!-- Previou and Next Text -->
					<div class="previous_next-post">
						<div class="previous-post">
							<?php previous_post_link('%link', '< Previous Menu'); ?>
						</div>
						<div class="next-post">
							<?php next_post_link('%link', 'Next Menu >'); ?>
						</div>
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



 <!-- Single Page Styles  -->
<style>
	.blog-page.single-blog .post-title h2:hover{
		color: #56534c;
	}
</style>


