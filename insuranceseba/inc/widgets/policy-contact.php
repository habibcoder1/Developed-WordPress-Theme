<?php 
/**
 * @package Insurance Seba
 * 
 * Policy Contact Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} 

class iseba_policy_contact extends WP_Widget{
    // backend
    public function __construct(){
        parent::__construct('iseba_policy_contact', 'Insurance Seba Contact', array(
            'description' => __('Insurance Seba Contact Details', 'insurance-seba')
        ));
    }
    // frontend
    public function widget($args, $instance){
        $ipsphone     = $instance['phone'];
		$ipsmessenger = $instance['messenger'];
		$ipswhatsapp  = $instance['whatsapp'];
        ?>
        <!-- contact details -->
		<div class="visit-details text-center my-3 sm:mx-28 md:mx-0 xl:mx-16">
			<p class="text-lg"><?php _e('For more about DPS', 'insurance-seba'); ?></p>
			<ul class="contact-link border-b-2 border-[#333] flex justify-center md:block lg:flex mt-1 lg:justify-center">
				<li class="text-lg border-r-2 border-[#333] pr-2"><i class="fa-solid fa-phone text-[13px] px-1"></i><?php echo $ipsphone; ?></li>
				<li class="border-r-2 border-[#333] px-3"><a href="http://facebook.com/<?php echo $ipsmessenger; ?>" class="text-lg" title="Company Messenger" target="_blank"><img class="w-7" src="<?php echo get_template_directory_uri(); ?>/assets/img/messenger.png" alt="messenger image"> </a></li>
				<li class="pl-2"><a href="https://wa.me/<?php echo $ipswhatsapp; ?>" class="text-lg" title="Company WhatsApp" target="_blank"><img class="w-7" src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.png" alt="whatsapp image"> </a></li>
			</ul>   
		</div>
    <?php
    }
    // form
    public function form($instance){
        $ipsphone     = $instance['phone'];
		$ipsmessenger = $instance['messenger'];
		$ipswhatsapp  = $instance['whatsapp']; ?>

        <p>
            <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone Number', 'insurance-seba'); ?></label>
            <input type="text" placeholder="phone number" name="<?php echo $this->get_field_name('phone'); ?>" id="<?php echo $this->get_field_id('phone'); ?>" value="<?php echo $ipsphone; ?>">
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('messenger'); ?>"><?php _e('Facebook Username for messenger', 'insurance-seba'); ?></label>
            <input type="text" placeholder="page or id username for messenger" name="<?php echo $this->get_field_name('messenger'); ?>" id="<?php echo $this->get_field_id('messenger'); ?>" value="<?php echo $ipsmessenger; ?>">
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('whatsapp'); ?>"><?php _e('Whatsapp Mobile Number', 'insurance-seba'); ?></label>
            <input type="text" placeholder="whatsApp number" name="<?php echo $this->get_field_name('whatsapp'); ?>" id="<?php echo $this->get_field_id('whatsapp'); ?>" value="<?php echo $ipswhatsapp; ?>">
        </p>

    <?php
    }
}
