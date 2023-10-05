<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Contact Form Details Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_Contact_Form_Details_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-contact-form-details';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Contact Form Details', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-form-horizontal';
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
		return [ 'witl', 'contact-form', 'widget', 'form' ];
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
			'contact_form',  //any text here (id)
			[
				'label' => esc_html__( 'Contact Form', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

		// title
		$this->add_control(
			'contactform_subtitle',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Subtitle', 'elementor-simple' ),
				'placeholder' => esc_html__( 'Subtitle here', 'witl' ),
				'label_block' => true,
				'default'     => 'GET IN TOUCH',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		// description
		$this->add_control(
			'contactform_title',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //textarea
				'label'		  => esc_html__( 'Title', 'witl' ),
				'placeholder' => esc_html__( 'Title here', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'Say something, we’d love to chat.', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
        // shortcode 
        $this->add_control(
            'contactform_shortcode',
            [
                'label'       => esc_html__( 'Contact Form Shortcode', 'witl' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter shortcode here', 'witl' ),
                'label_block' => true,
            ]
        );

		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();
        $form_shortcode = ! empty( $settings['contactform_shortcode'] ) ? $settings['contactform_shortcode'] : '';

		if ( ! empty($settings['contactform_title']) ) : ?>

        <section class="contact_form-area">
            <div class="container">
                <div class="contactform-subtitle">
                    <?php if(!empty($settings['contactform_subtitle'])) : ?>
                    <p class="text-uppercase"><?php echo esc_html($settings['contactform_subtitle']); ?> <span class="dot"></span></p>
                    <?php endif; ?>
                </div>
                <div class="contactform-title">
                    <?php if(!empty($settings['contactform_title'])) : ?>
                    <h2><?php echo $settings['contactform_title']; ?></h2>
                    <?php endif; ?>
                </div>
                <!-- contact form -->
                <div class="contact-form">
                    <?php echo do_shortcode( $form_shortcode ); ?>
                </div>
            </div>
        </section>

	<?php 
		endif;
	}


}
