<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Featured Projects Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_Featured_Projects_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-featured-projects';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Featured Projects', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-featured-image';
	}
	// user can know more from this link (need help link)
	public function get_custom_help_url() {
		return 'http://habibcoder.com';
	}
	// for category
	public function get_categories() {
		return [ 'witl-category' ];  //developed category
	}
	// keywords for filter/search the widget list
	public function get_keywords() {
		return [ 'witl', 'featured-projects', 'featured', 'project' ];
	}
	// for scripts load
	public function get_script_depends() {
		return []; //array key from enqueue script
	}
	// for stylesheet load
	public function get_style_depends() {
		return []; //array key from enqueue style
	}
	// for backend control
    protected function register_controls() {
		// start controls
		$this->start_controls_section(
			'featured-projects',  //any text here (id)
			[
				'label' => esc_html__( 'Featured Projects Details', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);
        // title
        $this->add_control(
			'fp_title',  //any text here (id)
			[
                'label'		  => esc_html__( 'Featured Project Title', 'witl' ),
				'placeholder' => esc_html__( 'Title is here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('Featured Projects', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // content
        $this->add_control(
			'fp_subtitle',  //any text here (id)
			[
                'label'		  => esc_html__( 'Featured Project Subtitle', 'witl' ),
				'placeholder' => esc_html__( 'Subtitle text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //text
				'label_block' => true,
				'default'     => esc_html__('Examine our sample projects to unlock your potential.', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        
        // repeater for tab
		$this->add_control(
			'featured_project_list',
			[
				'label'  => esc_html__( 'Tab Items', 'witl' ),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					// tab icon
					[
		                'name'       => 'tab_icon',
		                'label'      => esc_html__( 'Tab Icon', 'witl' ),
		                'type'       => \Elementor\Controls_Manager::ICONS,
		                'default' => [
							'value'   => 'fa fa-star',
							'library' => 'fa-solid',
						], 
		            ],
		            // tab title
					[
						'name'        => 'tab_title',
						'label'       => esc_html__( 'Tab Title', 'witl' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Featured' , 'witl' ),
						'label_block' => true,
					],
					// content details
					[
                        'name'   => 'tab_content_items',
                        'label'  => esc_html__( 'Tab Content Items', 'witl' ),
                        'type'   => \Elementor\Controls_Manager::REPEATER,
                        'fields' => [
                    		// content bg image
							[
								'name'    => 'bg_image',
								'label'   => esc_html__( 'Tab Content BG Image', 'witl' ),
								'type'    => \Elementor\Controls_Manager::MEDIA,
								'default' => [
									'url' => \Elementor\Utils::get_placeholder_image_src(),
								],
							],
							// tab content right image
							[
								'name'    => 'right_img',
								'label'   => esc_html__( 'Tab Content Right Side Image', 'witl' ),
								'type'    => \Elementor\Controls_Manager::MEDIA,
								'default' => [
									'url' => \Elementor\Utils::get_placeholder_image_src(),
								],
							],
							// content logo
							[
								'name'    => 'content_logo',
								'label'   => esc_html__( 'Tab Content Logo Image', 'witl' ),
								'type'    => \Elementor\Controls_Manager::MEDIA,
								'default' => [
									'url' => \Elementor\Utils::get_placeholder_image_src(),
								],
							],
							// content title
							[
								'name'        => 'content_title',
								'label'       => esc_html__( 'Item Title', 'witl' ),
								'type' 		  => \Elementor\Controls_Manager::TEXT,
								'default' 	  => esc_html__( 'List Title' , 'witl' ),
								'label_block' => true,
							],
							// content description
							[
								'name' 		  => 'list_content',
								'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
								'label'		  => esc_html__( 'Description', 'witl' ),
								'placeholder' => esc_html__( 'Enter description', 'witl' ),
                                'label_block' => true,
								'default' 	  => esc_html__( 'Lorem ipsum sit emit' , 'witl' ),
								'dynamic'     => [
									'active'  => true,  //for dynamic tag
								],
							],
							// button text
							[
		                        'name'        => 'tab_button_text',
		                        'label'       => esc_html__( 'Button Text', 'witl' ),
		                        'type'        => \Elementor\Controls_Manager::TEXT,
                                'label_block' => true,
		                        'default' => esc_html__( 'Launch the website', 'witl' ),
		                    ],
		                    // button link
		                    [
		                        'name'        => 'tab_button_link',
		                        'label'       => esc_html__( 'Button Link', 'witl' ),
		                        'type'        => \Elementor\Controls_Manager::URL,
                                'label_block' => true,
		                        'default'     => [
                                    'url'         => '',
                                    'is_external' => false,
                                    'nofollow'    => false,
                                ],
		                    ],

                        ],
                    ],					
				],
				'default' => [
					[
						'list_title'   => esc_html__( 'Project #1', 'witl' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'witl' ),
					],
				],
				'title_field' => '{{{ tab_title }}}',
			]
		);
        
        // repeater for testimonial
        $this->add_control(
			'witl_testimonial',
			[
				'label'  => esc_html__( 'Testimonial Items', 'witl' ),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					// image
					[
		                'name'    => 'person_image',
                        'label'   => esc_html__( 'Person Image', 'witl' ),
                        'type'    => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ], 
		            ],
                     // image alt
					[
						'name'        => 'person_img_alt',
						'label'       => esc_html__( 'Image Alt Text', 'witl' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Mohammad "Sam" Elias' , 'witl' ),
						'label_block' => true,
					],
                    // content
                    [
                        'name'        => 'testi_content',
                        'label'		  => esc_html__( 'Testimonial Content', 'witl' ),
                        'placeholder' => esc_html__( 'Content is here', 'witl' ),
                        'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //text
                        'label_block' => true,
                        'default'     => esc_html__('Mauris, at viverra dignissim consequat lorem. Lectus massa egestas diam tincidunt in maecenas donec. Senectus feugiat integer nisl, luctus maecenas lorem. Faucibus augue tellus rhoncus tellus proin. A sed amet, malesuada amet, diam platea quis nulla tortor.', 'witl'),
                        'dynamic'     => [
                            'active'  => true,  //for dynamic tag option
                        ],
                    ],
		            // name
					[
						'name'        => 'tsti_name',
						'label'       => esc_html__( 'Testimonial Name', 'witl' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Mohammad "Sam" Elias' , 'witl' ),
						'label_block' => true,
					],
		            // name
					[
						'name'        => 'tsti_designation',
						'label'       => esc_html__( 'Designation', 'witl' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Chairman' , 'witl' ),
						'label_block' => true,
					],			
				],
				'default' => [
					[
						'tsti_name'   => esc_html__( 'Testimonial #1', 'witl' ),
					],
				],
				'title_field' => '{{{ tsti_name }}}',
			]
		);

   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['featured_project_list']) ) : ?>

        <section class="gallery-area">
            <div class="container"> 
                <!-- title & short description -->
                <div class="gallery-title_des text-center">
                    <div class="section-title">
                        <?php if ( ! empty($settings['fp_title']) ) : ?>
                        <h2 class="text-capitalize"><?php echo $settings['fp_title']; ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="gallery-short_des">
                        <?php if ( ! empty($settings['fp_subtitle']) ) : ?>
                        <p><?php echo $settings['fp_subtitle']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- tab details -->
                <div class="tab-details witl_gallery-tab">
                    <!-- tab items -->
                    <ul class="tab-items">
                        <?php 
						if (!empty($settings['featured_project_list']) && is_array($settings['featured_project_list'])) : 
						foreach ($settings['featured_project_list'] as $key => $item) : ?>
                        <!-- tab single item -->
                        <li>
                            <a href="#<?php echo esc_attr($item['_id'] ); ?>">
                                <span class="icon">
                                    <i class="<?php echo $item['tab_icon']['value']; ?>" aria-hidden="true"> </i>
                                </span>
                                <h3 class="tab-title"><?php echo esc_html($item['tab_title']); ?></h3>
                            </a>
                        </li>
                        <?php endforeach; 
						endif; ?>
                    </ul>
                    <!-- tab content -->
                    <div class="tab-content">
                        <?php 
						if (!empty($settings['featured_project_list']) && is_array($settings['featured_project_list'])) : 
						foreach ( $settings['featured_project_list'] as $sub_key => $item ) : ?>
                        <div id="<?php echo esc_attr( $item['_id'] ); ?>">
                            <ul class="featured-content">
                                <?php
                                if (!empty($item['tab_content_items']) && is_array($item['tab_content_items'])) : 
                                foreach($item['tab_content_items'] as $key => $tab_item) : ?>
                                <!-- single tab content -->
                                <li class="tab-card">
                                    <!-- images -->
                                    <div class="content-images">
                                        <div class="right-image">
                                            <img src="<?php echo esc_url($tab_item['right_img']['url']); ?>">
                                        </div>
                                        <div class="left-image" style="background-image: url('<?php echo esc_url($tab_item['bg_image']['url']); ?>')"> 
                                            <span class="left-image2" style="background-image: url('<?php echo esc_url($tab_item['bg_image']['url']); ?>')"> </span>
                                        </div>
                                    </div>
                                    <!-- content -->
                                    <div class="card-content">
                                        <div class="card-des-top">
                                            <?php if (isset($tab_item['content_logo']['url'])) : ?>
                                            <div class="logo">
                                                <img src="<?php echo esc_url($tab_item['content_logo']['url']); ?>" alt="logo">
                                            </div>
                                            <?php endif; ?>
                                            <div class="heading">
                                                <?php if ( ! empty($tab_item['content_title']) ) : ?>
                                                <h3><?php echo $tab_item['content_title']; ?></h3>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="card-des-bottom">
                                            <div class="description">
                                                <?php if ( ! empty($tab_item['list_content']) ) : ?>
                                                <p><?php echo $tab_item['list_content']; ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="btn">
                                                <?php if ( ! empty($tab_item['tab_button_text']) ) : 

                                                $target   = $tab_item['tab_button_link']['is_external'] ? 'target="_blank"' : '';
                                                $nofollow = $tab_item['tab_button_link']['nofollow'] ? 'rel="nofollow"' : '';
                                                $url      = $tab_item['tab_button_link']['url'] ? $tab_item['tab_button_link']['url'] : ''; ?>

                                                <a href="<?php echo esc_url($url); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?> >
                                                    <?php echo $tab_item['tab_button_text']; ?>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/down-arrow.png" alt="icon"></span>
                                                </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; 
						        endif; ?>
                            </ul>
                        </div>
                        <?php endforeach;
						endif; ?>
                    </div>
                </div> <!-- end tab -->

                <!-- portfolio testimonial -->
                <div class="portfolio-testimonial">
                    <div class="home_testimonial-slider">
                        <?php 
                        if ( ! empty($settings['witl_testimonial']) ) :
                        foreach ($settings['witl_testimonial'] as $key => $testi_item) : ?>
                        <!-- single item -->
                        <div class="slider-item">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 col-lg-3">
                                    <div class="testimonial-image">
                                        <img src="<?php echo esc_url($testi_item['person_image']['url']); ?>" alt="<?php echo esc_html($testi_item['person_img_alt']); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-8 col-lg-9">
                                    <div class="testimonial-content">
                                        <div class="quote-left">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote-icon.png" alt="double-quote">
                                        </div>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-description">
                                            <?php if ( ! empty($testi_item['testi_content']) ) : ?>
                                            <p><?php echo $testi_item['testi_content']; ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="name">
                                            <?php if ( ! empty($testi_item['tsti_name']) ) : ?>
                                            <h5 class="text-capitalize"><?php echo $testi_item['tsti_name']; ?></h5>
                                            <?php endif; ?>
                                        </div>
                                        <div class="designation">
                                            <?php if ( ! empty($testi_item['tsti_designation']) ) : ?>
                                            <p class="text-capitalize"><?php echo $testi_item['tsti_designation']; ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="quote-right">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote-icon1.png" alt="double-quote">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; 
                        endif; ?>
                    </div>
                </div>
            </div>
        </section>
  
	<?php 
		endif;
	}    
    

}
