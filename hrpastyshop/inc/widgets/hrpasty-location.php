<?php 
/**
 *  HR Pasty Location Widget Development
 */

class hrpasty_address extends WP_Widget{
    // for frontend
    public function __construct(){
        parent::__construct('hrpasty_address', 'HR Pasty Address', array(
            'description'  => __('HR Pasty Address', 'hrpasty'),
        ));
        
    }

    // for backend
    public function widget($args, $instance){
        $hrltitle      = $instance['title'];
        $hrlmap        = $instance['map'];
        $hrlfirstline  = $instance['firstline'];
        $hrlsecondline = $instance['secondline'];
        ?>

        <?php echo $args['before_widget']; ?>
        <?php echo $args['before_title']; ?> <?php echo $hrltitle; ?> <?php echo $args['after_title']; ?>

        <div class="widget-content">
            <div class="location-map">
                <?php echo $hrlmap; ?>
            </div>
            <h5 class="address text-capitalize">location:</h5>
            <p><?php echo $hrlfirstline; ?> </p>
            <p><?php echo $hrlsecondline; ?> </p>
        </div>

        <?php echo $args['after_widget']; ?>

    <?php 
    }

    // for form
    public function form($instance){
        $hrltitle      = $instance['title'];
        $hrlmap        = $instance['map'];
        $hrlfirstline  = $instance['firstline'];
        $hrlsecondline = $instance['secondline'];
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">HR Pasty Address Title</label>
            <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $hrltitle; ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('map'); ?>">Map Iframe Code Here</label>
            <textarea class="widefat" name="<?php echo $this->get_field_name('map'); ?>" id="<?php echo $this->get_field_id('map'); ?>" cols="70" rows="5"><?php echo $hrlmap; ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('firstline'); ?>">Address First Line</label>
            <input type="text" name="<?php echo $this->get_field_name('firstline'); ?>" id="<?php echo $this->get_field_id('firstline'); ?>" value="<?php echo $hrlfirstline; ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('secondline'); ?>">Address Second Line</label>
            <input type="text" name="<?php echo $this->get_field_name('secondline'); ?>" id="<?php echo $this->get_field_id('secondline'); ?>" value="<?php echo $hrlsecondline; ?>">
        </p>

    <?php 
    }
}