<?php
/**
 *  Speech of MD Widget Development
 */

class hrpasty_speechmd extends WP_Widget{
    // for backend
    public function __construct(){
        parent::__construct('hrpasty_speechmd', 'HR Pasty Speech of MD', array(
            'description'  => __('HR Pasty Speech of MD', 'hrpasty'),
        ));
    }

    // for frontend
    public function widget($args, $instance){
        $hrspmdtitle   = $instance['title'];
        $hrspmdimage   = $instance['mdimg'];
        $hrspmdname    = $instance['mdname'];
        $hrspmdcontent = $instance['mdcontent'];
        ?>
        <?php echo $args['before_widget'] ?>
        <?php echo $args['before_title'] ?> <?php echo  $hrspmdtitle; ?>  <?php echo $args['after_title'] ?>

        <div class="widget-content">
            <img src="<?php echo $hrspmdimage; ?>" alt="<?php echo $hrspmdname; ?>">
            <h4 class="text-center my-2"><?php echo $hrspmdname; ?></h4>
            <p>
                <?php echo $hrspmdcontent; ?>
            </p>
        </div>

        <?php echo $args['after_widget'] ?>
        <?php 
    }

    // for form
    public function form($instance){
        $hrspmdtitle   = $instance['title'];
        $hrspmdimage   = $instance['mdimg'];
        $hrspmdname    = $instance['mdname'];
        $hrspmdcontent = $instance['mdcontent'];
        ?>

        <div id="hrpasty_mddetails">
            <div>
                <label for="<?php echo $this->get_field_id('title'); ?>">Speech of MD Title</label>
                <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $hrspmdtitle; ?>">
            </div>
            <div>
                <label for="<?php echo $this->get_field_id('mdimg'); ?>"><?php _e('Image of MD', 'hrpasty'); ?></label>
                <input type="hidden" class="mdimgainput" name="<?php echo $this->get_field_name('mdimg'); ?>" id="<?php echo $this->get_field_id('mdimg'); ?>" value="<?php echo $hrspmdimage; ?>">
                <img class="show_mdimg" src="<?php echo $hrspmdimage; ?>" alt="<?php echo esc_attr($hrspmdtitle); ?>">
                <input type="button" class="uploadmdimg" value="Upload Image">
                <input type="button" class="removemdimg" value="Remove Image">
            </div>
            <div>
                <label for="<?php echo $this->get_field_id('mdname'); ?>">Name of MD</label>
                <input type="text" name="<?php echo $this->get_field_name('mdname'); ?>" id="<?php echo $this->get_field_id('mdname'); ?>" value="<?php echo $hrspmdname; ?>">
            </div>
            <div>
                <label for="<?php echo $this->get_field_id('mdcontent'); ?>">Content of MD</label>
                <textarea class="widefat" name="<?php echo $this->get_field_name('mdcontent'); ?>" id="<?php echo $this->get_field_id('mdcontent'); ?>" cols="65" rows="6"><?php echo $hrspmdcontent; ?></textarea>
            </div>
        </div>

        

    <?php 
    }


};
