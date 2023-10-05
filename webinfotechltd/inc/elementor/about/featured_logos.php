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


class Witl_Featured_Logos_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-featured-logos';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Featured Logos', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-slider-album';
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
		return [ 'witl', 'featured-slider', 'slider', 'featured-logos' ];
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
			'featured-logos',  //any text here (id)
			[
				'label' => esc_html__( 'Featured Logos', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

		// gallery
		$this->add_control(
			'featured_slider',
			[
				'label' => esc_html__( 'Featured Logos', 'witl' ),
				'type'  => \Elementor\Controls_Manager::GALLERY,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'dynamic' =>[
					'active' => true,  //for dynamic tag option
				],
			]
		);
        

		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['featured_slider']) ) : ?>
		
        <!-- featured logos -->
        <section class="service_featured-area">
            <div class="container">
                <div class="featured-logos">
                    <ul class="featued-slider">
                        <?php foreach ( $settings['featured_slider'] as $image ) : ?>
                        <li><img src="<?php echo esc_url( $image['url'] ) ?>" alt="featured-logo"></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>
        

	<?php 
		endif;
	}


}
