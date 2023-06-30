<?php 
/**
 * @package Insurance Seba
 * 
 * Notice Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} 

class iseba_notice extends WP_Widget{
    // for frontend
    public function __construct(){
        parent::__construct('iseba_notice', 'Insurance Notice', array(
            'description' => __('Insurance Notice Summary', 'insurance-seba'),
        ));
    }

    // font backend
    public function widget($args, $instance){
        $ntitle = $instance['title'];
        $none   = $instance['noticeone'];
        $ntwo   = $instance['noticetwo'];
        $nthree = $instance['noticethree'];
        $nfour  = $instance['noticefour'];
        $nfive  = $instance['noticefve'];
        $nurl   = $instance['noticeurl'];

        echo $args['before_widget'];
        echo $args['before_title']; echo $ntitle;  echo $args['after_title']; ?>
        <!-- widget -->
        <div class="notice-details bg-white">
            <ul class="w-[90%] mx-auto">
                <li class="block text-center transition-all py-2 hover:text-[#DD3627]"><?php echo $none; ?></li>
                <li class="block text-center transition-all py-2 hover:text-[#DD3627]"><?php echo $ntwo; ?></li>
                <li class="block text-center transition-all py-2 hover:text-[#DD3627]"><?php echo $nthree; ?></li>
                <li class="block text-center transition-all py-2 hover:text-[#DD3627]"><?php echo $nfour; ?></li>
                <li class="block text-center transition-all py-2 hover:text-[#DD3627] !border-transparent"><?php echo $nfive; ?></li>
            </ul>
        </div>
        <!-- widget button -->
        <div class="more-btn mt-4">
            <a href="<?php echo $nurl; ?>" class="isebaButton"><?php _e('more latest news', 'insurance-seba'); ?></a>
        </div>
        <?php
        echo $args['after_widget'];

    }

    // for form
    public function form($instance){
        $ntitle = $instance['title'];
        $none   = $instance['noticeone'];
        $ntwo   = $instance['noticetwo'];
        $nthree = $instance['noticethree'];
        $nfour  = $instance['noticefour'];
        $nfive  = $instance['noticefve'];
        $nurl   = $instance['noticeurl']; ?>

        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Notice Board Title', 'insurance-seba'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $ntitle; ?>">
        </p>
        <p><?php _e('Notice List', 'insurance-seba'); ?></p>
        <p>
            <input type="text" placeholder="Notice One" name="<?php echo $this->get_field_name('noticeone'); ?>" id="<?php echo $this->get_field_id('noticeone'); ?>" value="<?php echo $none; ?>">
        </p>
        <p>
            <input type="text" placeholder="Notice Two" name="<?php echo $this->get_field_name('noticetwo'); ?>" id="<?php echo $this->get_field_id('noticetwo'); ?>" value="<?php echo $ntwo; ?>">
        </p>
        <p>
            <input type="text" placeholder="Notice Three" name="<?php echo $this->get_field_name('noticethree'); ?>" id="<?php echo $this->get_field_id('noticethree'); ?>" value="<?php echo $nthree; ?>">
        </p>
        <p>
            <input type="text" placeholder="Notice Four" name="<?php echo $this->get_field_name('noticefour'); ?>" id="<?php echo $this->get_field_id('noticefour'); ?>" value="<?php echo $nfour; ?>">
        </p>
        <p>
            <input type="text" placeholder="Notice Five" name="<?php echo $this->get_field_name('noticefve'); ?>" id="<?php echo $this->get_field_id('noticefve'); ?>" value="<?php echo $nfive; ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('noticeurl'); ?>"><?php _e('More Post Button Link', 'insurance-seba'); ?></label>
            <input type="url" placeholder="Button Link (full url)" name="<?php echo $this->get_field_name('noticeurl'); ?>" id="<?php echo $this->get_field_id('noticeurl'); ?>" value="<?php echo $nurl; ?>">
        </p>
        
        <?php
    }
}