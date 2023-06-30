<?php 
/**
*	Home page Pancake Shortcode and Visual Composer Integretion
**/

add_shortcode('home-pancake', 'home_pancake_shortcode');
function home_pancake_shortcode($atts, $content = NULL){
	$hpancake = extract( shortcode_atts( array(
		'bgimg'         => '',
		'pancakeimg'    => '',
		'pcaketitle'    => 'Taste pancakes',
		'pcakesubtitle' => 'SEASON FAVOURITE',
		'pcakedesc'     => 'Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus.',
		'pcreadytitle'  => 'ready in',
		'pcreadycount'  => '40',
		'pcreadymin'    => 'mins',
		'pcsliderimg1'  => '',
		'pcsliderimg2'  => '',
		'pcsliderimg3'  => '',
		'pcsliderimgall'=> '',
	), $atts ) );
	ob_start(); ?>

	<!-- =========================
		pancakes Area Start
	=========================  -->	

	<section class="pancakes-area" style="background-image: url('<?php echo wp_get_attachment_image_url($bgimg); ?>');">
		<div class="container">
			<div class="pancakes-img-details">
				<div class="row">
					<div class="col-md-5">
						<div class="pancakes-starts">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-regular fa-star"></i>
						</div>
						<div class="pancakes-img" style="background-image: url('<?php echo wp_get_attachment_image_url($pancakeimg); ?>');">
						</div>
						<div class="pancake-middleround">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<div class="col-md-7">
						<div class="pancakes-details">
							<div class="pancakes-title">
								<h2><?php echo $pcaketitle; ?></h2>
							</div>
							<div class="pancakes-subtitle">
								<h6 class="text-uppercase"><?php echo $pcakesubtitle; ?></h6>
							</div>
							<div class="pancakes-content">
								<p><?php echo $pcakedesc; ?></p>
							</div>
							<div class="pancakes-slider">
								<div class="carousel slide" id="pancakeitem-slider" data-bs-interval="4000" data-bs-ride="carousel">
									<div class="carousel-inner">
										<?php 
										$sliderall = vc_param_group_parse_atts($pcsliderimgall);
										foreach($sliderall as $slidersingle) :
										?>
										<div class="carousel-item active">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="slider-img">
														<?php if(!empty($slidersingle['pcsliderimg1'])) : ?>
														<img src="<?php echo wp_get_attachment_url($slidersingle['pcsliderimg1']); ?>" alt="pancake-image">
														<?php endif; ?>
													</div>
												</div>
												<div class="col-md-4 col-sm-4 slidermiddle-img">
													<div class="slider-img">
														<?php if(!empty($slidersingle['pcsliderimg2'])) : ?>
														<img src="<?php echo wp_get_attachment_url($slidersingle['pcsliderimg2']); ?>" alt="pancake-image">
														<?php endif; ?>
													</div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="slider-img">
														<?php if(!empty($slidersingle['pcsliderimg3'])) : ?>
														<img src="<?php echo wp_get_attachment_url($slidersingle['pcsliderimg3']); ?>" alt="pancake-image">
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
										<?php endforeach; ?>

									</div>
									<a href="#" class="carousel-control-prev pancakeslider-prev" data-bs-target="#pancakeitem-slider" data-bs-slide="prev">
										<i class="fa-solid fa-angle-left"></i>
									</a>
									<a href="#" class="carousel-control-next pancakeslider-next" data-bs-target="#pancakeitem-slider" data-bs-slide="next">
										<i class="fa-solid fa-angle-right"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="pancakeready-duration">
							<div class="pancakeready-title">
								<h5 class="text-center text-uppercase"><?php echo $pcreadytitle; ?></h5>
							</div>
							<div class="pancakeready-time text-center">
								<span><?php echo $pcreadycount; ?></span>
							</div>
							<div class="pancakeready-minute">
								<p class="text-center"><?php echo $pcreadymin; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>										

	<!-- =========================
		pancakes Area End
	=========================  -->	

	<?php 
	return ob_get_clean();
	wp_reset_postdata();
}

// Visual Composer Integretion
if (function_exists('vc_map')) {
	vc_map(array(
		'name'      => __('Home Pancake', 'hrpasty'),
		'base'      => 'home-pancake',
		'category'  => esc_html__('HR Pasty', 'hrpasty'),
		'icon'      => get_template_directory_uri().'/img/vc/hpancake.png',
		'params'    => array(
			array(
				'param_name'   => 'bgimg',
				'heading'      => __('Section Background Image', 'hrpasty'),
				'type'         => 'attach_image',
			),
			array(
				'param_name'   => 'pancakeimg',
				'heading'      => __('Pancake Image', 'hrpasty'),
				'type'         => 'attach_image',
			),
			array(
				'param_name'   => 'pcaketitle',
				'heading'      => __('Section Title', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => 'Taste pancakes',
			),
			array(
				'param_name'   => 'pcakesubtitle',
				'heading'      => __('Section Subtitle', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => 'SEASON FAVOURITE',
			),
			array(
				'param_name'   => 'pcakedesc',
				'heading'      => __('Section Short Description', 'hrpasty'),
				'type'         => 'textarea',
				'value'        => 'Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus.',
			),
			array(
				'param_name'   => 'pcreadytitle',
				'heading'      => __('Pancake Ready Title', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => 'ready in',
				'group'        => 'Pancake Ready Details',
			),
			array(
				'param_name'   => 'pcreadycount',
				'heading'      => __('Pancake Ready Minutes', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => '40',
				'group'        => 'Pancake Ready Details',
			),
			array(
				'param_name'   => 'pcreadymin',
				'heading'      => __('Pancake Ready Minutes Text', 'hrpasty'),
				'type'         => 'textfield',
				'value'        => 'mins',
				'group'        => 'Pancake Ready Details',
			),


			// Pancake Slider
			array(
				'param_name'   => 'pcsliderimgall',
				'heading'      => __('Testimonial Slider Item (3 Items)', 'hrpasty'),
				'type'         => 'param_group',
				'group'        => 'Pancake Slider',
				'params'       => array(
					array(
						'param_name'   => 'pcsliderimg1',
						'heading'      => __('Slider First Image', 'hrpasty'),
						'type'         => 'attach_image',
						'group'        => 'Pancake Slider',
					),
					array(
						'param_name'   => 'pcsliderimg2',
						'heading'      => __('Slider Second Image', 'hrpasty'),
						'type'         => 'attach_image',
						'group'        => 'Pancake Slider',
					),
					array(
						'param_name'   => 'pcsliderimg3',
						'heading'      => __('Slider Third Image', 'hrpasty'),
						'type'         => 'attach_image',
						'group'        => 'Pancake Slider',
					),
				),
			),
			
		),
	));
}
 
