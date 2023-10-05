<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Service Section Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_Service_Section_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-service-section';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'WITL Service Section', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-kit-parts';
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
		return [ 'witl', 'witl-service', 'service-section', 'service' ];
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
			'service-section',  //any text here (id)
			[
				'label' => esc_html__( 'WITL Services', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // title
        $this->add_control(
			'section_title',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Section Title', 'witl' ),
				'placeholder' => esc_html__( 'Enter title here', 'witl' ),
				'label_block' => true,
				'default'     => 'Full-Service Digital Marketing',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // description
        $this->add_control(
			'section_des',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Description', 'witl' ),
				'placeholder' => esc_html__( 'Enter description', 'witl' ),
				'default'     => esc_html__( 'Experience the unstoppable team and technology to reflect your ROI.', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
        // default image
		$this->add_control(
			'default_image',
			[
				'label' => esc_html__( 'Service BG Default Image', 'witl' ),
				'type'  => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        // alt text
        $this->add_control(
			'default_image_alt',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Default Image Alt Text', 'witl' ),
				'placeholder' => esc_html__( 'Alt text here', 'witl' ),
				'label_block' => true,
				'default'     => 'service-image',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);

        // repeater
		$this->add_control(
			'service-details',
			[
				'label'  => esc_html__( 'Service Details', 'witl' ),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'service_count',
						'label'       => esc_html__( 'Service Number', 'witl' ),
						'type' 		  => \Elementor\Controls_Manager::NUMBER,
						'default' 	  => esc_html__( '01' , 'witl' ),
					],
                    [
                        'name'        => 'service_title',
                        'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
                        'label'		  => esc_html__( 'Service Title', 'witl' ),
                        'placeholder' => esc_html__( 'Enter title here', 'witl' ),
                        'label_block' => true,
                        'default'     => 'Digital Marketing',
                        'dynamic'     => [
                            'active'  => true,  //for dynamic tag option
                        ],
                    ],
                    [
                        'name'        => 'service_bgimage',
                        'label'       => esc_html__( 'Service BG Default Image', 'witl' ),
                        'type'        => \Elementor\Controls_Manager::MEDIA,
                        'default'     => [
                            'url'     => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'name'        => 'service_list1',
                        'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
                        'label'		  => esc_html__( 'Service Number One', 'witl' ),
                        'placeholder' => esc_html__( 'Service number one', 'witl' ),
                        'label_block' => true,
                        'default'     => 'web design',
                        'dynamic'     => [
                            'active'  => true,  //for dynamic tag option
                        ],
                    ],
                    [
                        'name'        => 'service_list2',
                        'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
                        'label'		  => esc_html__( 'Service Number Two', 'witl' ),
                        'placeholder' => esc_html__( 'Service number two', 'witl' ),
                        'label_block' => true,
                        'default'     => 'web development',
                        'dynamic'     => [
                            'active'  => true,  //for dynamic tag option
                        ],
                    ],
                    [
                        'name'        => 'service_list3',
                        'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
                        'label'		  => esc_html__( 'Service Number Three', 'witl' ),
                        'placeholder' => esc_html__( 'Service number three', 'witl' ),
                        'label_block' => true,
                        'default'     => 'website security',
                        'dynamic'     => [
                            'active'  => true,  //for dynamic tag option
                        ],
                    ],
                    [
                        'name'        => 'service_list4',
                        'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
                        'label'		  => esc_html__( 'Service Number Four', 'witl' ),
                        'placeholder' => esc_html__( 'Service number four', 'witl' ),
                        'label_block' => true,
                        'default'     => 'website management',
                        'dynamic'     => [
                            'active'  => true,  //for dynamic tag option
                        ],
                    ],
                    [
                        'name'        => 'service_list5',
                        'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
                        'label'		  => esc_html__( 'Service Number Five', 'witl' ),
                        'placeholder' => esc_html__( 'Service number five', 'witl' ),
                        'label_block' => true,
                        'default'     => 'ecommerce website',
                        'dynamic'     => [
                            'active'  => true,  //for dynamic tag option
                        ],
                    ],
                    [
                        'name'        => 'button_text',
                        'label'		  => esc_html__( 'Button Text', 'witl' ),
                        'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
                        'placeholder' => esc_html__( 'Button text', 'witl' ),
                        'label_block' => true,
                        'default'     => 'view service',
                        'dynamic'     => [
                            'active'  => true,  //for dynamic tag option
                        ],
                    ],
                    [
                        'name'        => 'button_link',
                        'label'		  => esc_html__( 'Button link', 'witl' ),
                        'type' 		  => \Elementor\Controls_Manager::URL,  //url
                        'placeholder' => esc_html__( 'Link here', 'witl' ),
                        'options'     => [ 'url', 'is_external', 'nofollow' ],
                        'label_block' => true,
                        'default'     => [
                            'url'         => '',
                            'is_external' => false,
                            'nofollow'    => false,
                        ],
                    ],
				],
				'default' => [
					[
						'service_title'   => esc_html__( 'Team #1', 'witl' ),
					],
				],
				'title_field' => '{{{ service_title }}}',
			]
		);

   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['service-details']) ) : ?>

        <section class="service-area" id="go-service-section">
            <!-- service title -->
            <div class="service-title_content">
                <div class="container">
                    <div class="service-title text-center">
                        <?php if(!empty($settings['section_title'])) : ?>
                        <h2><?php echo $settings['section_title']; ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="service-description text-center">
                        <?php if(!empty($settings['section_des'])) : ?>
                        <p><?php echo esc_html($settings['section_des']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- service items for desktop -->
            <div class="service-items d-none d-md-block">
                <div class="our-services">
                    <!-- bg image -->
                    <div class="bg-image">
                        <?php if(!empty($settings['default_image']['url'])) : ?>
                        <img src="<?php echo esc_url($settings['default_image']['url']); ?>" alt="<?php echo esc_attr($settings['default_image_alt']); ?>" >
                        <?php endif; ?>
                    </div>
                    <!-- service details -->
                    <div class="service-details">
                        <?php if ( !empty($settings['service-details']) && is_array($settings['service-details']) ) : 
                            foreach (  $settings['service-details'] as $item ) : ?>
                            <!-- single service -->
                            <div class="single-service">
                                <div class="single-service-content">
                                    <div class="service-top-content">
                                        <!-- service title -->
                                        <div class="single-service-title">
                                            <?php if (!empty($item['service_title'])) : ?>
                                            <h4>
                                                <span class="count"><?php echo sprintf('%02d', esc_html($item['service_count'])); ?></span>
                                                <span class="title"><?php echo $item['service_title']; ?></span>
                                            </h4>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="service-bottom-content">
                                        <!-- service description -->
                                        <ul class="service-list list-group list-group-numbered">
                                            <?php if (!empty($item['service_list1'])) : ?>
                                            <li class="list-group-item"><a href="#"><?php echo esc_html($item['service_list1']); ?></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($item['service_list2'])) : ?>
                                            <li class="list-group-item"><a href="#"><?php echo esc_html($item['service_list2']); ?></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($item['service_list3'])) : ?>
                                            <li class="list-group-item"><a href="#"><?php echo esc_html($item['service_list3']); ?></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($item['service_list4'])) : ?>
                                            <li class="list-group-item"><a href="#"><?php echo esc_html($item['service_list4']); ?></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($item['service_list5'])) : ?>
                                            <li class="list-group-item"><a href="#"><?php echo esc_html($item['service_list5']); ?></a></li>
                                            <?php endif; ?>
                                        </ul>
                                        <!-- btn -->
                                        <div class="service-btn">
                                            <?php if ( ! empty($item['button_text']) ) : 
                        
                                            $target   = $item['button_link']['is_external'] ? 'target="_blank"' : '';
                                            $nofollow = $item['button_link']['nofollow'] ? 'rel="nofollow"' : '';
                                            $url      = $item['button_link']['url'] ? $item['button_link']['url'] : ''; ?>

                                            <a href="<?php echo esc_url($url); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?> > <?php echo $item['button_text']; ?> 
                                                <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/down-arrow.png" alt="right arrow icon"></span>
                                            </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php 
                            endforeach;
                        endif; ?>
                    </div>
                </div>
            </div>
            <!-- service items for mobile -->
            <div class="service_items-mobile d-md-none">
                <div class="container">
                    <div class="mobile-our_service">
                        <div class="accordion" id="accordionExample">
                        <?php if ( $settings['service-details'] ) : 
                            foreach (  $settings['service-details'] as $item ) : ?>
                            <!-- single item -->
                            <div class="accordion-item item-first" style="background-image: url('<?php echo esc_url($item['service_bgimage']['url']); ?>');">
                                <h2 class="accordion-header">
                                    <?php if (!empty($item['service_title'])) : ?>
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($item['_id'] ); ?>" aria-expanded="true">
                                    <?php echo esc_html($item['service_count']); ?> 
                                    <?php echo esc_html($item['service_title']); ?>
                                    </button>
                                    <?php endif; ?>
                                </h2>
                                <div id="<?php echo esc_attr($item['_id'] ); ?>" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="items list-group list-group-numbered">
                                        <?php if (!empty($item['service_list1'])) : ?>
                                            <li class="list-group-item"><a href="#"><?php echo esc_html($item['service_list1']); ?></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($item['service_list2'])) : ?>
                                            <li class="list-group-item"><a href="#"><?php echo esc_html($item['service_list2']); ?></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($item['service_list3'])) : ?>
                                            <li class="list-group-item"><a href="#"><?php echo esc_html($item['service_list3']); ?></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($item['service_list4'])) : ?>
                                            <li class="list-group-item"><a href="#"><?php echo esc_html($item['service_list4']); ?></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($item['service_list5'])) : ?>
                                            <li class="list-group-item"><a href="#"><?php echo esc_html($item['service_list5']); ?></a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php 
                            endforeach;
                        endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  
	<?php 
		endif;
	}
    

}
