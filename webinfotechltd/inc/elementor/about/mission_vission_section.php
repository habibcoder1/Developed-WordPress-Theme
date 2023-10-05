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


class Witl_About_Mission_Vission_Section_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-about-mission-vission-section';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Mission Vission Section', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-section';
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
		return [ 'witl', 'mission-vission', 'mission', 'vission' ];
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
			'mission_vission_section',  //any text here (id)
			[
				'label' => esc_html__( 'Mission Vission Section', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

		// title
		$this->add_control(
			'section_title_one',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Title First Line', 'witl' ),
				'placeholder' => esc_html__( 'Title first line here', 'witl' ),
				'label_block' => true,
				'default'     => 'Wake Up Digitally',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		// title
		$this->add_control(
			'section_title_two',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Title Second Line', 'witl' ),
				'placeholder' => esc_html__( 'Title second line here', 'witl' ),
				'label_block' => true,
				'default'     => 'Win With WITL.',
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
				'label'		  => esc_html__( 'Section Description', 'witl' ),
				'placeholder' => esc_html__( 'Section description here', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'Web Info Tech is packed with passion-driven tech soldiers to win the race in digital marketing. We will also facilitate the business marketing of these products with our SEO experts so that they become a ready-to-use website and help sell a product from the company. help sell a product from the company.', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);

        // icon
        $this->add_control(
			'icon_one',
			[
				'label'   => esc_html__( 'Choose Icons', 'witl' ),
				'type'    => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value'   => 'fa-square-check',
					'library' => 'fa-regular',
				],
			]
		);
		// title
		$this->add_control(
			'title_one',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Title', 'witl' ),
				'placeholder' => esc_html__( 'Title is here', 'witl' ),
				'label_block' => true,
				'default'     => 'you',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		
		// description
		$this->add_control(
			'description_one',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Description', 'witl' ),
				'placeholder' => esc_html__( 'description is here', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'Leverage agile frameworks to provide a robust synopsis for high level overviews.', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);

        // icon
        $this->add_control(
			'icon_two',
			[
				'label'   => esc_html__( 'Choose Icons', 'witl' ),
				'type'    => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value'   => 'fa-arrow-trend-up',
					'library' => 'fa-solid',
				],
			]
		);
		// title
		$this->add_control(
			'title_two',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Title', 'witl' ),
				'placeholder' => esc_html__( 'Title is here', 'witl' ),
				'label_block' => true,
				'default'     => 'us',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		
		// description
		$this->add_control(
			'description_two',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Description', 'witl' ),
				'placeholder' => esc_html__( 'description is here', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'Leverage agile frameworks to provide a robust synopsis for high level overviews.', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);

        // icon
        $this->add_control(
			'icon_three',
			[
				'label'   => esc_html__( 'Choose Icons', 'witl' ),
				'type'    => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value'   => 'fa-heart',
					'library' => 'fa-regular',
				],
			]
		);
		// title
		$this->add_control(
			'title_three',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Title', 'witl' ),
				'placeholder' => esc_html__( 'Title is here', 'witl' ),
				'label_block' => true,
				'default'     => 'together',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		
		// description
		$this->add_control(
			'description_three',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Description', 'witl' ),
				'placeholder' => esc_html__( 'description is here', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'Leverage agile frameworks to provide a robust synopsis for high level overviews.', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);

		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['section_title_one']) ) : ?>

        <section class="mission_vission-area">
            <div class="container">
                <!-- title and description -->
                <div class="section-details">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="title">
                                <?php if(!empty($settings['section_title_one'])) : ?>
                                <h2 class="text-capitalize"><?php echo esc_html($settings['section_title_one']); ?> </h2>
                                <?php endif; ?>
                                <?php if(!empty($settings['section_title_two'])) : ?>
                                <h2 class="text-capitalize"><?php echo $settings['section_title_two']; ?> </h2>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="description">
                                <?php if(!empty($settings['section_des'])) : ?>
                                <p><?php echo esc_html($settings['section_des']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- items/steps -->
                <div class="mission_vision-items">
                    <div class="row">
                        <!-- single item -->
                        <div class="col-lg-4">
                            <div class="single-item">
                                <!-- icon -->
                                <div class="icon">
                                    <?php if(!empty($settings['icon_one'])) : ?>
                                    <i class="<?php echo $settings['icon_one']['value']; ?>"></i>
                                    <?php endif; ?>
                                </div>
                                <!-- title -->
                                <div class="title">
                                    <?php if(!empty($settings['title_one'])) : ?>
                                    <h2><?php echo esc_html($settings['title_one']); ?></h2>
                                    <?php endif; ?>
                                </div>
                                <!-- description -->
                                <div class="description">
                                    <?php if(!empty($settings['description_one'])) : ?>
                                    <p><?php echo esc_html($settings['description_one']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- single item -->
                        <div class="col-lg-4">
                            <div class="single-item">
                                <!-- icon -->
                                <div class="icon">
                                    <?php if(!empty($settings['icon_two'])) : ?>
                                    <i class="<?php echo $settings['icon_two']['value']; ?>"></i>
                                    <?php endif; ?>
                                </div>
                                <!-- title -->
                                <div class="title">
                                    <?php if(!empty($settings['title_two'])) : ?>
                                    <h2><?php echo esc_html($settings['title_two']); ?></h2>
                                    <?php endif; ?>
                                </div>
                                <!-- description -->
                                <div class="description">
                                    <?php if(!empty($settings['description_two'])) : ?>
                                    <p><?php echo esc_html($settings['description_two']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- single item -->
                        <div class="col-lg-4">
                            <div class="single-item">
                                <!-- icon -->
                                <div class="icon">
                                    <?php if(!empty($settings['icon_three'])) : ?>
                                    <i class="<?php echo $settings['icon_three']['value']; ?>"></i>
                                    <?php endif; ?>
                                </div>
                                <!-- title -->
                                <div class="title">
                                    <?php if(!empty($settings['title_three'])) : ?>
                                    <h2><?php echo esc_html($settings['title_three']); ?></h2>
                                    <?php endif; ?>
                                </div>
                                <!-- description -->
                                <div class="description">
                                    <?php if(!empty($settings['description_three'])) : ?>
                                    <p><?php echo esc_html($settings['description_three']); ?></p>
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
