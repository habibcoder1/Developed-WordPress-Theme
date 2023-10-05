<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * FAQ WITL Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 


class Witl_Witl_Faq_Widget_Dev extends \Elementor\Widget_Base {
	// any name here. it will be used in code
	public function get_name() {
		return 'witl-witl-faq';
	}
	// widget title
	public function get_title() {
		return esc_html__( 'WITL FAQ', 'witl' );
	}
	// elementor icons & fontawesome icons allow here
	public function get_icon() {
		return 'eicon-progress-tracker';
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
		return [ 'witl', 'faq', 'witl-faq' ];
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
			'witl-faq',  //any text here (id)
			[
				'label' => esc_html__( 'FAQ Details', 'witl' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,   //content tab
			]
		);
        // title
        $this->add_control(
			'faq_title',  //any text here (id)
			[
                'label'		  => esc_html__( 'FAQ Title', 'witl' ),
				'placeholder' => esc_html__( 'Title is here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXT,  //text
				'label_block' => true,
				'default'     => esc_html__('Frequently Asked Questions', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // content
        $this->add_control(
			'faq_description',  //any text here (id)
			[
                'label'		  => esc_html__( 'FAQ Description', 'witl' ),
				'placeholder' => esc_html__( 'Description text here', 'witl' ),
				'type' 		  => \Elementor\Controls_Manager::TEXTAREA,  //text
				'label_block' => true,
				'default'     => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit,', 'witl'),
				'dynamic'     => [
					'active'  => true,  //for dynamic tag option
				],
			]
		);
        // repeater
		$this->add_control(
			'witl-faq-list',
			[
				'label'  => esc_html__( 'FAQ Lists', 'witl' ),
				'type'   => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					// question
                    [
						'name'        => 'faq_question',
						'label'       => esc_html__( 'Question', 'witl' ),
						'placeholder' => esc_html__( 'Question is here', 'witl' ),
						'type' 		  => \Elementor\Controls_Manager::TEXT,
						'label_block' => true,
						'default' 	  => esc_html__( 'My Budget Is&nbsp; Limited, Anything Can You Help?' , 'witl' ),
                        'dynamic'     => [
                            'active'  => true,  //for dynamic tag option
                        ],
					],	
		            //  ans
					[
						'name'        => 'faq_ans',
						'label'       => esc_html__( 'Answer', 'witl' ),
						'placeholder' => esc_html__( 'Answer is here', 'witl' ),
						'type' 		  => \Elementor\Controls_Manager::TEXTAREA,
						'label_block' => true,
						'default' 	  => esc_html__( 'Listen: We are already working at the most affordable price. Still, if you see you are unable to pay the expense. Openly, talk to our project director and see how he can optimize your requirements and budget so you can get started today.&nbsp;' , 'witl' ),
                        'dynamic'     => [
                            'active'  => true,  //for dynamic tag option
                        ],
					],				
				],
				'default' => [
					[
						'faq_question'   => esc_html__( 'Faq #1', 'witl' ),
					],
				],
				'title_field' => '{{{ faq_question }}}',
			]
		);
        
        

   
		$this->end_controls_section(); //end content controls

    } // end register control

	protected function render(){
		$settings = $this->get_settings_for_display();

		if ( ! empty($settings['witl-faq-list']) ) :
            $faqs       = $settings['witl-faq-list'];
            $total_faqs = count($faqs); ?>

        <section class="faq-area">
            <div class="container">
                <!-- all icons -->
                <div class="top-right_icon capsule-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capsule-icon.png" alt="capsule-icon">
                </div>
                <div class="bottom-left_icon capsule-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capsule-icon.png" alt="capsule-icon">
                </div>
                <div class="bottom-right_icon capsule-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capsule-icon.png" alt="capsule-icon">
                </div>
                <!-- section title, des -->
                <div class="section-title_des text-center">
                    <div class="title">
                        <?php if ( ! empty($settings['faq_title']) ) :  ?>
                            <h2 class="text-capitalize"><?php echo $settings['faq_title']; ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="description">
                        <?php if ( ! empty($settings['faq_description']) ) :  ?>
                            <p><?php echo $settings['faq_description']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- faq -->
                <div class="container-inner">
                    <div class="faq-question_ans">
                        <div class="row">
                            <!-- left faq -->
                            <div class="col-sm-12 col-md-6">
                                <div class="accordion witl-faqs witl-faq_left">
                                    <?php for ($i = 0; $i < 3 && $i < $total_faqs; $i++) : 
                                        $faq = $faqs[$i];
                                        $unique_id = 'witl-faq' . $i; //Generate unique ID ?>
                                        <!-- single faq -->
                                        <?php $show = $i == 0 ? 'show' : ''; ?>
                                        <div class="accordion-item single-faq">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($unique_id); ?>" aria-expanded="true" aria-controls="<?php echo esc_attr($unique_id); ?>">
                                                    <?php echo esc_html($faq['faq_question']); ?>
                                                </button>
                                            </h2>
                                            <div id="<?php echo esc_attr($unique_id); ?>" class="accordion-collapse collapse <?php echo $show; ?>">
                                                <div class="accordion-body">
                                                    <p><?php echo esc_html($faq['faq_ans']); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                    <!-- /////// faq for mobile -->
                                    <div class="faq-mobile d-md-none">
                                    <?php if($total_faqs > 3) :
                                        for ($i = 3; $i < $total_faqs; $i++) : 
                                        $faq = $faqs[$i]; 
                                        $unique_id = 'witl-faq' . $i; //Generate unique ID ?>
                                        <!-- single faq -->
                                        <div class="accordion-item single-faq">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($unique_id); ?>" aria-expanded="false" aria-controls="<?php echo esc_attr($unique_id); ?>">
                                                <?php echo esc_html($faq['faq_question']); ?>
                                                </button>
                                            </h2>
                                            <div id="<?php echo esc_attr($unique_id); ?>" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                <?php echo esc_html($faq['faq_ans']); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                            endfor;
                                        endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- right faq -->
                            <div class="col-sm-12 col-md-6 d-none d-md-block">
                                <div class="accordion witl-faqs witl-faq_right">  
                                <?php if($total_faqs > 3) :
                                        for ($i = 3; $i < $total_faqs; $i++) : 
                                        $faq = $faqs[$i]; 
                                        $unique_id = 'witl-faq' . $i; //Generate unique ID ?>
                                        <?php $show = $i == 3 ? 'show' : ''; ?>
                                        <!-- single faq -->
                                        <div class="accordion-item single-faq">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button  text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($unique_id); ?>" aria-expanded="false" aria-controls="<?php echo esc_attr($unique_id); ?>">
                                                <?php echo esc_html($faq['faq_question']); ?>
                                                </button>
                                            </h2>
                                            <div id="<?php echo esc_attr($unique_id); ?>" class="accordion-collapse collapse <?php echo $show; ?>">
                                                <div class="accordion-body">
                                                <?php echo esc_html($faq['faq_ans']); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                        endfor;
                                    endif; ?>
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
