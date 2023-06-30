<?php 
/**
 * @package Insurance Seba
 * 
 * Policy Summary Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} 


class iseba_policy_summary extends WP_Widget{
	// backend
	public function __construct(){
		parent::__construct('iseba_policy_summary', 'Insurance Policy Summary', array(
			'description' => __('Insurance Policy Summary', 'insurance-seba')
		));
	}
	// frontend
	public function widget($args, $instance){
		$ipstitle     = $instance['title'];
		$ipsage       = $instance['age'];
		$ipsamount    = $instance['amount'];
		$ipsterm      = $instance['term'];
		$ipsbenefit   = $instance['benefit'];
		$ipslapse     = $instance['lapse'];
		$ipssurrender = $instance['surrender'];
		$ipssuicide   = $instance['suicide'];
		$ipsfacebook  = $instance['facebook'];
		$ipstwitter   = $instance['twitter'];
		$ipslinkedin  = $instance['linkedin'];

		echo $args['before_widget'];
		echo $args['before_title']; echo $ipstitle;  echo $args['after_title']; ?>

		<!-- policy summary -->
		<div class="policy-details mx-5 md:mx-2 lg:mx-5 my-2">
			<p class="capitalize mb-1 text-base"><span class="font-bold text-lg"><?php _e('Insurance Age', 'insurance-seba'); ?></span>: <?php echo $ipsage; ?></p>
			<p class="capitalize mb-1 text-base"><span class="font-bold text-lg"><?php _e('Face Amount', 'insurance-seba'); ?></span>: <?php echo $ipsamount; ?></p>
			<p class="capitalize mb-1 text-base"><span class="font-bold text-lg"><?php _e('Policy Term', 'insurance-seba'); ?></span>: <?php echo $ipsterm; ?></p>
			<p class="capitalize text-base"><span class="font-bold text-[17px]"><?php _e('Deatch Benefit', 'insurance-seba'); ?></span>: <?php echo $ipsbenefit; ?></p>
		</div>
		<!-- policy others content -->
		<div class="plicy-others mt-16 mx-3 md:mx-1 lg:mx-3 bg-red-200 border-1 border-[#ccc]">
			<p class="capitalize border-b-2 border-[#ccc] mx-2 text-base py-2"><span class="font-bold text-lg"><?php _e('Policy Lapse', 'insurance-seba'); ?></span>: <?php echo $ipslapse; ?></p>
			<p class="capitalize border-b-2 border-[#ccc] mx-2 text-base py-2"><span class="font-bold text-lg"><?php _e('Policy surrender', 'insurance-seba'); ?></span>: <?php echo $ipssurrender; ?></p>
			<p class="capitalize mx-2 text-base py-2"><span class="font-bold text-lg"><?php _e('exceptions suicide', 'insurance-seba'); ?></span>: <?php echo $ipssuicide; ?></p>
		</div>
		<hr class="my-3 mx-3">
		<!-- social icons -->
		<ul class="social pb-2 pl-2">
			<li><a href="https://facebook.com/<?php echo $ipsfacebook; ?>" target="_blank"><i class="fa-brands fa-facebook-f p-2 transition-all duration-300 hover:text-[#DD3627]"></i></a></li>
			<li><a href="https://twitter.com/<?php echo $ipstwitter; ?>" target="_blank"><i class="fa-brands fa-twitter p-2 transition-all duration-300 hover:text-[#DD3627]"></i></a></li>
			<li><a href="https://linkedin.com/in/<?php echo $ipslinkedin; ?>" target="_blank"><i class="fa-brands fa-linkedin-in p-2 transition-all duration-300 hover:text-[#DD3627]"></i></a></li>
		</ul>
		<?php
		echo $args['after_widget'];
	}
	// form
	public function form($instance){
		$ipstitle     = $instance['title'];
		$ipsage       = $instance['age'];
		$ipsamount    = $instance['amount'];
		$ipsterm      = $instance['term'];
		$ipsbenefit   = $instance['benefit'];
		$ipslapse     = $instance['lapse'];
		$ipssurrender = $instance['surrender'];
		$ipssuicide   = $instance['suicide'];
		$ipsfacebook  = $instance['facebook'];
		$ipstwitter   = $instance['twitter'];
		$ipslinkedin  = $instance['linkedin']; ?>

		<p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Policy Summary Title', 'insurance-seba'); ?></label>
            <input type="text" placeholder="widget title" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $ipstitle; ?>">
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('age'); ?>"><?php _e('Insurance Age', 'insurance-seba'); ?></label>
            <input type="text" placeholder="insurance duration" name="<?php echo $this->get_field_name('age'); ?>" id="<?php echo $this->get_field_id('age'); ?>" value="<?php echo $ipsage; ?>">
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('amount'); ?>"><?php _e('Face Amount', 'insurance-seba'); ?></label>
            <input type="text" placeholder="face amount" name="<?php echo $this->get_field_name('amount'); ?>" id="<?php echo $this->get_field_id('amount'); ?>" value="<?php echo $ipsamount; ?>">
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('term'); ?>"><?php _e('Policy Term', 'insurance-seba'); ?></label>
            <input type="text" placeholder="policy term" name="<?php echo $this->get_field_name('term'); ?>" id="<?php echo $this->get_field_id('term'); ?>" value="<?php echo $ipsterm; ?>">
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('benefit'); ?>"><?php _e('Detch Benefit', 'insurance-seba'); ?></label>
            <input type="text" placeholder="benefit text here" name="<?php echo $this->get_field_name('benefit'); ?>" id="<?php echo $this->get_field_id('benefit'); ?>" value="<?php echo $ipsbenefit; ?>">
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('lapse'); ?>"><?php _e('Policy Lapse', 'insurance-seba'); ?></label>
            <input type="text" placeholder="policy Lapse" name="<?php echo $this->get_field_name('lapse'); ?>" id="<?php echo $this->get_field_id('lapse'); ?>" value="<?php echo $ipslapse; ?>">
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('surrender'); ?>"><?php _e('Policy Surrender', 'insurance-seba'); ?></label>
            <input type="text" placeholder="policy surrender" name="<?php echo $this->get_field_name('surrender'); ?>" id="<?php echo $this->get_field_id('surrender'); ?>" value="<?php echo $ipssurrender; ?>">
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('suicide'); ?>"><?php _e('Exceptions Suicide', 'insurance-seba'); ?></label>
            <input type="text" placeholder="war or aids" name="<?php echo $this->get_field_name('suicide'); ?>" id="<?php echo $this->get_field_id('suicide'); ?>" value="<?php echo $ipssuicide; ?>">
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook Username', 'insurance-seba'); ?></label>
            <input type="text" placeholder="facebook username" name="<?php echo $this->get_field_name('facebook'); ?>" id="<?php echo $this->get_field_id('facebook'); ?>" value="<?php echo $ipsfacebook; ?>">
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter Username', 'insurance-seba'); ?></label>
            <input type="text" placeholder="twitter username" name="<?php echo $this->get_field_name('twitter'); ?>" id="<?php echo $this->get_field_id('twitter'); ?>" value="<?php echo $ipstwitter; ?>">
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('Linkedin Username', 'insurance-seba'); ?></label>
            <input type="text" placeholder="linkedIn username" name="<?php echo $this->get_field_name('linkedin'); ?>" id="<?php echo $this->get_field_id('linkedin'); ?>" value="<?php echo $ipslinkedin; ?>">
        </p>

	<?php	
	}
}

