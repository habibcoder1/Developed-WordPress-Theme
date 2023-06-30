<?php 
/*
*  Home Breakfast Shortcode and Visual Composer Integretion
**/

add_shortcode('home-breakfast', 'home_breakfast_shortcode');
function home_breakfast_shortcode($atts, $content = NULL){
	$hbreakfast = extract( shortcode_atts(array(
		'bgimg'     => '',
		'title'     => 'breakfast',
		'subtitle'  => "1am breakfast? we're open!",
		'estyear'   => '1893',
		'bdtitle1'  => 'your morning',
		'bdtitle2'  => 'escape with flair',
		'bddesc'    => 'Donec vitae sapien ut libero venenatis faucibus. 
						Nullam quis ante. Etiam sit amet orci eget eros
						 faucibus tincidunt. Duis leo.',
		'bdbtnlink' => '#',
		'bdbtntext' => 'read',
	),$atts ));
	ob_start(); ?>

	<!-- =========================
		Breakfast Area Start
	=========================  -->	

	<section class="breakfast-area" style="background-image: url('<?php echo wp_get_attachment_image_url($bgimg); ?>');">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="breakfast-title">
								<h2 class="text-capitalize"><?php echo $title; ?></h2>
							</div>
							<div class="breakfast-subtitle">
								<h6 class="text-uppercase"><?php echo $subtitle ?></h6>
							</div>
							<div class="breakfast-items">
								<?php 
								$fooditem = new WP_Query(array(
									'post_type'       => 'hrpasty-menus',
									'posts_per_page'  => 3,
									'order'           => 'ASC',
									'order_by'        => 'date',
									'tax_query' => array(
										array(
										  'taxonomy' => 'hrpasty_taxonomy',
										  'field'    => 'slug',
										  'terms'    => array('breakfast-menu')  //taxonomy slug name
										)
									)
								));
								while ($fooditem->have_posts()) : $fooditem->the_post() ;
								?>
								<div class="breakfastsingle-item">
									<div class="breakfastitem-title">
										<h3><?php the_title(); ?></h3>
									</div>
									<div class="breakfastitem-shortdescription">
										<p><?php echo wp_trim_words(get_the_content(), 4, '..'); ?></p>
									</div>
									<div class="breakfastitem-price">
										<span><?php echo get_post_meta( get_the_ID(), '_hrfmprice', true ); ?></span>
									</div>
									<div class="breakfast-icon">
										<i class="fa-solid fa-hands"></i>
									</div>
								</div>
								<?php endwhile; ?>
								
							</div>
						</div>
						<div class="col-md-6">
							<div class="breakfast-detailsbox">
								<div class="breakfastbox-side">
									<span></span>
								</div>
								<div class="established-titledate">
									<div class="established-title">
										<p class="text-uppercase">est.</p>
									</div>
									<div class="established-date">
										<p><?php echo $estyear; ?></p>
									</div>
								</div>
								<div class="established-ulineficon">
									<div class="established-underline"></div>
									<div class="estateunder-middleround">
										<i class="fa-solid fa-cookie-bite"></i>
									</div>
								</div>
								<div class="breakfastdetails-title">
									<h2><?php echo $bdtitle1; ?></h2>
									<h2><?php echo $bdtitle2; ?></h2>
								</div>
								<div class="breakfastdetails-content">
									<p><?php echo $bddesc; ?></p>
								</div>
								<div class="breakfast-button">
									<a href="<?php echo $bdbtnlink; ?>" class="hrbtn text-uppercase"><?php echo $bdbtntext; ?></a>
								</div>
								<div class="breakfastdetails-bgleaf">
									<i class="fa-brands fa-pagelines"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>		

	<!-- =========================
		Breakfast Area End
	=========================  -->
	<?php
	return ob_get_clean();
	wp_reset_postdata();
};

// Visual Composer Integretion
if (function_exists('vc_map')) {
	vc_map(array(
		'name'      => __('Home Breakfast', 'hrpasty'),
		'base'      => 'home-breakfast',
		'category'  => __('HR Pasty', 'hrpasty'),
		'icon'      => get_template_directory_uri().'/img/vc/hbreakfast.png',
		'params'    => array(
			array(
				'param_name'   => 'bgimg',
				'heading'      => __('Section Background Image', 'hrpasty'),
				'type'         => 'attach_image',
			),
			array(
				'param_name'   => 'title',
				'heading'      => __('Section Title', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => 'Breakfast',
			),
			array(
				'param_name'   => 'subtitle',
				'heading'      => __('Section Title', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => "1am breakfast? we're open!",
			),
			array(
				'param_name'   => 'estyear',
				'heading'      => __('Established Year', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => "1893",
				'group'        => 'Breakfast Details Area',
			),
			array(
				'param_name'   => 'bdtitle1',
				'heading'      => __('Breakfast Details First Title', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => "Your morning",
				'group'        => 'Breakfast Details Area',
			),
			array(
				'param_name'   => 'bdtitle2',
				'heading'      => __('Breakfast Details Second Title', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => "Escape with flair",
				'group'        => 'Breakfast Details Area',
			),
			array(
				'param_name'   => 'bddesc',
				'heading'      => __('Breakfast Details Description', 'hrpasty'),
				'type'         => 'textarea',
				'value'        => 'Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.',
				'group'        => 'Breakfast Details Area',
			),
			array(
				'param_name'   => 'bdbtnlink',
				'heading'      => __('Button Link', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => '#',
				'group'        => 'Breakfast Details Area',
				'description'  => __('Full Link', 'hrpasty'),
			),
			array(
				'param_name'   => 'bdbtntext',
				'heading'      => __('Button Text', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => 'read',
				'group'        => 'Breakfast Details Area',
			),
			array(
				'param_name'   => 'Notice',
				'heading'      => __('Just save this element for Food Menu Items (Menu item will come from Food Menu post type)', 'hrpasty'),
				'type'         => 'text',
				'group'        => 'Food Menu Item',
			),
		),
	));
}