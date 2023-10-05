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


class Witl_Recent_Blog_Post_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-recent-blog';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'Recent Blog With CTA', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-posts-grid';
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
		return [ 'witl', 'recent-post', 'recent', 'blog' ];
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
			'recent-blog-post',  //any text here (id)
			[
				'label' => esc_html__( 'Blog Post & CTA', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);
        // title
        $this->add_control(
			'bp_title',  //any text here (id)
			[
                'label'		  => esc_html__( 'Recent Blog Title', 'witl' ),
				'placeholder' => esc_html__( 'Title is here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('Recent Blog Post', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // content
        $this->add_control(
			'bp_subtitle',  //any text here (id)
			[
                'label'		  => esc_html__( 'Recent Blog Subtitle', 'witl' ),
				'placeholder' => esc_html__( 'Subtitle text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //text
				'label_block' => true,
				'default'     => esc_html__('LATEST WEB INFO TECH NEWS', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // post category
        $this->add_control(
			'bp_post_category',  //any text here (id)
			[
                'label'		  => esc_html__( 'Select Post Cotegory', 'witl' ),
				'placeholder' => esc_html__( 'Post category', 'witl' ),
				'type'        => \Elementor\Controls_Manager::SELECT,
                'label_block' => true,
                'options'     => $this->get_post_categories(),
                'default'     => 'all', // Default option
			]
		);
        // post per page
        $this->add_control(
			'bp_post_perpage',  //any text here (id)
			[
                'label'		  => esc_html__( 'Post Will Show?', 'witl' ),
				'placeholder' => esc_html__( 'How many post will show?', 'witl' ),
                'type'    => \Elementor\Controls_Manager::NUMBER,
                'default' => 5,  //Default
			]
		);
        // post asc/dsc
        $this->add_control(
			'bp_post_asc_dsc',  //any text here (id)
			[
                'label'		  => esc_html__( 'ASC/DESC', 'witl' ),
                'type'        => \Elementor\Controls_Manager::SELECT,
                'multiple'    => true,  //default false
                'options'     => [
                    'asc'     => esc_html__( 'ASC', 'witl' ),
                    'desc'    => esc_html__( 'DESC', 'witl' ),
                ],
                'default'     => ['asc'],
			]
		);
        
        
        // CTA Details
        // cta title
        $this->add_control(
			'cta_title',  //any text here (id)
			[
                'label'		  => esc_html__( 'CTA Title', 'witl' ),
				'placeholder' => esc_html__( 'Cta title here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('Ready To Excel Your Marketing', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // content
        $this->add_control(
			'cta_des',  //any text here (id)
			[
                'label'		  => esc_html__( 'CTA Description', 'witl' ),
				'placeholder' => esc_html__( 'Description text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //text
				'label_block' => true,
				'default'     => esc_html__('Share every single requirement of your project and get the manager to deliver it on time. on command.', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // cta btn text
        $this->add_control(
			'cta_btntxt1',  //any text here (id)
			[
                'label'		  => esc_html__( 'First Button Text', 'witl' ),
				'placeholder' => esc_html__( 'Button text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('call us', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // cta btn url
        $this->add_control(
			'cta_btnlink1',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::URL,  //url
				'label'		  => esc_html__( 'First Button link', 'witl' ),
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
        // cta btn text
        $this->add_control(
			'cta_btntxt2',  //any text here (id)
			[
                'label'		  => esc_html__( 'Second Button Text', 'witl' ),
				'placeholder' => esc_html__( 'Button text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('call us', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // cta btn url
        $this->add_control(
			'cta_btnlink2',  //any text here (id)
			[
				'type' 		  => \Elementor\Controls_Manager::URL,  //url
				'label'		  => esc_html__( 'Second Button link', 'witl' ),
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
        
        

   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['bp_title']) ) : ?>

        <section class="recent-blogpost service_recent-blogpost">
            <div class="container">
                <!-- title, subtitle -->
                <div class="section-title">
                    <?php if ( ! empty($settings['bp_title']) ) : ?>
                    <h2 class="text-capitalize"><?php echo $settings['bp_title']; ?></h2>
                    <?php endif; ?>
                </div>
                <div class="section-subtitle">
                    <?php if ( ! empty($settings['bp_subtitle']) ) : ?>
                    <h5 class="text-capitalize"><?php echo $settings['bp_subtitle']; ?></h5>
                    <?php endif; ?>
                </div>
                <!-- post items -->
                <div class="post-items blog_post-slider">
                    <?php 
                    $category_name = $settings['bp_post_category'];
                    if ($category_name === 'all' || empty($category_name)) {
                        $category_name = ''; // Empty category_name to show all posts
                    }

                    $bpq = new WP_Query([
                        'post_type'      => 'post',
                        'posts_per_page' => $settings['bp_post_perpage'],
                        'order'          => $settings['bp_post_asc_dsc'],
                        'category_name'  => $category_name,
                    ]);
                    if($bpq->have_posts()) : 
                    while($bpq->have_posts()) : $bpq->the_post(); ?>
                    <!-- single blog -->
                    <div class="single-blog">
                        <article id="post-id" class="post-class">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>
                            <!-- Categories -->
                            <div class="categories">
                                <ul>
                                    <?php the_category(); ?>
                                </ul>
                            </div>
                            <!-- title -->
                            <div class="title">
                                <a href="<?php the_permalink(); ?>"><h2><?php echo wp_trim_words( get_the_title(), 6, '' ); ?></h2></a>
                            </div>
                            <!-- reading time -->
                            <div class="reading-time">
                                <p class="text-capitalize">
                                    <i class="fa-solid fa-stopwatch"></i> <?php echo get_post_meta( get_the_ID(), '_witlreadingtime', true ); ?>
                                </p>
                            </div>
                        </article>
                    </div>
                    <?php 
                    endwhile; wp_reset_postdata();
                    endif; ?>
                </div>
                <!-- service call to action -->
                <div class="dm_callto-action service_callto-action">
                    <div class="inner-container">
                        <div class="row align-items-end">
                            <!-- left side -->
                            <div class="col-md-6">
                                <!-- title, buttons -->
                                <div class="title-buttons">
                                    <div class="title">
                                        <?php if ( ! empty($settings['cta_title']) ) : ?>
                                        <h2 class="title-one"><?php echo $settings['cta_title']; ?></h2>
                                        <?php endif; ?>
                                    </div>
                                    <!-- buttons -->
                                    <div class="buttons">
                                        <ul>
                                            <?php if ( ! empty($settings['cta_btntxt1']) ) : 

                                            $target1   = $settings['cta_btnlink1']['is_external'] ? 'target="_blank"' : '';
                                            $nofollow1 = $settings['cta_btnlink1']['nofollow'] ? 'rel="nofollow"' : '';
                                            $url1      = $settings['cta_btnlink1']['url'] ? $settings['cta_btnlink1']['url'] : ''; ?>

                                            <li><a href="<?php echo $url1; ?>" class="white-btn" <?php echo esc_attr($target1); ?> <?php echo esc_attr($nofollow1); ?> >
                                                <div class="icon"><i class="fa-solid fa-phone"></i></div>
                                                <p class="text-capitalize"><?php echo $settings['cta_btntxt1']; ?></p>
                                            </a></li>
                                            <?php endif; ?>

                                            <?php if ( ! empty($settings['cta_btntxt2']) ) :
                                            $target2   = $settings['cta_btnlink2']['is_external'] ? 'target="_blank"' : '';
                                            $nofollow2 = $settings['cta_btnlink2']['nofollow'] ? 'rel="nofollow"' : '';
                                            $url2      = $settings['cta_btnlink2']['url'] ? $settings['cta_btnlink2']['url'] : ''; ?>

                                            <li><a href="<?php echo esc_url($url2); ?>" class="blue-btn" <?php echo esc_attr($target2); ?> <?php echo esc_attr($nofollow2); ?> >
                                                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                                                <p class="text-capitalize"><?php echo $settings['cta_btntxt2']; ?></p>
                                            </a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- right side -->
                            <div class="col-md-6">
                                <div class="cta-content">
                                    <?php if ( ! empty($settings['cta_des']) ) : ?>
                                    <p><?php echo $settings['cta_des']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  <!-- end cta -->
            </div>
        </section>
  
	<?php 
		endif;
	}

    private function get_post_categories() {
        $categories = get_categories([
            'taxonomy'   => 'category', // Use 'category' for default post categories
            'hide_empty' => false,
        ]);
    
        $category_options = ['all' => 'All Categories'];
    
        foreach ($categories as $category) {
            $category_options[$category->slug] = $category->name;
        }
    
        return $category_options;
    }
    
    

}
