<?php 
/**
*   Home Arto of Cake Shortcode and Visual Composer Integretion
**/

add_shortcode('home-artofcake', 'hrhome_artofcakes_shortcode');
function hrhome_artofcakes_shortcode($atts, $content = NULL){
	$hrhartcake = extract( shortcode_atts( array(
		'title'       => 'art of cakes',
		'subtitle'    => 'we create delicious memories',
		'description' => 'Section Description is here',
		'checftitle'  => 'chef cook',
		'cheffname'   => 'benito',
		'cheflname'   => 'gespare',
		'chefimg'     => '',
		'chefdesc1'   => 'unique creations for unique',
		'chefdesc2'   => 'occasions.',
		'artcakeimg1' => '',
		'artcakeimg2' => '',
		'artcakeimg3' => '',
		'artcakeimg4' => '',
		'artcakeimgtitle' => 'taste so good!',
	), $atts ) );
	ob_start();  ?>

	<!-- =========================
		Art of Cakes Area Start
	=========================  -->

	<section class="cakes-area">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="cakes-leftdetails text-center">
						<div class="cakes-title">
							<h2><?php echo $title; ?></h2>
						</div>
						<div class="cakes-subtitle">
							<h6 class="text-uppercase"><?php echo $subtitle; ?></h6>
						</div>
						<div class="cakes-contnet">
							<p><?php echo $description; ?></p>
						</div>
						<div class="cakes-cheftitle">
							<h4 class="text-capitalize"><?php echo $checftitle; ?></h4>
						</div>
						<div class="row cakeschef-detials">
							<div class="col-md-4 col-sm-4">
								<div class="cakes-firstname">
									<h4 class="text-capitalize"><?php echo $cheffname; ?></h4>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="cakes-chefimage">
									<img src="<?php echo wp_get_attachment_image_url($chefimg); ?>" alt="cakes-chef">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="cakes-lastname">
									<h4 class="text-capitalize"><?php echo $cheflname; ?></h4>
								</div>
							</div>
						</div>
						<div class="cakeschef-content">
							<div class="cakeschef-beforearray">
								<i class="fa-solid fa-quote-left"></i>
							</div>
							<div class="cakeschef-content">
								<p><?php echo $chefdesc1; ?> <br> <?php echo $chefdesc2; ?></p>
							</div>
							<div class="cakeschef-afterarray">
								<i class="fa-solid fa-quote-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="cakes-imgaes">
						<div class="row">
							<div class="col-md-6">
								<div class="cakes-img1">
									<img src="<?php echo wp_get_attachment_image_url($artcakeimg1); ?>" alt="cakes-imgae">
									<span></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="cakes-img2">
									<img src="<?php echo wp_get_attachment_image_url($artcakeimg2); ?>" alt="cakes-imgae">
									<span></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="cakes-img3">
									<img src="<?php echo wp_get_attachment_image_url($artcakeimg3); ?>" alt="cakes-imgae">
									<span></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="cakes-img4">
									<img src="<?php echo wp_get_attachment_image_url($artcakeimg4); ?>" alt="cakes-imgae">
									<span></span>
								</div>
							</div>
						</div>
						<div class="cakesimgs-title">
							<h3 class="text-uppercase"><?php echo $artcakeimgtitle; ?></h3>
							<span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>																	

	<!-- =========================
		Art of Cakes Area End
	=========================  -->	

	<?php 
	return ob_get_clean();
	wp_reset_postdata();
}


// Visual Composer Integretion
if (function_exists('vc_map')) {
	vc_map(
		array(
			'name'     => esc_html__('Home Art of Cakes', 'hrpasty'),
			'base'     => 'home-artofcake',
			'category' => 'HR Pasty',
			'icon'     => get_template_directory_uri().'/img/vc/hartcake.png',
			'params'   => array(
				array(
					'param_name'  => 'title',
					'heading'     => 'Section Title',
					'type'        => 'textfield',
					'value'       => 'art of cakes',
				),
				array(
					'param_name'  => 'subtitle',
					'heading'     => 'Subtitle',
					'type'        => 'textfield',
					'value'       => 'WE CREATE DELICIOUS MEMORIES',
				),
				array(
					'param_name'  => 'description',
					'heading'     => 'Section Description',
					'type'        => 'textarea',
					'value'       => 'Section Description is here',
				),
				// Chef Area
				array(
					'param_name'   => 'checftitle',
					'heading'      => 'Chef Title',
					'type'         => 'textfield',
					'value'        => 'chef cook',
					'group'        => 'Chef Details',
				),
				array(
					'param_name'   => 'cheffname',
					'heading'      => 'Chef First Name',
					'type'         => 'textfield',
					'value'        => 'benito',
					'group'        => 'Chef Details',
				),
				array(
					'param_name'   => 'cheflname',
					'heading'      => 'Chef Last Name',
					'type'         => 'textfield',
					'value'        => 'gaspare',
					'group'        => 'Chef Details',
				),
				array(
					'param_name'   => 'chefimg',
					'heading'      => 'Chef Image',
					'type'         => 'attach_image',
					'group'        => 'Chef Details',
				),
				array(
					'param_name'   => 'chefdesc1',
					'heading'      => 'Chef Description First Line',
					'type'         => 'textfield',
					'value'        => 'unique creations for unique',
					'group'        => 'Chef Details',
				),
				array(
					'param_name'   => 'chefdesc2',
					'heading'      => 'Chef Description Last Line',
					'type'         => 'textfield',
					'value'        => 'occasions',
					'group'        => 'Chef Details',
				),
				// Cake Iamges
				array(
					'param_name'    => 'artcakeimgtitle',
					'heading'       => 'Cakes Images Title',
					'type'          => 'textfield',
					'value'         => 'taste so good!',
					'group'         => 'Cakes Images',
				),
				array(
					'param_name'    => 'artcakeimg1',
					'heading'       => 'Art of Cake First Image',
					'type'          => 'attach_image',
					'group'         => 'Cakes Images'
				),
				array(
					'param_name'    => 'artcakeimg2',
					'heading'       => 'Art of Cake Second Image',
					'type'          => 'attach_image',
					'group'         => 'Cakes Images'
				),
				array(
					'param_name'    => 'artcakeimg3',
					'heading'       => 'Art of Cake Third Image',
					'type'          => 'attach_image',
					'group'         => 'Cakes Images'
				),
				array(
					'param_name'    => 'artcakeimg4',
					'heading'       => 'Art of Cake Fourth Image',
					'type'          => 'attach_image',
					'group'         => 'Cakes Images'
				),

			),
		),
	);
}