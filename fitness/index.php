	<?php 

	/**
	*	The Template for dispalying index page 
	*/

	// ABSPATH defined
	if (! defined('ABSPATH')) {
		exit('Invalid Request'); // only polish people try to rredirect to index page
	}

	

	global $hrfitness; get_header(); ?>

	<!-- ========================
		Blog Area Start
	========================= -->

	<section class="blog-area">
		<div class="container">
			<div class="row">
				<div class="blogArea-title">
					<h2 class="text-center text-uppercase"><?php echo $hrfitness['hrfitnessblpgtitle']; ?></h2>
				</div>

				<?php 
				while(have_posts()) : the_post() ;
				?>
				<!-- Fitness -->
				<div class="single-blog fitness">
					<div class="row">
						<div class="col-md-6">
							<div class="singleBlog-title">
								<a href="<?php the_permalink(); ?>"><h3 class="text-light"><?php echo wp_trim_words(get_the_title(), 6, true); ?></h3></a>
							</div>
							<div class="singleBlog-content">
								<p><?php echo wp_trim_words(get_the_content(), 65, true); ?></p>
							</div>
							<div class="singleBlog-date">
								<p><?php the_time('d.F.Y'); ?> <span><?php the_time('g:i a'); ?></span></p>
							</div>
							<div class="singleBlog-btn">
								<a href="<?php the_permalink(); ?>" class="button">read more</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="blogpage-img">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
					</div>
					
				</div>
				<?php endwhile; ?>


				<!-- Review -->
				<div class="review-slider owl-carousel">
					<?php 
					$hrfitblogslidr = new WP_Query(array(
						'post_type'       => 'post',
						'posts_per_page'  => 3,
					));

					while($hrfitblogslidr->have_posts()) : $hrfitblogslidr->the_post() ;
					?>

					<div class="single-blog review">
						<div class="row">
							<div class="col-md-6">
								<div class="singleBlog-title">
									<a href="<?php the_permalink(); ?>"><h3 class="text-light"><?php echo wp_trim_words(get_the_title(), 4, true); ?></h3></a>
								</div>
								<div class="singleBlog-content">
									<p><?php echo wp_trim_words(get_the_content(), 65, true); ?></p>
								</div>
								<div class="singleBlog-date">
									<p><?php the_time('d.F.Y'); ?> <span><?php the_time('g:i a'); ?></span></p>
								</div>
								<div class="singleBlog-btn">
									<a href="<?php the_permalink(); ?>" class="button">read more</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="blogpage-img">
									<?php the_post_thumbnail(); ?>
								</div>
							</div>
						</div>
						
					</div>
					<?php endwhile; ?>
				</div>


			</div>
		</div>
	</section>

	<!-- ========================
		Blog Area End
	========================= -->


	<!-- pagination -->
	<div class="blog-pagination">
		<?php 
		if (function_exists( 'the_posts_pagination' )) {
			the_posts_pagination(array(
				'type'               => 'list',
				'screen_reader_text' => ' ',
				'prev_text'          => '<i class="fas fa-chevron-left"></i>',
				'next_text'          => '<i class="fas fa-chevron-right"></i>',
				'end_size'           => '4'  
			));
		} ?>
	</div>
	

	<?php get_footer(); ?>
