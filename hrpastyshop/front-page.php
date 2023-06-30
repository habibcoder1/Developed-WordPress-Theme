<?php 
/**
*  Template for displaying Front Page	
**/

// ABSPATH Defined
if(!defined('ABSPATH')){
	exit; // Exit if accessed directly.
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
	

	<?php 
	while (have_posts()) : the_post() ;

		the_content();

	endwhile;
	?>


<?php get_footer(); ?>
