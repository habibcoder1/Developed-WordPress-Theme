<?php 
/**
*  template for displaying 404 page
**/

// ABSPATH Defined
if(!defined('ABSPATH')){
	exit('not valid'); // Exit if accessed directly.
}

get_header(); ?>

<!-- this style for header section in 404 page -->
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


<section class="emptypage">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p><?php _e('You are stying in an Empty page', 'hrpasty'); ?></p>
				<h3><?php _e('404 Page', 'hrpasty'); ?></h3>
				<p><?php _e('Please return', 'hrpasty'); ?> <a href="<?php echo home_url(); ?>"><?php _e('home page', 'hrpasty'); ?></a></p>
			</div>
		</div>
	</div>
</section>


<?php get_footer();