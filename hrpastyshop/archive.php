<?php
/***
 *  Template for displaying archive page
 */ 

// ABSPATH Defined
if(!defined('ABSPATH')){
	exit('not valid');   // Exit if accessed directly.
}

 get_header(); ?>

		<!-- this style for header section in pages -->
		<style>
			.header-area {
				padding-bottom: 70px;
				padding-top: 0;
			}
			.main-sidebar {
			    margin: 50px 0;
			}
		</style>

	</header>
	<!-- ====================
		Header Area End
	====================  -->


	<!-- ====================
		Blog Content Start
	====================  -->

	<section class="blog-page archive-page">
		<div class="container">
			<div class="row">
				<!-- main contents -->
				<div class="col-md-9">

					<div class="archive-title">
		              <?php
		                  the_archive_title('<h2 class="title">','</h2>');
		                  the_archive_description('<div class="description">', '</div>');
		              ?>
		            </div>

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
