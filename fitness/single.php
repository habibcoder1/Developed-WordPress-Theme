
<?php 
/*
* The Template For Displaying Post
*/
get_header(); ?>

	<?php while(have_posts()) : the_post() ; ?>

		<section class="singlepage-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h3><?php the_title(); ?></h3>
						</div>
						<div class="singleBlog-date">
							<p><?php the_time('d.F.Y'); ?> <span> <?php the_time('g:i a'); ?></span></p>
						</div>
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="single-content">
							<p><?php the_content(); ?></p>
						</div>

						<!-- previous & next post links -->
						<div class="prev_next-post">
							<div class="row">
								<div class="col-md-6">
									<div class="prev-post">
										<?php previous_post_link('%link', '< Previou Post'); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="next-post">
										<?php next_post_link('%link', 'Next Post >'); ?>
									</div>
								</div>
							</div>
						</div>
						
						<hr>
					</div>
				</div>
			</div>
		</section>
			

	<?php endwhile; ?>

		<!-- comments -->
		<section class="comments-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php 
						if(comments_open() || get_comments_number()):
							comments_popup_link('No Comment', 'One Comment', '%Comments');
							comments_template();
						endif;
						?>
					</div>
				</div>
			</div>
		</section>
		
<?php get_footer(); ?>