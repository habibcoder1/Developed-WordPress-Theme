<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Contact Page Heading Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_Contact_Page_Heading_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-page-heading';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'WITL Page Heading', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-header';
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
		return [ 'witl', 'page-heading', 'widget' ];
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
			'page_heading',  //any text here (id)
			[
				'label' => esc_html__( 'Page Heading', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

		// title
		$this->add_control(
			'page_title',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Title', 'elementor-simple' ),
				'placeholder' => esc_html__( 'Enter page title here', 'witl' ),
				'label_block' => true,
				'default'     => 'Contact Us',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		// description
		$this->add_control(
			'page_description',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Description', 'witl' ),
				'placeholder' => esc_html__( 'Enter description', 'witl' ),
				'default'     => esc_html__( 'You can monitor and manage your business with the platform we will provide', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);

		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();
		if ( ! empty($settings['page_title']) ) : ?>

		<section class="page-heading contactus-pageheading text-center text-white">
			<div class="container">
				<!-- icons -->
				<div class="top-left_icon capsule-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/capsule-icon.png" alt="capsule-icon">
				</div>
				<div class="top-right_icon capsule-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/capsule-icon.png" alt="capsule-icon">
				</div>
				<!-- page heading details -->
				<div class="page-title">
					<?php if(!empty($settings['page_title'])) : ?>
					<h2 class="text-capitalize"><?php echo esc_html($settings['page_title']); ?></h2>
					<?php endif; ?>
				</div>
				<div class="page-short_des">
					<?php if(!empty($settings['page_description'])) : ?>
					<p><?php echo esc_html($settings['page_description']); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</section>

	<?php 
		endif;
	}


}
