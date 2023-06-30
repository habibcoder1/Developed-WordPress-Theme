<?php
/***
 *  Template for displaying Specefic Menu Items Page
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
			.hrpasty_menu {
			    padding: 12px 0 70px 0;
			}
		</style>

	</header>
	<!-- ====================
		Header Area End
	====================  -->


	<!-- ====================
		Blog Content Start
	====================  -->

	<section class="blog-page hrpasty_menu">
		<div class="container">
			<div class="row">
				<!-- main contents -->
				<div class="col-md-12">

					<div class="archive-title">
		            <h2><?php _e('Menu Items', 'hrpasty'); ?></h2>
		            </div>

					<div class="main-content">

						<?php get_template_part('template_part/menu_item'); ?>
						
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

			</div>
		</div>
	</section>	

	<!-- ====================
		Blog Content End
	====================  -->


<?php get_footer(); ?>
