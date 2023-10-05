<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Service Hero Section Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_Service_Hero_Section_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-service-hero';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Service Hero Section', 'witl' );
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
		return [ 'witl', 'service-hero', 'hero-section' ];
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
			'service-hero',  //any text here (id)
			[
				'label' => esc_html__( 'Service Hero Details', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // title
        $this->add_control(
			'shero_title1',  //any text here (id)
			[
                'label'		  => esc_html__( 'Hero Title First Line', 'witl' ),
				'placeholder' => esc_html__( 'Hero title here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('Diversified Digital Marketing.', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // title
        $this->add_control(
			'shero_title2',  //any text here (id)
			[
                'label'		  => esc_html__( 'Hero Title Second Line', 'witl' ),
				'placeholder' => esc_html__( 'Hero title here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('Drive Results', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // des
        $this->add_control(
			'shero_des',  //any text here (id)
			[
                'label'		  => esc_html__( 'Hero Description', 'witl' ),
				'placeholder' => esc_html__( 'Hero description here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //text
				'label_block' => true,
				'default'     => esc_html__('Your 360° Marketing Strategy For Sure-fire Scalability And Promising Growth.', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // btn
        $this->add_control(
			'shero_btntxt',  //any text here (id)
			[
                'label'		  => esc_html__( 'Hero Button Text', 'witl' ),
				'placeholder' => esc_html__( 'Hero button text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('Book Free Consultation', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // url
        $this->add_control(
			'shero_btnlink',  //any text here (id)
			[
                'label'		  => esc_html__( 'Hero Button Link', 'witl' ),
				'placeholder' => esc_html__( 'Hero button link here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::URL,  //text
				'label_block' => true,
				'default'     => [
					'url'         => '',
					'is_external' => false,
					'nofollow'    => false,
				],
			]
		);
        // scroll
        $this->add_control(
			'shero_scrolltext',  //any text here (id)
			[
                'label'		  => esc_html__( 'Hero Scroll Text', 'witl' ),
				'placeholder' => esc_html__( 'Hero scroll text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('Scroll to service section', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // image one
        $this->add_control(
			'shero_img1',  //any text here (id)
			[
                'label'		  => esc_html__( 'Hero Image One', 'witl' ),
				'placeholder' => esc_html__( 'Hero image here', 'witl' ),
                'type'  => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
			]
		);
        // alt one
        $this->add_control(
			'shero_imgalt1',  //any text here (id)
			[
                'label'		  => esc_html__( 'Hero Image One Alt', 'witl' ),
				'placeholder' => esc_html__( 'Hero image one alt text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('hero-image', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // image two
        $this->add_control(
			'shero_img2',  //any text here (id)
			[
                'label'		  => esc_html__( 'Hero Image Two', 'witl' ),
				'placeholder' => esc_html__( 'Hero image here', 'witl' ),
                'type'  => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
			]
		);
        // alt two
        $this->add_control(
			'shero_imgalt2',  //any text here (id)
			[
                'label'		  => esc_html__( 'Hero Image Two Alt', 'witl' ),
				'placeholder' => esc_html__( 'Hero image two alt text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('hero-image', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // image text
        $this->add_control(
			'shero_imgtext',  //any text here (id)
			[
                'label'		  => esc_html__( 'Hero Image Text', 'witl' ),
				'placeholder' => esc_html__( 'Hero image text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('HQ Product', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // rating
        $this->add_control(
			'shero_rate',  //any text here (id)
			[
                'label'		  => esc_html__( 'Hero Rate', 'witl' ),
				'placeholder' => esc_html__( 'Hero rate here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('4.8', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // rating text
        $this->add_control(
			'shero_ratetext',  //any text here (id)
			[
                'label'		  => esc_html__( 'Hero Rate Text', 'witl' ),
				'placeholder' => esc_html__( 'Hero rate text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('High Rated', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // work text
        $this->add_control(
			'shero_worktext',  //any text here (id)
			[
                'label'		  => esc_html__( 'How We Work Text', 'witl' ),
				'placeholder' => esc_html__( 'Text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('Wanna Know.. How We Work', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        
        

   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['shero_title1']) ) : ?>

        <section class="service_hero-section">
            <div class="container">
                <div class="row">
                    <!-- hero left -->
                    <div class="col-md-7">
                        <!-- section title -->
                        <div class="section-title">
                            <?php if(!empty($settings['shero_title1'])) : ?>
                            <h2 class="text-capitalize"><?php echo $settings['shero_title1']; ?></h2>
                            <?php endif; ?>
                            <?php if(!empty($settings['shero_title2'])) : ?>
                            <h2 class="text-capitalize"><?php echo $settings['shero_title2']; ?></h2>
                            <?php endif; ?>
                        </div>
                        <!-- section descripiton -->
                        <div class="section-description"> 
                            <div class="row d-flex align-items-center">
                                <div class="col-sm-2 col-md-2">
                                    <!-- logo -->
                                    <div class="logo">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.jpg" alt="logo">
                                    </div>
                                </div>
                                <div class="col-sm-10 col-md-10">
                                    <!-- description -->
                                    <div class="desctiption">
                                        <?php if(!empty($settings['shero_des'])) : ?>
                                        <p><?php echo $settings['shero_des']; ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- book btn -->
                        <div class="book-btn">
                            <?php if(!empty($settings['shero_btntxt'])) :
                            $target   = $settings['shero_btnlink']['is_external'] ? 'target="_blank"' : '';
                            $nofollow = $settings['shero_btnlink']['nofollow'] ? 'rel="nofollow"' : '';
                            $url      = $settings['shero_btnlink']['url'] ? $settings['shero_btnlink']['url'] : ''; ?>

                            <a href="<?php echo esc_url($url); ?>" class="witlPrimaryBtn" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?> ><?php echo $settings['shero_btntxt']; ?>
                                <i class="fa-solid fa-arrow-right-long"></i></a>
                            <?php endif; ?>
                        </div>
                        <!-- scroll bottom -->
                        <div class="scroll-bottom">
                            <div class="scrollbottom-container">
                                <div class="icon">
                                    <a href="#service-section" title="Go to Service Section"><i class="fa-solid fa-angle-down"></i></a>
                                </div>
                                <div class="content">
                                    <?php if(!empty($settings['shero_scrolltext'])) : ?>
                                    <p class="text-capitalize"><?php echo $settings['shero_scrolltext']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- hero right -->
                    <div class="col-md-5">
                        <div class="hero-right">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- left content -->
                                    <div class="left-content">
                                        <!-- image -->
                                        <div class="hero-image">
                                            <?php if ( ! empty($settings['shero_img1']['url']) ) :  ?>
                                            <img src="<?php echo esc_url($settings['shero_img1']['url']); ?>" alt="<?php echo esc_html($settings['shero_imgalt1']); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <!-- rating box -->
                                        <div class="ratign-box">
                                            <div class="count-star">
                                                <?php if ( ! empty($settings['shero_rate']) ) :  ?>
                                                <h3><?php echo $settings['shero_rate']; ?></h3>
                                                <?php endif; ?>
                                                <p><i class="fa-solid fa-star"></i></p>
                                                <?php if ( ! empty($settings['shero_ratetext']) ) :  ?>
                                                <p class="text text-capitalize">
                                                    <?php echo $settings['shero_ratetext']; ?>
                                                </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- right content -->
                                    <div class="right-content">
                                        <!-- image -->
                                        <div class="hero-image">
                                            <?php if ( ! empty($settings['shero_img2']['url']) ) :  ?>
                                            <img src="<?php echo esc_url($settings['shero_img2']['url']); ?>" alt="<?php echo esc_html($settings['shero_imgalt2']); ?>">
                                            <?php endif; ?>
                                            <div class="img-side-content">
                                                <?php if ( ! empty($settings['shero_imgtext']) ) :  ?>
                                                <p class="text-uppercase">
                                                    <?php echo $settings['shero_imgtext']; ?>
                                                </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <!-- rating box -->
                                        <div class="process-content">
                                            <div class="content">
                                                <?php if ( ! empty($settings['shero_worktext']) ) :  ?>
                                                <p class="text-capitalize">
                                                    <?php echo $settings['shero_worktext']; ?>
                                                </p>
                                                <?php endif; ?>
                                            </div>
                                            <span class="line">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </div>
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
