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


class Witl_About_Mission_Vission_Details_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-about-mission-vission-details';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Mission Vission Detals', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-table-of-contents';
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
		return [ 'witl', 'mission-vission', 'details', 'mission' ];
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
			'mission_vission_detals',  //any text here (id)
			[
				'label' => esc_html__( 'Mission Vission Detals', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

		// title
		$this->add_control(
			'vission_title',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Vission Title', 'witl' ),
				'placeholder' => esc_html__( 'Vission title is here', 'witl' ),
				'label_block' => true,
				'default'     => 'vission',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		// description
		$this->add_control(
			'vission_des_one1',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Vission First Description', 'witl' ),
				'placeholder' => esc_html__( 'Vission first description is here', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
		// description
		$this->add_control(
			'vission_des_two1',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Vission Second Description', 'witl' ),
				'placeholder' => esc_html__( 'Vission second description is here', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);

		// title
		$this->add_control(
			'mission_title',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Mission Title', 'witl' ),
				'placeholder' => esc_html__( 'Mission title is here', 'witl' ),
				'label_block' => true,
				'default'     => 'Mission',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		// description
		$this->add_control(
			'mission_des_one2',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Mission First Description', 'witl' ),
				'placeholder' => esc_html__( 'Mission first description is here', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
		// description
		$this->add_control(
			'mission_des_two2',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Mission Second Description', 'witl' ),
				'placeholder' => esc_html__( 'Mission second description is here', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
		// image
		$this->add_control(
			'mission_image',
			[
				'label' => esc_html__( 'Mission/Vission Image', 'witl' ),
				'type'  => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		// image alt
		$this->add_control(
			'image_alt',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Image Alt Text', 'witl' ),
				'placeholder' => esc_html__( 'Image alt text is here', 'witl' ),
				'label_block' => true,
				'default'     => 'Mission',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        

		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['vission_title']) ) : ?>
		<!-- mission vision details -->
		<section class="mission_vission-area mission_vision-details">
			<div class="container">
				<div class="mission_vision-details">
					<div class="row">
						<!-- single mission vision -->
						<div class="col-md-12 col-lg-4">
							<div class="single-mission_vission">
								<!-- title -->
								<div class="title">
									<?php if(!empty($settings['vission_title'])) : ?>
									<h3><?php echo esc_html($settings['vission_title']); ?></h3>
									<?php endif ?>
								</div>
								<!-- first description -->
								<div class="first-description description">
									<?php if(!empty($settings['vission_des_one1'])) : ?>
									<p><?php echo $settings['vission_des_one1']; ?></p>
									<?php endif ?>
								</div>
								<!-- second description -->
								<div class="second-description description">
									<?php if(!empty($settings['vission_des_two1'])) : ?>
									<p><?php echo $settings['vission_des_two1']; ?></p>
									<?php endif ?>
								</div>
							</div>
						</div>
						<!-- single mission vision -->
						<div class="col-md-12 col-lg-4">
							<div class="single-mission_vission">
								<!-- title -->
								<div class="title">
									<?php if(!empty($settings['mission_title'])) : ?>
									<h3><?php echo esc_html($settings['mission_title']); ?></h3>
									<?php endif ?>
								</div>
								<!-- first description -->
								<div class="first-description description">
									<?php if(!empty($settings['mission_des_one2'])) : ?>
									<p><?php echo $settings['mission_des_one2']; ?></p>
									<?php endif ?>
								</div>
								<!-- second description -->
								<div class="second-description description">
									<?php if(!empty($settings['mission_des_two2'])) : ?>
									<p><?php echo $settings['mission_des_two2']; ?></p>
									<?php endif ?>
								</div>
							</div>
						</div>
						<!-- single mission vision -->
						<div class="col-md-12 col-lg-4">
							<div class="single-mission_vission">
								<div class="mission_vision-img">
									<?php if(!empty($settings['mission_image']['url'])) : ?>
									<img src="<?php echo esc_url($settings['mission_image']['url']); ?>" alt="<?php echo esc_attr($settings['image_alt']); ?>">
									<?php endif; ?>
								</div>
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
