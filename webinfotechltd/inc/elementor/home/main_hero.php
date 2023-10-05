<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Main Hero Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_Main_Hero_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-main-hero';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Main Hero Section', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return ' eicon-header';
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
		return [ 'witl', 'main-hero', 'hero' ];
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
			'main-hero',  //any text here (id)
			[
				'label' => esc_html__( 'Hero Section Details', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // title
        $this->add_responsive_control(
			'hero_title1',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Hero Title', 'witl' ),
				'placeholder' => esc_html__( 'Enter title here', 'witl' ),
				'label_block' => true,
				'default'     => 'Road To The Roof Of',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);

        // repeater
		$this->add_control(
			'slider-title',
			[
				'label'  => esc_html__( 'Title Slider', 'witl' ),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'hero_title2',
						'label'       => esc_html__( 'Title', 'witl' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Rank' , 'witl' ),
						'label_block' => true,
					],
				],
				'default' => [
					[
						'list_title'   => esc_html__( 'Team #1', 'witl' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);

        // description
        $this->add_responsive_control(
			'hero_des',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //textarea
				'label'		  => esc_html__( 'Description', 'witl' ),
				'placeholder' => esc_html__( 'Enter description', 'witl' ),
				'default'     => esc_html__( 'Your trusted, full-force digital partner to lead the growth and scalability.', 'witl' ),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag
				],
			]
		);

        // button
        $this->add_responsive_control(
			'hero_btntxt',  //any text here (id)
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
			'hero-btnlink',  //any text here (id)
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

        // first animation images
		$this->add_responsive_control(
			'first-banner',
			[
				'label' => esc_html__( 'First Line Animation Images', 'witl' ),
				'type'  => \Elementor\Controls_Manager::GALLERY,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'dynamic' =>[
					'active' => true,  //for dynamic tag option
				],
			]
		);

        // Second animation images
		$this->add_responsive_control(
			'second-banner',
			[
				'label' => esc_html__( 'Second Line Animation Images', 'witl' ),
				'type'  => \Elementor\Controls_Manager::GALLERY,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'dynamic' =>[
					'active' => true,  //for dynamic tag option
				],
			]
		);

        // Third animation images
		$this->add_responsive_control(
			'third-banner',
			[
				'label' => esc_html__( 'Third Line Animation Images', 'witl' ),
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

		if ( ! empty($settings['slider-title']) ) : ?>

        <section class="hero-area">
            <div class="gradian-round_iamges">
                <div class="left-round">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg-round.png" alt="round-image">
                </div>
                <div class="right-round">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg-round1.png" alt="round-image">
                </div>
            </div>
            <!-- hero banner area -->
            <div class="hero-banner-area">
                <div class="banner-inner">
                    <!-- banner first -->
                    <div class="banner-row banner-row-first">
                        <?php  
                        if(!empty($settings['first-banner'])) :
                            foreach ( $settings['first-banner'] as $image ) : ?>
                                <!-- sngle banner -->
                                <div class="single-banner">
                                    <img src="<?php echo esc_url($image['url']); ?>">
                                </div>
                            <?php 
                            endforeach;
                        endif; ?>
                    </div>
                    <!-- banner second -->
                    <div class="banner-row banner-row-second">
                        <?php  
                        if(!empty($settings['second-banner'])) :
                            foreach ( $settings['second-banner'] as $image ) : ?>
                                <!-- sngle banner -->
                                <div class="single-banner">
                                    <img src="<?php echo esc_url($image['url']); ?>">
                                </div>
                            <?php 
                            endforeach;
                        endif; ?>
                    </div>
                    <!-- banner third -->
                    <div class="banner-row banner-row-third">
                        <?php  
                        if(!empty($settings['third-banner'])) :
                            foreach ( $settings['third-banner'] as $image ) : ?>
                                <!-- sngle banner -->
                                <div class="single-banner">
                                    <img src="<?php echo esc_url($image['url']); ?>">
                                </div>
                            <?php 
                            endforeach;
                        endif; ?>
                    </div>
                </div>
            </div>
            <!-- hero content area -->
            <div class="container">
                <div class="hero_area-content">
                    <!-- hero title -->
                    <div class="hero-title">
                        <?php if ( ! empty($settings['hero_title1']) ) :  ?>
                        <h1><?php echo esc_html($settings['hero_title1']); ?>
                            <div class="hero_title-slider">
                                <?php foreach ($settings['slider-title'] as $key => $item) : ?>
                                <span><?php echo esc_html($item['hero_title2']); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <span class="bg_gradiant-color"></span>
                        </h1>
                        <?php endif; ?>
                    </div>
                    <!-- hero description -->
                    <div class="hero-description">
                        <?php if ( ! empty($settings['hero_des']) ) :  ?>
                        <p><?php echo esc_html($settings['hero_des']); ?></p>
                        <?php endif; ?>
                    </div>
                    <!-- hero buttons -->
                    <div class="hero-buttons">
                        <?php if ( ! empty($settings['hero_btntxt']) ) : 
                        
                        $target   = $settings['hero-btnlink']['is_external'] ? 'target="_blank"' : '';
                        $nofollow = $settings['hero-btnlink']['nofollow'] ? 'rel="nofollow"' : '';
                        $url      = $settings['hero-btnlink']['url'] ? $settings['hero-btnlink']['url'] : '';
                            ?>
                        <a href="<?php echo esc_url($url); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?> class="witlPrimaryBtn left-btn"><?php echo $settings['hero_btntxt']; ?></a>
                        <?php endif; ?>
                    </div>
                    <!-- go down icon -->
                    <div class="go_down-icon">
                        <a href="#go-service-section" title="Go to Service Section">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/go-down-iocn.png" alt="down-iocn">
                        </a>
                    </div>
                </div>
            </div>
        </section>
  
	<?php 
		endif;
	}
    

}
