<?php 
/***
 *  Template for search pages
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
		</style>

	</header>
	<!-- ====================
		Header Area End
	====================  -->


    <!-- ====================
		Pages Content Start
	====================  -->

	<section class="search-page blog-page">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
                    <div class="main-content">

                    <?php get_template_part('template_part/search_page'); ?>

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
		Pages Content End
	====================  -->


<?php get_footer(); ?>