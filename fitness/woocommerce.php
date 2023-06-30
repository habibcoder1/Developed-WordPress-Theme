<?php 

/*
	The Template is displaying of woocommerce
*/


get_header(); ?>



<section class="woocommerce-page" style="margin: 15px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<?php woocommerce_content(); ?>

			</div>
		</div>
	</div>
</section>



<?php get_footer();