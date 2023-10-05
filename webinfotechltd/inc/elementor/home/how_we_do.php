<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * How We Do Section Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_Howwedo_Section_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-how-we-do';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Work Steps', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-filter';
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
		return [ 'witl', 'how-we-do', 'howwedo', 'work-steps' ];
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
			'how-wedo',  //any text here (id)
			[
				'label' => esc_html__( 'Working Steps', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // title
        $this->add_control(
			'ws_section_title',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Section Title', 'witl' ),
				'placeholder' => esc_html__( 'Enter title here', 'witl' ),
				'label_block' => true,
				'default'     => 'How We Do What We Do Best',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // description
        $this->add_control(
			'ws_section_des',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Description', 'witl' ),
				'placeholder' => esc_html__( 'Enter description', 'witl' ),
				'default'     => esc_html__( 'Your Journey To Grow Beyond Digital', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
        
        // repeater
		$this->add_control(
			'working_step_tab',
			[
				'label'  => esc_html__( 'Work Step Details', 'witl' ),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'tab_title',
						'label'       => esc_html__( 'Tab Item Text', 'witl' ),
                        'placeholder' => esc_html__( 'Enter tab text here', 'witl' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'requirement analysis' , 'witl' ),
                        'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  
                        ],
					],
                    [
                        'name'    => 'tab_icon',
                        'label'   => esc_html__( 'Choose Icons', 'witl' ),
                        'type'    => \Elementor\Controls_Manager::ICONS,
                        'default' => [
                            'value'   => 'fa fa-star',
							'library' => 'fa-solid',
                        ],
                    ],
                    // content title
                    [
                        'name'        => 'tab_content_title',
                        'label'       => esc_html__( 'Tab Content Title', 'witl' ),
                        'placeholder' => esc_html__( 'Tab content title here', 'witl' ),
                        'type' 		  => \Elementor\Controls_Manager::TEXT,
                        'default' 	  => esc_html__( 'Project Planning' , 'witl' ),
                        'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  
                        ],
                    ],
                    // tab content
                    [
                        'name'        => 'content_description',
                        'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
                        'label'		  => esc_html__( 'Description', 'witl' ),
                        'placeholder' => esc_html__( 'Enter description', 'witl' ),
                        'default'     => esc_html__( 'Define the ultimate needs of your business.  Tell us exactly what you want and how you want it.  No matter how big or hard your concerns are, always be open to sharing with the team to meet your end result needs.', 'witl' ),
                        'dynamic'     => [
                            'active'  => true,  //for dynamic tag
                        ],
                    ],
                    // step text
                    [
                        'name'        => 'tab_step_text',
                        'label'       => esc_html__( 'Tab Step Text', 'witl' ),
                        'placeholder' => esc_html__( 'Tab step text here', 'witl' ),
                        'type' 		  => \Elementor\Controls_Manager::TEXT,
                        'default' 	  => esc_html__( 'In There Phase, We:' , 'witl' ),
                        'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  
                        ],
                    ],
                    // step one
                    [
                        'name'        => 'tab_step1',
                        'label'       => esc_html__( 'Step Number One', 'witl' ),
                        'placeholder' => esc_html__( 'Tab step one text here', 'witl' ),
                        'type' 		  => \Elementor\Controls_Manager::TEXT,
                        'default' 	  => esc_html__( 'Work step one' , 'witl' ),
                        'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  
                        ],
                    ],
                    // step two
                    [
                        'name'        => 'tab_step2',
                        'label'       => esc_html__( 'Step Number Two', 'witl' ),
                        'placeholder' => esc_html__( 'Tab step two text here', 'witl' ),
                        'type' 		  => \Elementor\Controls_Manager::TEXT,
                        'default' 	  => esc_html__( 'Work step two' , 'witl' ),
                        'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  
                        ],
                    ],
                    // step three
                    [
                        'name'        => 'tab_step3',
                        'label'       => esc_html__( 'Step Number Three', 'witl' ),
                        'placeholder' => esc_html__( 'Tab step three text here', 'witl' ),
                        'type' 		  => \Elementor\Controls_Manager::TEXT,
                        'default' 	  => esc_html__( 'Work step three' , 'witl' ),
                        'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  
                        ],
                    ],
                    // step three
                    [
                        'name'        => 'tab_step4',
                        'label'       => esc_html__( 'Step Number Four', 'witl' ),
                        'placeholder' => esc_html__( 'Tab step four text here', 'witl' ),
                        'type' 		  => \Elementor\Controls_Manager::TEXT,
                        'default' 	  => esc_html__( 'Work step four' , 'witl' ),
                        'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  
                        ],
                    ],
                    // step three
                    [
                        'name'        => 'tab_step5',
                        'label'       => esc_html__( 'Step Number Five', 'witl' ),
                        'placeholder' => esc_html__( 'Tab step five text here', 'witl' ),
                        'type' 		  => \Elementor\Controls_Manager::TEXT,
                        'default' 	  => esc_html__( 'Work step five' , 'witl' ),
                        'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  
                        ],
                    ],
                    // button text
                    [
                        'name' => 'tab_button_text',
                        'label' => esc_html__( 'Button Text', 'witl' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'Download', 'witl' ),
                        'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  
                        ],
                    ],
                    // button link
                    [
                        'name' => 'tab_button_link',
                        'label' => esc_html__( 'Button Link', 'witl' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'label_block' => true,
                        'default' => [
                            'url' => esc_url('#'),
                        ],
                    ],
                    // image
                    [
                        'name' => 'tab_big_img',
                        'label' => esc_html__( 'Tab Content Image', 'witl' ),
                        'type'  => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                    // alt text
                    [
                        'name' => 'tab_img_alt',
                        'label' => esc_html__( 'Image Alt Text', 'witl' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_attr( 'witl-image' ),
                        'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  
                        ],
                    ],
                    
				],
				'default' => [
					[
						'list_title'   => esc_html__( 'Team #1', 'witl' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);

   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['working_step_tab']) ) : ?>

        <section class="worksteps-area">
            <div class="container">
                <!-- title -->
                <div class="worksteps-title text-center">
                    <?php if(!empty($settings['ws_section_title'])) : ?>
                    <h2 class="text-capitalize"><?php echo $settings['ws_section_title']; ?></h2>
                    <?php endif; ?>
                </div>
                <!-- subtitle -->
                <div class="worksteps-subtitle text-center">
                    <?php if(!empty($settings['ws_section_des'])) : ?>
                    <p class="text-capitalize"><?php echo esc_html($settings['ws_section_des']); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <!-- line -->
            <div class="line"></div>
            <div class="container">
                <!-- steps -->
                <div class="worksteps-details">
                    <div class="work_steps-tab witl_jumper-container">
                        <!-- tab items -->
                        <ul class="tab-items worksteps-tabitems swiper witl-nav_jumper">
                            <!-- jumper animation -->
                            <div class="witl-jumper"></div>
                            <!-- swiper wrap -->
                            <div class="swiper-wrapper">
                                    <?php foreach (  $settings['working_step_tab'] as $key => $item ) : ?>
                                    <!-- single items -->
                                    <li class="swiper-slide">
                                        <?php if (! empty($item['tab_icon']['value'] )) : ?>
                                        <div class="content">
                                            <?php if ( ! empty($item['tab_title']) ) : ?>
                                            <h6><?php echo $item['tab_title']; ?></h6>
                                            <?php endif; ?>
                                        </div>
                                        <div class="icon-box">
                                            <div class="icon">
                                                <i class="<?php echo $item['tab_icon']['value']; ?>" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </li>
                                <?php
                                endforeach; ?>
                            </div>
                            <!-- next prev icon -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </ul>
                        <!-- tab item contents ///// -->
                        <div class="workstepstab-contents swiper">
                            <div class="swiper-wrapper">
                                <?php
                                if (!empty($settings['working_step_tab']) && is_array($settings['working_step_tab'])) : 
                                foreach (  $settings['working_step_tab'] as $sub_key => $item ) : ?>
                                    <!-- requirement -->
                                    <div id="<?php echo esc_attr($item['_id'] ); ?>" class="worksteps-tab_content swiper-slide">
                                        <div class="row align-items-center">
                                            <!-- left side -->
                                            <div class="col-md-6">
                                                <div class="steps-content">
                                                    <div class="title">
                                                        <h3 class="text-capitalize"><?php echo esc_html($item['tab_content_title']); ?></h3>
                                                    </div>
                                                    <div class="description">
                                                        <?php if ( ! empty($item['content_description']) ) : ?>
                                                        <p><?php echo $item['content_description']; ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                    <!-- list items -->
                                                    <ul class="steps-items">
                                                        <?php if ( ! empty($item['tab_step_text']) ) : ?>
                                                        <p class="text-capitalize list-title"><?php echo $item['tab_step_text']; ?></p>
                                                        <?php endif; ?>
                                                        <?php if ( ! empty($item['tab_step1']) ) : ?>
                                                        <li>
                                                            <div class="icon"><i class="fa-solid fa-location-arrow"></i></div>
                                                            <p><?php echo $item['tab_step1']; ?></p>
                                                        </li>
                                                        <?php endif; 
                                                        if ( ! empty($item['tab_step2']) ) : ?>
                                                        <li>
                                                            <div class="icon"><i class="fa-solid fa-location-arrow"></i></div>
                                                            <p><?php echo $item['tab_step2']; ?></p>
                                                        </li>
                                                        <?php endif; 
                                                        if ( ! empty($item['tab_step3']) ) : ?>
                                                        <li>
                                                            <div class="icon"><i class="fa-solid fa-location-arrow"></i></div>
                                                            <p><?php echo $item['tab_step3']; ?></p>
                                                        </li>
                                                        <?php endif; 
                                                        if ( ! empty($item['tab_step4']) ) : ?>
                                                        <li>
                                                            <div class="icon"><i class="fa-solid fa-location-arrow"></i></div>
                                                            <p><?php echo $item['tab_step4']; ?></p>
                                                        </li>
                                                        <?php endif;
                                                        if ( ! empty($item['tab_step5']) ) : ?>
                                                        <li>
                                                            <div class="icon"><i class="fa-solid fa-location-arrow"></i></div>
                                                            <p><?php echo $item['tab_step5']; ?></p>
                                                        </li>
                                                        <?php endif; ?>
                                                    </ul>
                                                    <!-- btn -->
                                                    <div class="download-btn">
                                                        <?php if ( ! empty($item['tab_button_text']) ) :
                                                        $nofollow = $item['tab_button_link']['nofollow'] ? 'rel="nofollow"' : '';
                                                        $url      = $item['tab_button_link']['url'] ? $item['tab_button_link']['url'] : ''; ?>

                                                        <a href="<?php echo esc_url($url); ?>" class="witlPrimaryBtn" <?php echo esc_attr($nofollow); ?> download>
                                                            <i class="fa-solid fa-arrow-down-long"></i>
                                                            <span><?php echo $item['tab_button_text']; ?></span>
                                                        </a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- right side -->
                                            <div class="col-md-6">
                                                <?php if ( ! empty($item['tab_big_img']['url']) ) : ?>
                                                <div class="step-image">
                                                    <img src="<?php echo esc_url( $item['tab_big_img']['url'] ); ?>" alt="<?php echo esc_attr( $item['tab_img_alt']); ?>">
                                                </div>
                                                <?php endif; ?>
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
            </div>
        </section>
  
	<?php 
		endif;
	}
    

}
