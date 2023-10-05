<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Marketing Module Section Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_Marketing_Module_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-marketing-module';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Marketing Module', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return ' eicon-tabs';
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
		return [ 'witl', 'marketing-module', 'marketing', 'module' ];
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
			'marketing-module',  //any text here (id)
			[
				'label' => esc_html__( 'Marketing Module Details', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // title
        $this->add_control(
			'mm_section_title',  //any text here (id)
			[
                'label'		  => esc_html__( 'Section Title', 'witl' ),
				'placeholder' => esc_html__( 'Enter title here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => 'WITL Marketing Module',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // description
        $this->add_control(
			'mm_section_des',  //any text here (id)
			[
                'label'		  => esc_html__( 'Description', 'witl' ),
				'placeholder' => esc_html__( 'Enter description', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'default'     => esc_html__( 'Your Journey To Grow Beyond Digital', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
        
        // repeater
		$this->add_control(
			'marketing_module_tab',
			[
				'label'  => esc_html__( 'Marketing Module Tab', 'witl' ),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
                    // tab item
					[
						'name'        => 'tab_item',
						'label'       => esc_html__( 'Tab Item Text', 'witl' ),
                        'placeholder' => esc_html__( 'Enter tab text here', 'witl' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'strategy' , 'witl' ),
                        'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  
                        ],
					],
                    // subtitle
                    [
                        'name'        => 'tab_content_subtitle',
                        'label'       => esc_html__( 'Tab Content Subtitle', 'witl' ),
                        'placeholder' => esc_html__( 'Tab content subtitle here', 'witl' ),
                        'type' 		  => \Elementor\Controls_Manager::TEXT,
                        'default' 	  => esc_html__( 'applied' , 'witl' ),
                        'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  
                        ],
                    ],
                    // title
                    [
                        'name'        => 'tab_title',
                        'label'       => esc_html__( 'Tab Content Title', 'witl' ),
                        'placeholder' => esc_html__( 'Tab content title here', 'witl' ),
                        'type' 		  => \Elementor\Controls_Manager::TEXT,
                        'default' 	  => esc_html__( 'results' , 'witl' ),
                        'label_block' => true,
                        'dynamic'     => [
                            'active'  => true,  
                        ],
                    ],
                    // tab content
                    [
                        'name'        => 'tab_description',
                        'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
                        'label'		  => esc_html__( 'Tab Description', 'witl' ),
                        'placeholder' => esc_html__( 'Enter description', 'witl' ),
                        'default'     => esc_html__( 'We focus on the strategy first. Before we begin, we define your strategy.  Then all the way down we follow almost the same strategy except for minor changes.', 'witl' ),
                        'dynamic'     => [
                            'active'  => true,  //for dynamic tag
                        ],
                    ],
                    // image
                    [
                        'name' => 'tab_content_img',
                        'label' => esc_html__( 'Tab Content Image', 'witl' ),
                        'type'  => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                    // alt text
                    [
                        'name' => 'tab_contentimg_alt',
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
						'list_title'   => esc_html__( 'Module #1', 'witl' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);

   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['marketing_module_tab']) ) : ?>

        <section class="service_module-area">
            <div class="container">
                <!-- section title -->
                <div class="section-title text-center">
                    <?php if(!empty($settings['mm_section_title'])) : ?>
                    <h2><?php echo $settings['mm_section_title']; ?></h2>
                    <?php endif; ?>
                </div>
                <!-- seciton description -->
                <div class="section_short-des text-center">
                    <?php if(!empty($settings['mm_section_des'])) : ?>
                    <p><?php echo esc_html($settings['mm_section_des']); ?></p>
                    <?php endif; ?>
                </div>
                <!-- round icons -->
                <div class="left-round_icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/round-darkblue.png" alt="round-icon">
                </div>
                <div class="right-round_icon">   </div>
                <div class="service_module-details">
                    <div class="service_module-tab">
                        <ul class="tab-items">
                            <?php foreach (  $settings['marketing_module_tab'] as $key => $item ) : ?>
                            <li><a href="#<?php echo esc_attr($item['_id'] ); ?>"><?php echo $item['tab_item']; ?></a></li>
                            <?php
                            endforeach; ?>
                        </ul>
                        <div class="single_module-details">
                            <?php
                            if (!empty($settings['marketing_module_tab']) && is_array($settings['marketing_module_tab'])) : 
                            foreach (  $settings['marketing_module_tab'] as $sub_key => $item ) : ?>
                            <!-- strategy -->
                            <div id="<?php echo esc_attr($item['_id'] ); ?>" class="single-module">
                                <div class="module-contents">
                                    <!-- subtitle -->
                                    <div class="subtitle">
                                        <h5><?php echo $item['tab_content_subtitle']; ?></h5>
                                    </div>
                                    <!-- title -->
                                    <div class="title">
                                        <h3><?php echo $item['tab_title']; ?></h3>
                                    </div>
                                    <div class="content">
                                        <p><?php echo $item['tab_description']; ?></p>
                                    </div>
                                </div>
                                <!-- module image -->
                                <div class="module-img">
                                    <img src="<?php echo esc_url($item['tab_content_img']['url']); ?>" alt="<?php echo esc_attr($item['tab_contentimg_alt']); ?>">
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
