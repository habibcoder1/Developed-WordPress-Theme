<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * About us CTA Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_About_Cta_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-aboutus-cta';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'About us CTA', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-call-to-action';
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
		return [ 'witl', 'calltoaction', 'cta' ];
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
			'aboutus-cta',  //any text here (id)
			[
				'label' => esc_html__( 'About Us CTA', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // title
        $this->add_responsive_control(
			'aboutcta_title',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'CTA Title', 'witl' ),
				'placeholder' => esc_html__( 'Enter title here', 'witl' ),
				'label_block' => true,
				'default'     => 'Our Promise Magnificent Design With Us',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);

        // description
        $this->add_responsive_control(
			'aboutcta_des',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Description', 'witl' ),
				'placeholder' => esc_html__( 'Enter description', 'witl' ),
				'default'     => esc_html__( 'We will deliver detailed every pixel that you want', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);

        // button
        $this->add_responsive_control(
			'aboutcta_btntxt',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Button Text', 'witl' ),
				'placeholder' => esc_html__( 'Button text', 'witl' ),
				'label_block' => true,
				'default'     => 'let\'s talk',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // url
		$this->add_responsive_control(
			'button-link',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::URL,  //url
				'label'		  => esc_html__( 'Button link', 'witl' ),
				'placeholder' => esc_html__( 'Link here', 'witl' ),
				'options'     => [ 'url', 'is_external', 'nofollow' ],
				'label_block' => true,
				'default'     => [
					'url'         => '',
					'is_external' => false,
					'nofollow'    => false,
				],
			]
		);

		
        

		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['aboutcta_title']) ) : ?>

        <section class="our_promise-area">
            <div class="container">
                <!-- all icons -->
                <div class="top_right-icon capsule-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capsule-icon.png" alt="capsule-icon">
                </div>
                <div class="bottom_left-icon capsule-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capsule-icon.png" alt="capsule-icon">
                </div>
                <div class="bottom_right-icon capsule-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capsule-icon.png" alt="capsule-icon">
                </div>
                <!-- title -->
                <div class="promise-title">
                    <?php if ( ! empty($settings['aboutcta_title']) ) : ?>
                    <h2 class="text-capitalize"><?php echo $settings['aboutcta_title']; ?></h2>
                    <?php endif; ?>
                </div>
                <!-- description -->
                <div class="description">
                    <?php if ( ! empty($settings['aboutcta_des']) ) : ?>
                    <p><?php echo $settings['aboutcta_des']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="button">
                    <?php if ( ! empty($settings['aboutcta_btntxt']) ) : 
                    
                    $target   = $settings['button-link']['is_external'] ? 'target="_blank"' : '';
                    $nofollow = $settings['button-link']['nofollow'] ? 'rel="nofollow"' : '';
                    $url      = $settings['button-link']['url'] ? $settings['button-link']['url'] : '';
                        ?>
                    <a href="<?php echo esc_url($url); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?> class="witlSecondaryBtn"><?php echo $settings['aboutcta_btntxt']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
  
	<?php 
		endif;
	}
    

}
