<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Team Member Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_Witl_Teams_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-team-member';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'WITL Teams', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-user-circle-o';
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
		return [ 'witl', 'team', 'witl-team' ];
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
			'witl-teams',  //any text here (id)
			[
				'label' => esc_html__( 'Team Members Details', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);

        // title
        $this->add_responsive_control(
			'team_title',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Section Title', 'witl' ),
				'placeholder' => esc_html__( 'Enter title here', 'witl' ),
				'label_block' => true,
				'default'     => 'Meet Our Awesome Team',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // button
        $this->add_responsive_control(
			'team_buttxt',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label'		  => esc_html__( 'Button Text', 'witl' ),
				'placeholder' => esc_html__( 'Button text here', 'witl' ),
				'label_block' => true,
				'default'     => 'Join our awesome team',
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // button link
        $this->add_responsive_control(
			'team_butlink',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::URL,  //text
				'label'		  => esc_html__( 'Button Link', 'witl' ),
				'placeholder' => esc_html__( 'Button link here', 'witl' ),
				'options'     => [ 'url', 'is_external', 'nofollow' ],
				'label_block' => true,
				'default'     => [
					'url'         => '',
					'is_external' => false,
					'nofollow'    => false,
				],
			]
		);

        // repeater
		$this->add_control(
			'team-member-tab',
			[
				'label'  => esc_html__( 'Team Member List', 'witl' ),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'tab_title',
						'label'       => esc_html__( 'Title', 'witl' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'default' 	  => esc_html__( 'Management' , 'witl' ),
						'label_block' => true,
					],
                    [
                        'name'        => 'team_categories',
						'label'       => esc_html__( 'Team Department', 'witl' ),
                        'type'        => \Elementor\Controls_Manager::SELECT,
                        'label_block' => true,
                        'options'     => $this->get_team_categories(),
                        'default'     => 'all', // Default option
                    ],
                    [
                        'name'        => 'team_per_page',
						'label'       => esc_html__( 'Member will show?', 'witl' ),
                        'type'    => \Elementor\Controls_Manager::NUMBER,
                        'default' => 5,  //Default
                    ],
                    [
                        'name'        => 'team_asc_dsc',
                        'label'       => esc_html__( 'ASC/DESC', 'witl' ),
                        'type'        => \Elementor\Controls_Manager::SELECT,
                        'multiple'    => true,  //default false
                        'options'     => [
                            'asc'     => esc_html__( 'ASC', 'witl' ),
                            'desc'    => esc_html__( 'DESC', 'witl' ),
                        ],
                        'default'     => ['asc'],
                    ]
				],
				'default' => [
					[
						'list_title'   => esc_html__( 'Team #1', 'witl' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);

		
        

		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['team-member-tab']) ) : ?>

        <section class="team-area">
            <div class="container">
                <div class="our_team-tab witl_team_tab">
                    <!-- tab menu -->
                    <div class="team-tab-menus">
                        <div class="row">
                            <div class="col-md-5">
                                <!-- title button -->
                                <div class="title-button">
                                    <div class="title">
                                        <?php if ( ! empty($settings['team_title']) ) : ?>
                                        <h2 class="text-capitalize">
                                        <?php echo $settings['team_title']; ?>
                                        </h2>
                                        <?php endif; ?>
                                    </div>
                                    <div class="button">
                                        <?php if ( ! empty($settings['team_buttxt']) ) : 
                        
                                        $target   = $settings['team_butlink']['is_external'] ? 'target="_blank"' : '';
                                        $nofollow = $settings['team_butlink']['nofollow'] ? 'rel="nofollow"' : '';
                                        $url      = $settings['team_butlink']['url'] ? $settings['team_butlink']['url'] : ''; ?>
                                        <a href="<?php echo esc_url($url); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?> class="witlPrimaryBtn"><?php echo $settings['team_buttxt']; ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="tab-menu aboutus-teamtab-menu">
                                    <?php foreach ($settings['team-member-tab'] as $key => $item) : ?>
                                    <li>
                                        <a href="#<?php echo esc_attr($item['_id'] ); ?>" class="text-capitalize"><?php echo esc_html($item['tab_title']); ?></a>
                                    </li>
                                    <?php endforeach;  ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- tab items -->
                    <div class="team-tab-items">
                        <?php foreach ( $settings['team-member-tab'] as $sub_key => $item ) : ?>
                        <div id="<?php echo esc_attr( $item['_id'] ); ?>" class="team_slider_content">
                            <!-- //// main slider -->
                            <div class="team-slider witl_team-slider">
                                <?php 
                                $selected_category = $item['team_categories'];

                                $tq = new WP_Query([
                                    'post_type'      => 'witl-team',
                                    'posts_per_page' => $item['team_per_page'],
                                    'order'          => $item['team_asc_dsc'],
                                    'tax_query'      => [
                                        [
                                            'taxonomy' => 'witlteam_dep', 
                                            'field'    => 'slug', 
                                            'terms'    => $selected_category, 
                                        ],
                                    ],
                                ]);
                                if($tq->have_posts()) : 
                                while($tq->have_posts()) : $tq->the_post(); ?>
                                <!-- single slider -->
                                <div class="single_team-slider">
                                    <div class="row">
                                        <!-- left side image and social icons -->
                                        <div class="col-md-5">
                                            <div class="left-side big-image-social">
                                                <div class="big-img">
                                                    <?php the_post_thumbnail(); ?>
                                                </div>
                                                <ul class="social-links">
                                                    <?php 
                                                    $team_fb = get_post_meta(get_the_ID(), '_team-facebook', true);
                                                    if(!empty($team_fb)) : ?>
                                                    <li>
                                                        <a href="<?php echo esc_url('https://facebook.com/'.$team_fb.''); ?>" title="Facebook" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                                    </li>
                                                    <?php endif;
                                                    $team_insta = get_post_meta(get_the_ID(), '_team-instagram', true);
                                                    if(!empty($team_insta)) :  ?>
                                                    <li>
                                                        <a href="<?php echo esc_url('https://instagram.com/'.$team_insta.''); ?>" title="Instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                                    </li>
                                                    <?php endif;
                                                    $team_linked = get_post_meta(get_the_ID(), '_team-linkedin', true);
                                                    if(!empty($team_linked)) : ?>
                                                    <li>
                                                        <a href="<?php echo esc_url('https://linkedin.com/in/'.$team_linked.''); ?>" title="Linkedin" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                                    </li>
                                                    <?php endif; 
                                                    $team_twittr = get_post_meta(get_the_ID(), '_tea-twitter', true);
                                                    if(!empty($team_twittr)) :  ?>
                                                    <li>
                                                        <a href="<?php echo esc_url('https://twitter.com/'.$team_twittr.''); ?>" title="Twitter" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                                    </li>
                                                    <?php endif; ?>
                                                </ul>
                                                <div class="bg-overlay"></div>
                                            </div>
                                        </div>
                                        <!-- right side -->
                                        <div class="col-md-7">
                                            <div class="right-side">
                                                <div class="slider-content">
                                                    <!-- name -->
                                                    <div class="name">
                                                        <h2 class="text-capitalize"><?php the_title(); ?></h2>
                                                    </div>
                                                    <!-- designation -->
                                                    <div class="designation">
                                                        <h5 class="text-capitalize"><?php echo get_post_meta( get_the_ID(), '_witldesignation', true ); ?></h5>
                                                    </div>
                                                    <!-- description, left icon -->
                                                    <div class="description_lefticon">
                                                        <div class="lefticon">
                                                            <i class="fa-solid fa-quote-left"></i>
                                                        </div>
                                                        <div class="description">
                                                            <p><?php the_content(); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                endwhile; wp_reset_postdata();
                                endif; ?>
                            </div>
                            <!-- thumbnail slider -->
                            <div class="team_thumb-container">
                                <div class="more-images team_thumbnail-slider">
                                    <?php 
                                    if($tq->have_posts()) : 
                                        while($tq->have_posts()) : $tq->the_post(); ?>
                                        <div class="image">
                                            <?php the_post_thumbnail(); ?>
                                        </div>  
                                    <?php
                                        endwhile; wp_reset_postdata();
                                    endif; ?>    
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
  
	<?php 
		endif;
	}

    // Helper function to get custom post type categories
    private function get_team_categories() {
        $categories = get_terms([
            'taxonomy'   => 'witlteam_dep', // Replace with your custom taxonomy name
            'hide_empty' => false,
        ]);

        $category_options = ['all' => 'All Categories'];

        foreach ($categories as $category) {
            $category_options[$category->slug] = $category->name;
        }

        return $category_options;
    }
    

}
