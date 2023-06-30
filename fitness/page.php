<!-- ===================================
	The Template For Displaying Pages
==================================== -->
<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>

	<section class="pages">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-title">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="page-thumb">
						<?php the_post_thumbnail(); ?>	
					</div>
					<div class="page-content">
						<?php the_content(); ?>	
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endwhile; ?>

<?php get_footer(); ?>