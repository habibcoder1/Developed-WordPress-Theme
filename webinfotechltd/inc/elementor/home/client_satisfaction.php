<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Client Satisfaction Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_Client_Satisfaction_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-client-satisfaction';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Client Satisfaction', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-anchor';
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
		return [ 'witl', 'client-satisfaction', 'satisfaction', 'client' ];
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
			'client-satisfaction',  //any text here (id)
			[
				'label' => esc_html__( 'Client Satisfaction Details', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // count 1
        $this->add_control(
			'cs_count1',  //any text here (id)
			[
                'label'		  => esc_html__( 'Satisfaction Count Number', 'witl' ),
				'placeholder' => esc_html__( 'Number here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('3k', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // text 1
        $this->add_control(
			'cs_text1',  //any text here (id)
			[
                'label'		  => esc_html__( 'Satisfaction Text', 'witl' ),
				'placeholder' => esc_html__( 'Satusfaction text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('happy client', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // count 2
        $this->add_control(
			'cs_count2',  //any text here (id)
			[
                'label'		  => esc_html__( 'Project completed Count Number', 'witl' ),
				'placeholder' => esc_html__( 'Number here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('8k', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // text 2
        $this->add_control(
			'cs_text2',  //any text here (id)
			[
                'label'		  => esc_html__( 'Project Completed Text', 'witl' ),
				'placeholder' => esc_html__( 'Project completed text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('project completed', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // count 3
        $this->add_control(
			'cs_count3',  //any text here (id)
			[
                'label'		  => esc_html__( 'Client Revenues count', 'witl' ),
				'placeholder' => esc_html__( 'Client revenue number here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('$6B', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // text 3
        $this->add_control(
			'cs_text3',  //any text here (id)
			[
                'label'		  => esc_html__( 'Client Revenue Text', 'witl' ),
				'placeholder' => esc_html__( 'Client revenue text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('Client Revenues', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // count 4
        $this->add_control(
			'cs_count4',  //any text here (id)
			[
                'label'		  => esc_html__( 'Year of Operation count', 'witl' ),
				'placeholder' => esc_html__( 'year of operation number here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('10+', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // text 4
        $this->add_control(
			'cs_text4',  //any text here (id)
			[
                'label'		  => esc_html__( 'Year of Operation Text', 'witl' ),
				'placeholder' => esc_html__( 'Year of operation text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('Year of Operation', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        

   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['cs_count1']) ) : ?>

        <section class="client_satisfaction-area">
            <div class="container">
                <div class="row">
                    <!-- happy client -->
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="happy-client single-satisfaction">
                            <div class="count">
                                <?php if(!empty($settings['cs_count1'])) : ?>
                                <h2><?php echo esc_html($settings['cs_count1']); ?></h2>
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <?php if(!empty($settings['cs_text1'])) : ?>
                                <span><?php echo $settings['cs_text1']; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- project completed -->
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="project-completed single-satisfaction">
                            <div class="count">
                                <?php if(!empty($settings['cs_count2'])) : ?>
                                <h2><?php echo esc_html($settings['cs_count2']); ?></h2>
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <?php if(!empty($settings['cs_text2'])) : ?>
                                <span><?php echo $settings['cs_text2']; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- client revenues -->
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="client-revenues single-satisfaction">
                            <div class="count">
                                <?php if(!empty($settings['cs_count3'])) : ?>
                                <h2><?php echo esc_html($settings['cs_count3']); ?></h2>
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <?php if(!empty($settings['cs_text3'])) : ?>
                                <span><?php echo $settings['cs_text3']; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- operation time -->
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="operation-time single-satisfaction">
                            <div class="count">
                                <?php if(!empty($settings['cs_count4'])) : ?>
                                <h2><?php echo esc_html($settings['cs_count4']); ?></h2>
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <?php if(!empty($settings['cs_text4'])) : ?>
                                <span><?php echo $settings['cs_text4']; ?></span>
                                <?php endif; ?>
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
