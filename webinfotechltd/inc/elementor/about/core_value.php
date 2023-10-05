<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Core Value Details Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_Core_Value_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-core-value';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Core Value Details', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-post-slider';
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
		return [ 'witl', 'core-value', 'slider' ];
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
			'core-value',  //any text here (id)
			[
				'label' => esc_html__( 'Core Value Details', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // title
        $this->add_control(
			'core_title',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Section Title', 'witl' ),
				'placeholder' => esc_html__( 'Enter title here', 'witl' ),
				'label_block' => true,
				'default'     => 'Core Value',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);

        // description
        $this->add_control(
			'core_description',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Short Description', 'witl' ),
				'placeholder' => esc_html__( 'Enter description', 'witl' ),
				'default'     => esc_html__( 'We are able to help you with the latest high tech solutions, thanks to our company culture, which is built an everyday learning and self - improvement from each and single task.', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);

        // repeater
		$this->add_control(
			'core-slider',
			[
				'label'  => esc_html__( 'Core Value Slider Items', 'witl' ),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'slider_title',
						'label'       => esc_html__( 'Title', 'witl' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'List Title' , 'witl' ),
						'label_block' => true,
					],
					[
						'name' 		 => 'slider_content',
						'label' 	 => esc_html__( 'Content', 'witl' ),
						'type'		 => \Elementor\Controls_Manager::TEXTAREA,
						'default' 	 => esc_html__( 'List Content' , 'witl' ),
						'show_label' => false,
					],
				],
				'default' => [
					[
						'slider_title'   => esc_html__( 'Title #1', 'witl' ),
					],
				],
				'title_field' => '{{{ slider_title }}}',
			]
		);

		
        

		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['core_title']) ) : ?>

		<section class="core_value-area">
            <div class="container">
                <!-- section title, description -->
                <div class="section-title_des">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="section-title">
                                <?php if ( ! empty($settings['core_title']) ) : ?>
                                <h2 class="text-capitalize"><?php echo esc_html($settings['core_title']) ?></h2>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section-des">
                                <?php if ( ! empty($settings['core_description']) ) : ?>
                                <p><?php echo esc_html($settings['core_description']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- core value slider -->
                <div class="core_value-slider_area">
                    <ul class="core_value-slider">
                        <?php if ( ! empty($settings['core-slider']) ) : ?>
                            <?php foreach (  $settings['core-slider'] as $item ) : ?>
                            <!-- single slider -->
                            <li class="single-slider">
                                <div class="title">
                                    <h5><?php echo esc_html( $item['slider_title'] ); ?></h5>
                                </div>
                                <div class="content">
                                    <p><?php echo $item['slider_content']; ?></p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </section>
  
	<?php 
		endif;
	}

	
    

}
