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


class Witl_Contact_Address_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-contact-address';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Contact Address', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-notes';
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
		return [ 'witl', 'address', 'witl-address', 'widget' ];
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
			'contact_address',  //any text here (id)
			[
				'label' => esc_html__( 'Contact Address', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

		// first title
		$this->add_control(
			'addressone_title',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Address First Title', 'elementor-simple' ),
				'placeholder' => esc_html__( 'Address title here', 'witl' ),
				'label_block' => true,
				'default'     => 'USA Office',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		// first address
		$this->add_control(
			'addressone_details',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Address First Details', 'witl' ),
				'placeholder' => esc_html__( 'Address first here', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'USA office 5520 Research Park Dr, #105 Catonsville, MD 21228', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
		// first time
		$this->add_control(
			'addressone_time',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //textarea
				'label'		  => esc_html__( 'Address First Time', 'witl' ),
				'placeholder' => esc_html__( 'Address first time', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( '09.00 am - 17.00 pm', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
		// first email
		$this->add_control(
			'addressone_email',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //textarea
				'label'		  => esc_html__( 'Address First Email', 'witl' ),
				'placeholder' => esc_html__( 'Address first email', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'support@webinfotechltd.com', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
		
        // second title
		$this->add_control(
			'addresstwo_title',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Address Second Title', 'elementor-simple' ),
				'placeholder' => esc_html__( 'Address title here', 'witl' ),
				'label_block' => true,
				'default'     => 'Dhaka Office',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		// second address
		$this->add_control(
			'addresstwo_details',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Address Second Details', 'witl' ),
				'placeholder' => esc_html__( 'Address second here', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'USA office 5520 Research Park Dr, #105 Catonsville, MD 21228', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
		// second time
		$this->add_control(
			'addresstwo_time',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //textarea
				'label'		  => esc_html__( 'Address Second Time', 'witl' ),
				'placeholder' => esc_html__( 'Address second time', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( '09.00 am - 17.00 pm', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
		// second email
		$this->add_control(
			'addresstwo_email',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //textarea
				'label'		  => esc_html__( 'Address Second Email', 'witl' ),
				'placeholder' => esc_html__( 'Address second email', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'support@webinfotechltd.com', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
		
        // third title
		$this->add_control(
			'addressthree_title',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Address Third Title', 'elementor-simple' ),
				'placeholder' => esc_html__( 'Address title here', 'witl' ),
				'label_block' => true,
				'default'     => 'Need Support?',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		// third address
		$this->add_control(
			'addressthree_details',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Address Third Details', 'witl' ),
				'placeholder' => esc_html__( 'Address third here', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'USA office 5520 Research Park Dr, #105 Catonsville, MD 21228', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
		// third time
		$this->add_control(
			'addressthree_time',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //textarea
				'label'		  => esc_html__( 'Address Third Time', 'witl' ),
				'placeholder' => esc_html__( 'Address third time', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( '09.00 am - 17.00 pm', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);
		// second email
		$this->add_control(
			'addressthree_email',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //textarea
				'label'		  => esc_html__( 'Address Third Email', 'witl' ),
				'placeholder' => esc_html__( 'Address third email', 'witl' ),
                'label_block' => true,
				'default'     => esc_html__( 'support@webinfotechltd.com', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);

		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['addressone_title']) ) : ?>

        <section class="location_support-area">
            <div class="container">
                <div class="location_support-items">
                    <!-- single item -->
                    <div class="single-item">
                        <div class="title">
                            <?php if(!empty($settings['addressone_title'])) : ?>
                            <h4 class="text-capitalize"><?php echo esc_html($settings['addressone_title']); ?></h4>
                            <?php endif; ?>
                        </div>
                        <div class="address">
                            <?php if(!empty($settings['addressone_details'])) : ?>
                            <p><?php echo esc_html($settings['addressone_details']); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="time-email">
                            <!-- time -->
                            <div class="time">
                                <div class="row">
                                    <?php if(!empty($settings['addressone_time'])) : ?>
                                    <div class="col-1 col-md-1 col-lg-1">
                                        <i class="fa-solid fa-phone-volume"></i>
                                    </div>
                                    <div class="col-11 col-md-11 col-lg-11">
                                        <p><?php echo esc_html($settings['addressone_time']); ?></p>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- email -->
                            <div class="email">
                                <div class="row">
                                    <?php if(!empty($settings['addressone_email'])) : ?>
                                    <div class="col-1 col-md-1 col-lg-1">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div class="col-11 col-md-11 col-lg-11">
                                        <p><?php echo esc_html($settings['addressone_email']); ?></p>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="single-item">
                        <div class="title">
                            <?php if(!empty($settings['addresstwo_title'])) : ?>
                            <h4 class="text-capitalize"><?php echo esc_html($settings['addresstwo_title']); ?></h4>
                            <?php endif; ?>
                        </div>
                        <div class="address">
                            <?php if(!empty($settings['addresstwo_details'])) : ?>
                            <p><?php echo esc_html($settings['addresstwo_details']); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="time-email">
                            <!-- time -->
                            <div class="time">
                                <div class="row">
                                    <?php if(!empty($settings['addresstwo_time'])) : ?>
                                    <div class="col-1 col-md-1 col-lg-1">
                                        <i class="fa-solid fa-phone-volume"></i>
                                    </div>
                                    <div class="col-11 col-md-11 col-lg-11">
                                        <p><?php echo esc_html($settings['addresstwo_time']); ?></p>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- email -->
                            <div class="email">
                                <div class="row">
                                    <?php if(!empty($settings['addresstwo_email'])) : ?>
                                    <div class="col-1 col-md-1 col-lg-1">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div class="col-11 col-md-11 col-lg-11">
                                        <p><?php echo esc_html($settings['addresstwo_email']); ?></p>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="single-item">
                        <div class="title">
                            <?php if(!empty($settings['addressthree_title'])) : ?>
                            <h4 class="text-capitalize"><?php echo esc_html($settings['addressthree_title']); ?></h4>
                            <?php endif; ?>
                        </div>
                        <div class="address">
                            <?php if(!empty($settings['addressthree_details'])) : ?>
                            <p><?php echo esc_html($settings['addressthree_details']); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="time-email">
                            <!-- time -->
                            <div class="time">
                                <div class="row">
                                    <?php if(!empty($settings['addressthree_time'])) : ?>
                                    <div class="col-1 col-md-1 col-lg-1">
                                        <i class="fa-solid fa-phone-volume"></i>
                                    </div>
                                    <div class="col-11 col-md-11 col-lg-11">
                                        <p><?php echo esc_html($settings['addressthree_time']); ?></p>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- email -->
                            <div class="email">
                                <div class="row">
                                    <?php if(!empty($settings['addressthree_email'])) : ?>
                                    <div class="col-1 col-md-1 col-lg-1">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div class="col-11 col-md-11 col-lg-11">
                                        <p><?php echo esc_html($settings['addressthree_email']); ?></p>
                                    </div>
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
