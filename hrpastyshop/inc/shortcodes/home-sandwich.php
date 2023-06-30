<?php 
/**
*	Home Sandwich Shorcode and Visual Composer Integretion
*/

add_shortcode('home-sandwich', 'hrhome_sandwich_shortcode');
function hrhome_sandwich_shortcode($atts, $content = NULL){
    $hrhsandwich = extract(shortcode_atts(array(
        'title'         => 'The Jibarito sandwich        ',
        'subtitle'      => "THE BEST SANDWICH YOU'VE EVER TASTED!",
        'sandwichitem'  => 3,
        'sandwichimg'   => '',
        'sandpreptime'  => '15',
        'sandcooktime'  => '35',
        'sandreadytime' => '50',
        'sandbtntext'   => 'full recipe',
        'sandbtnlink'   => '#',
    ), $atts));
    ob_start(); ?>
   
    <!-- =========================
		Sandwich Area Start
	=========================  -->

	<section class="sandwich-area">
		<div class="container">
			<div class="sandwich-title">
				<h2 class="text-center"><?php echo $title; ?></h2>
			</div>
			<div class="sandwich-subtitle">
				<h6 class="text-uppercase text-center"><?php echo $subtitle; ?></h6>
			</div>
			<div class="sandwich-detailsarea">
				<div class="row">
					<div class="col-md-4">
						<div class="sandwich-items">
                            <?php 
                            $sandwich = new WP_Query(array(
                                'post_type'       => 'hrpasty-menus',
                                'posts_per_page'  => $sandwichitem,
                                'order'           => 'DSC',
                                'order_by'        => 'date',
                                'tax_query' => array(
                                    array(
                                      'taxonomy' => 'hrpasty_taxonomy',
                                      'field'    => 'slug',
                                      'terms'    => array('sandwich')  //taxonomy slug name
                                    )
                                )
                            ));
                            
                            while($sandwich->have_posts()) : $sandwich->the_post() ;
                            ?>
							<div class="sandwich-singleitem text-center">
								<div class="sandwich-img">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="sandwichitem-title">
									<h3><?php the_title(); ?></h3>
								</div>
								<div class="sandwich-content">
									<p><?php echo wp_trim_words(get_the_content(), 10, '..'); ?></p>
								</div>
							</div>
                            <?php endwhile; ?>
						</div>
					</div>
					<div class="col-md-8">
						<div class="sandwich-imgbox">
							<div class="sandwich-bigimg">
								<img src="<?php echo wp_get_attachment_image_url($sandwichimg); ?>" alt="sandwich-image">
							</div>
							<div class="sandwichimg-sidebar">
								<div class="sandwichsidebar-firstitem">
									<div class="sanditem-title">
										<p class="text-uppercase">prep</p>
									</div>
									<div class="sanditem-time">
										<span><?php echo $sandpreptime; ?></span>
									</div>
									<div class="sanditem-minute">
										<p>mins</p>
									</div>
								</div>
								<div class="sandwichsidebar-seconditem">
									<div class="sanditem-title">
										<p class="text-uppercase">cook</p>
									</div>
									<div class="sanditem-time">
										<span><?php echo $sandcooktime; ?></span>
									</div>
									<div class="sanditem-minute">
										<p>mins</p>
									</div>
								</div>
								<div class="sandwichsidebar-thirditem">
									<div class="sanditem-title">
										<p class="text-uppercase">ready in</p>
									</div>
									<div class="sanditem-time">
										<span><?php echo $sandreadytime; ?></span>
									</div>
									<div class="sanditem-minute">
										<p>mins</p>
									</div>
								</div>
							</div>	
							<div class="sandwichrecipe-button">
								<a href="<?php echo $sandbtnlink; ?>" class="text-uppercase hrbtn"><?php echo $sandbtntext; ?></a>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>			

	<!-- =========================
		Sandwich Area End
	=========================  -->

    <?php 
    return ob_get_clean();
    wp_reset_postdata();

}


// Visual Composer Integretion
if (function_exists('vc_map')) {
    vc_map(array(
        'name'       => __('Home Sandwich', 'hrpasty'),
        'base'       => 'home-sandwich',
        'category'   => esc_html__('HR Pasty', 'hrpasty'),
        'icon'       => get_template_directory_uri().'/img/vc/hsandwich.png',
        'params'     => array(
            array(
                'param_name'   => 'title',
                'heading'      => __('Title', 'hrpasty'),
                'type'         => 'textfield',
                'value'        => 'The Jibarito sandwich',
            ),
            array(
                'param_name'   => 'subtitle',
                'heading'      => __('Subtitle', 'hrpasty'),
                'type'         => 'textfield',
                'value'        => "THE BEST SANDWICH YOU'VE EVER TASTED!",
            ),
            array(
                'param_name'   => 'sandwichitem',
                'heading'      => __('How Many Items Will Show', 'hrpasty'),
                'type'         => 'textfield',
                'value'        => 3,
                'group'        => 'Sandwich Items',
            ),
            array(
                'param_name'   => 'notice',
                'heading'      => __('Just save this element for Sandwich Items (3 items will show here)', 'hrpasty'),
                'type'         => 'text',
                'group'        => 'Sandwich Items',
            ),
            array(
                'param_name'   => 'sandwichimg',
                'heading'      => __('Sandwich Image', 'hrpasty'),
                'type'         => 'attach_image',
                'group'        => 'Sandwich Details',
            ),
            array(
                'param_name'   => 'sandpreptime',
                'heading'      => __('Sandwich Prepare Time (min)', 'hrpasty'),
                'type'         => 'textfield',
                'value'        => '15',
                'group'        => 'Sandwich Details',
            ),
            array(
                'param_name'   => 'sandcooktime',
                'heading'      => __('Sandwich Cook Time (min)', 'hrpasty'),
                'type'         => 'textfield',
                'value'        => '35',
                'group'        => 'Sandwich Details',
            ),
            array(
                'param_name'   => 'sandreadytime',
                'heading'      => __('Sandwich Ready Time (min)', 'hrpasty'),
                'type'         => 'textfield',
                'value'        => '50',
                'group'        => 'Sandwich Details',
            ),
            array(
                'param_name'   => 'sandbtntext',
                'heading'      => __('Sandwich Button Text', 'hrpasty'),
                'type'         => 'textfield',
                'value'        => 'full recipe',
                'group'        => 'Sandwich Details',
            ),
            array(
                'param_name'   => 'sandbtnlink',
                'heading'      => __('Sandwich Button Text', 'hrpasty'),
                'type'         => 'textfield',
                'value'        => '#',
                'group'        => 'Sandwich Details',
            ),
        ),
    ));
}
