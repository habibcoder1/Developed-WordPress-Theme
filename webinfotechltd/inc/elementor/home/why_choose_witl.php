<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Why Choose WITL Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_Why_Choose_Witl_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-why-choose-witl';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Why Choose WITL', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-wrench';
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
		return [ 'witl', 'why-choose', 'choose', 'why' ];
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
			'why-choose-us',  //any text here (id)
			[
				'label' => esc_html__( 'Why Choose Us', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // title
        $this->add_control(
			'wc_title',  //any text here (id)
			[
                'label'		  => esc_html__( 'Why Choose Title', 'witl' ),
				'placeholder' => esc_html__( 'Title is here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('Why Choose WITL', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		// subtitle
        $this->add_control(
			'wc_subtitle',  //any text here (id)
			[
                'label'		  => esc_html__( 'Why Choose Category', 'witl' ),
				'placeholder' => esc_html__( 'Category is here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('Digital Marketing', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // content
        $this->add_control(
			'wc_description',  //any text here (id)
			[
                'label'		  => esc_html__( 'Why Choose Description', 'witl' ),
				'placeholder' => esc_html__( 'Description text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //text
				'label_block' => true,
				'default'     => esc_html__('Experience cutting-edge marketing scalability by collaborating with top-tier talent to drive your future focus business growth.Others see us as an agency.', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // button text
        $this->add_control(
			'wc_btntxt',  //any text here (id)
			[
                'label'		  => esc_html__( 'Button Text', 'witl' ),
				'placeholder' => esc_html__( 'Button text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('learn more', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // button link
        $this->add_control(
			'wc_btnlink',  //any text here (id)
			[
                'label'		  => esc_html__( 'Button Link', 'witl' ),
				'placeholder' => esc_html__( 'Button link here', 'witl' ),
				'type' => \Elementor\Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => esc_url('#'),
                ],
			]
		);
        // choosen item one//
        //icon
        $this->add_control(
			'wc_icon1',  //any text here (id)
			[
                'label'   => esc_html__( 'Choose Icon', 'witl' ),
                'type'    => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fa fa-star',
                    'library' => 'fa-solid',
                ],
			]
		);
        // item title
        $this->add_control(
			'wc_item_title1',  //any text here (id)
			[
                'label'		  => esc_html__( 'Choosen Item Title', 'witl' ),
				'placeholder' => esc_html__( 'Title is here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('self-motivated talents', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // short des
        $this->add_control(
			'wc_item_des1',  //any text here (id)
			[
                'label'		  => esc_html__( 'Choosen Item Description', 'witl' ),
				'placeholder' => esc_html__( 'Description text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //text
				'label_block' => true,
				'default'     => esc_html__('You’ll get the right individual to take total responsibility for your project and get it done in every way you desire.', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // choosen item two//
        //icon
        $this->add_control(
			'wc_icon2',  //any text here (id)
			[
                'label'   => esc_html__( 'Choose Icon', 'witl' ),
                'type'    => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fa fa-star',
                    'library' => 'fa-solid',
                ],
			]
		);
        // item title
        $this->add_control(
			'wc_item_title2',  //any text here (id)
			[
                'label'		  => esc_html__( 'Choosen Item Title', 'witl' ),
				'placeholder' => esc_html__( 'Title is here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('self-motivated talents', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // short des
        $this->add_control(
			'wc_item_des2',  //any text here (id)
			[
                'label'		  => esc_html__( 'Choosen Item Description', 'witl' ),
				'placeholder' => esc_html__( 'Description text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //text
				'label_block' => true,
				'default'     => esc_html__('You’ll get the right individual to take total responsibility for your project and get it done in every way you desire.', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // choosen item three//
        //icon
        $this->add_control(
			'wc_icon3',  //any text here (id)
			[
                'label'   => esc_html__( 'Choose Icon', 'witl' ),
                'type'    => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fa fa-star',
                    'library' => 'fa-solid',
                ],
			]
		);
        // item title
        $this->add_control(
			'wc_item_title3',  //any text here (id)
			[
                'label'		  => esc_html__( 'Choosen Item Title', 'witl' ),
				'placeholder' => esc_html__( 'Title is here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('self-motivated talents', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // short des
        $this->add_control(
			'wc_item_des3',  //any text here (id)
			[
                'label'		  => esc_html__( 'Choosen Item Description', 'witl' ),
				'placeholder' => esc_html__( 'Description text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //text
				'label_block' => true,
				'default'     => esc_html__('You’ll get the right individual to take total responsibility for your project and get it done in every way you desire.', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // choosen item four//
        //icon
        $this->add_control(
			'wc_icon4',  //any text here (id)
			[
                'label'   => esc_html__( 'Choose Icon', 'witl' ),
                'type'    => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fa fa-star',
                    'library' => 'fa-solid',
                ],
			]
		);
        // item title
        $this->add_control(
			'wc_item_title4',  //any text here (id)
			[
                'label'		  => esc_html__( 'Choosen Item Title', 'witl' ),
				'placeholder' => esc_html__( 'Title is here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('self-motivated talents', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // short des
        $this->add_control(
			'wc_item_des4',  //any text here (id)
			[
                'label'		  => esc_html__( 'Choosen Item Description', 'witl' ),
				'placeholder' => esc_html__( 'Description text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //text
				'label_block' => true,
				'default'     => esc_html__('You’ll get the right individual to take total responsibility for your project and get it done in every way you desire.', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		// choosen item five//
        //icon
        $this->add_control(
			'wc_icon5',  //any text here (id)
			[
                'label'   => esc_html__( 'Choose Icon', 'witl' ),
                'type'    => \Elementor\Controls_Manager::ICONS,
			]
		);
        // item title
        $this->add_control(
			'wc_item_title5',  //any text here (id)
			[
                'label'		  => esc_html__( 'Choosen Item Title', 'witl' ),
				'placeholder' => esc_html__( 'Title is here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // short des
        $this->add_control(
			'wc_item_des5',  //any text here (id)
			[
                'label'		  => esc_html__( 'Choosen Item Description', 'witl' ),
				'placeholder' => esc_html__( 'Description text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //text
				'label_block' => true,
				'default'     => esc_html__('You’ll get the right individual to take total responsibility for your project and get it done in every way you desire.', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
		// choosen item six//
        //icon
        $this->add_control(
			'wc_icon6',  //any text here (id)
			[
                'label'   => esc_html__( 'Choose Icon', 'witl' ),
                'type'    => \Elementor\Controls_Manager::ICONS,
			]
		);
        // item title
        $this->add_control(
			'wc_item_title6',  //any text here (id)
			[
                'label'		  => esc_html__( 'Choosen Item Title', 'witl' ),
				'placeholder' => esc_html__( 'Title is here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // short des
        $this->add_control(
			'wc_item_des6',  //any text here (id)
			[
                'label'		  => esc_html__( 'Choosen Item Description', 'witl' ),
				'placeholder' => esc_html__( 'Description text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //text
				'label_block' => true,
				'default'     => esc_html__('You’ll get the right individual to take total responsibility for your project and get it done in every way you desire.', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        
        

   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['wc_title']) ) : ?>

        <section class="home_why-chooseus service-why-chooseus">
            <div class="container">
                <!-- all icons -->
                <div class="top-left_icon capsule-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capsule-icon.png" alt="capsule-icon">
                </div>
                <div class="top-right_icon capsule-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capsule-icon.png" alt="capsule-icon">
                </div>
                <div class="bottom-left_icon capsule-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capsule-icon.png" alt="capsule-icon">
                </div>
                <div class="bottom-right_icon capsule-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capsule-icon.png" alt="capsule-icon">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- left side -->
                        <div class="whychoose-leftside">
                            <div class="heading">
                                <?php if ( ! empty($settings['wc_title']) ) :  ?>
                                <h2><?php echo $settings['wc_title']; ?></h2>
                                <?php endif; ?>
                            </div>
                            <?php if ( ! empty($settings['wc_subtitle']) ) :  ?>
                            <div class="subheading">
                                <h5 class="text-capitalize"><?php echo $settings['wc_subtitle']; ?></h5>
                            </div>
                            <?php endif; ?>
                            <div class="description">
								<?php if ( ! empty($settings['wc_description']) ) :  ?>
                                <p><?php echo $settings['wc_description']; ?></p>
								<?php endif; ?>
                            </div>
                            <div class="btn">
								<?php 
								if ( ! empty($settings['wc_btntxt']) ) :
								$target   = $settings['wc_btnlink']['is_external'] ? 'target="_blank"' : '';
								$nofollow = $settings['wc_btnlink']['nofollow'] ? 'rel="nofollow"' : '';
								$url      = $settings['wc_btnlink']['url'] ? $settings['wc_btnlink']['url'] : ''; ?>

                                <a href="<?php echo esc_url($url); ?>" <?php echo esc_attr($nofollow); ?> <?php echo esc_attr($target); ?> class="witlSecondaryBtn"><?php echo $settings['wc_btntxt']; ?></a>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- right side -->
                        <div class="whychoose-rightside">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <!-- left items -->
                                    <div class="left-items">
                                        <!-- single item1 -->
                                        <div class="single-item item-greenwhite">
                                            <!-- icon -->
                                            <div class="icon">
												<?php if ( ! empty($settings['wc_icon1']) ) : ?>
                                                <i class="<?php echo $settings['wc_icon1']['value']; ?>"></i>
												<?php endif; ?>
                                            </div>
                                            <!-- title -->
                                            <div class="title">
												<?php if ( ! empty($settings['wc_item_title1']) ) : ?>
                                                <h3><?php echo $settings['wc_item_title1']; ?></h3>
												<?php endif; ?>
                                            </div>
                                            <!-- content -->
                                            <div class="content">
												<?php if ( ! empty($settings['wc_item_des1']) ) : ?>
                                                <p><?php echo $settings['wc_item_des1']; ?></p>
												<?php endif; ?>
                                            </div>
                                        </div>
                                        <!-- single item2 -->
                                        <div class="single-item item-lightblue">
                                            <!-- icon -->
                                            <div class="icon">
												<?php if ( ! empty($settings['wc_icon2']) ) : ?>
                                                <i class="<?php echo $settings['wc_icon2']['value']; ?>"></i>
												<?php endif; ?>
                                            </div>
                                            <!-- title -->
                                            <div class="title">
												<?php if ( ! empty($settings['wc_item_title2']) ) : ?>
                                                <h3><?php echo $settings['wc_item_title2']; ?></h3>
												<?php endif; ?>
                                            </div>
                                            <!-- content -->
                                            <div class="content">
												<?php if ( ! empty($settings['wc_item_des2']) ) : ?>
                                                <p><?php echo $settings['wc_item_des2']; ?></p>
												<?php endif; ?>
                                            </div>
                                        </div>
                                        <?php if ( ! empty($settings['wc_item_title5']) ) : ?>
                                        <!-- single item5 -->
                                        <div class="single-item item-white">
                                            <!-- icon -->
                                            <div class="icon">
												<?php if ( ! empty($settings['wc_icon5']['value']) ) : ?>
                                                <i class="<?php echo $settings['wc_icon5']['value']; ?>"></i>
												<?php endif; ?>
                                            </div>
                                            <!-- title -->
                                            <div class="title">
												<?php if ( ! empty($settings['wc_item_title5']) ) : ?>
                                                <h3><?php echo $settings['wc_item_title5']; ?></h3>
												<?php endif; ?>
                                            </div>
                                            <!-- content -->
                                            <div class="content">
												<?php if ( ! empty($settings['wc_item_des5']) ) : ?>
                                                <p><?php echo $settings['wc_item_des5']; ?></p>
												<?php endif; ?>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="right-items">
                                        <!-- single item1 -->
                                        <div class="single-item item-lightblue">
                                            <!-- icon -->
                                            <div class="icon">
												<?php if ( ! empty($settings['wc_icon3']) ) : ?>
                                                <i class="<?php echo $settings['wc_icon3']['value']; ?>"></i>
												<?php endif; ?>
                                            </div>
                                            <!-- title -->
                                            <div class="title">
												<?php if ( ! empty($settings['wc_item_title3']) ) : ?>
                                                <h3><?php echo $settings['wc_item_title3']; ?></h3>
												<?php endif; ?>
                                            </div>
                                            <!-- content -->
                                            <div class="content">
												<?php if ( ! empty($settings['wc_item_des3']) ) : ?>
                                                <p><?php echo $settings['wc_item_des3']; ?></p>
												<?php endif; ?>
                                            </div>
                                        </div>
                                        <!-- single item2 -->
                                        <div class="single-item item-greenwhite">
                                            <!-- icon -->
                                            <div class="icon">
												<?php if ( ! empty($settings['wc_icon4']) ) : ?>
                                                <i class="<?php echo $settings['wc_icon4']['value']; ?>"></i>
												<?php endif; ?>
                                            </div>
                                            <!-- title -->
                                            <div class="title">
												<?php if ( ! empty($settings['wc_item_title4']) ) : ?>
                                                <h3><?php echo $settings['wc_item_title4']; ?></h3>
												<?php endif; ?>
                                            </div>
                                            <!-- content -->
                                            <div class="content">
												<?php if ( ! empty($settings['wc_item_des4']) ) : ?>
                                                <p><?php echo $settings['wc_item_des4']; ?></p>
												<?php endif; ?>
                                            </div>
                                        </div>
                                        <?php if ( ! empty($settings['wc_item_title6']) ) : ?>
                                        <!-- single item3 -->
                                        <div class="single-item item-lightblue">
                                            <!-- icon -->
                                            <div class="icon">
												<?php if ( ! empty($settings['wc_icon6']['value']) ) : ?>
                                                <i class="<?php echo $settings['wc_icon6']['value']; ?>"></i>
												<?php endif; ?>
                                            </div>
                                            <!-- title -->
                                            <div class="title">
												<?php if ( ! empty($settings['wc_item_title6']) ) : ?>
                                                <h3><?php echo $settings['wc_item_title6']; ?></h3>
												<?php endif; ?>
                                            </div>
                                            <!-- content -->
                                            <div class="content">
												<?php if ( ! empty($settings['wc_item_des6']) ) : ?>
                                                <p><?php echo $settings['wc_item_des6']; ?></p>
												<?php endif; ?>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
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
