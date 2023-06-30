<?php 
/*
*  Breakfast Menu Shortcode and Visual Composer Integretion
*/

add_shortcode('hrbreakfast-menu', 'hrpasty_breakfastmenu_shortcodes');
function hrpasty_breakfastmenu_shortcodes($atts, $content){
	$hrbreakfm = extract(shortcode_atts(array(
		'title'   => 'Breakfast Menu',
		'btntext' => 'Order Food',
		'btnlink' => '#',
		'count'   => 3,
	), $atts));
	ob_start(); ?>

	<!-- ===========================
		Breakfast Menu Area Start
	===========================  -->

	<section class="breakfast-menuarea">
		<div class="container">
			<div class="breakfast-menutitle">
				<h2 class="text-center"><?php echo $title; ?></h2>
			</div>
			<div class="row">
				<?php 
					$breakfast = new WP_Query(array(
						'post_type'      => 'hrpasty-menus',
						'posts_per_page' => $count,
						'order'          => 'DSC',
						'order_by'       => 'date',
						'tax_query' => array(
							array(
							  'taxonomy' => 'hrpasty_taxonomy',
							  'field'    => 'slug',
							  'terms'    => array('breakfast-menu')  //taxonomy slug name
							)
						)
					));

				while ($breakfast->have_posts()) : $breakfast->the_post() ;
				?>
				<div class="col-md-4 col-sm-6">
					<div class="foodmenu-item">
						<div class="menuitem-img">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						<div class="menuitem-name">
							<a href="<?php the_permalink(); ?>"><h3 class="mt-2 text-uppercase"><?php the_title(); ?></h3></a>
						</div>
						<div class="menuitem-details">
							<p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
						</div>
						<div class="menuitem-price">
							<h3><?php _e('Price:', 'hrpasty'); ?> <span><?php echo get_post_meta(get_the_ID(), '_hrfmprice', true); ?></span></h3>
						</div>
						<div class="menuitem-button">
							<a href="<?php echo $btnlink; ?>" class="text-uppercase hrbtn"><?php echo $btntext; ?></a>
						</div>	
					</div>
				</div>
				<?php endwhile; ?>				
			</div>
		</div>
	</section>								

	<!-- ===========================
		Breakfast Menu Area End
	===========================  -->

	<?php
	return ob_get_clean();
	wp_reset_postdata();
}


// Visual Composer Integretion
if (function_exists('vc_map')) {
	vc_map(array(
		'name'      => __('Breakfast Menu', 'hrpasty'),
		'base'      => 'hrbreakfast-menu',
		'icon'      => get_template_directory_uri().'/img/vc/brekfast-menu.png',
		'category'  => 'HR Pasty',
		'params'    => array(
			array(
				'param_name'   => 'title',
				'heading'      => __('Breakfast Section Title', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => 'Breakfast Menu',
			),
			array(
				'param_name'   => 'btntext',
				'heading'      => __('Order Button Text', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => 'Order Food',
			),
			array(
				'param_name'   => 'btnlink',
				'heading'      => __('Order Button Link', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => '#',
			),
			array(
				'param_name'   => 'count',
				'heading'      => __('How Many Menu Items Will Show', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => 3,
			),
		), 
	));
}