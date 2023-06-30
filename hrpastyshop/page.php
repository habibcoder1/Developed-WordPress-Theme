<?php 
/***
 *  Template for displaying pages
 **/
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
			.main-sidebar {
			    margin: 50px 0;
			}
		</style>

	</header>
	<!-- ====================
		Header Area End
	====================  -->


	<!-- ====================
		Pages Content Start
	====================  -->

	<section class="pages">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="page-title">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="page-thumb">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="page-contents">
						<?php the_content(); ?>
					</div>
				</div>
				<!-- Sidebar -->
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
	

	<!-- ====================
		Pages Content End
	====================  -->


<?php get_footer(); ?>
