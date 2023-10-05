<?php  
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * This template for developing services widget
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 


// extended WP_Widget class for widget devlopment
class witl_services_widget extends WP_Widget{
    // for frontend
    public function __construct(){
        parent::__construct('witl_services_widget', 'Witl Services', [
            'description' => __('Witl Services widget details', 'witl'),
        ]);
    }

    // font backend
    public function widget($args, $instance){
        $servicetitle = $instance['stitle'];
        $servicecount  = $instance['servicecount'];

        echo $args['before_widget'];
        echo $args['before_title']; echo $servicetitle;  echo $args['after_title']; ?>
        <!-- widget -->
        <?php 
            $witl_lposts = new WP_Query([
                'post_type'      => 'witl-service',
                'posts_per_page' => $instance['servicecount'],
                'order'          => 'ASC',
                'order_by'       => 'post',
            ]);
        ?>
        <?php 
        if($witl_lposts->have_posts()) :
            while( $witl_lposts->have_posts() ) : $witl_lposts->the_post(); ?>
            <div class="single-widget">
                <div class="title-des">
                    <div class="title">
                        <a href="<?php the_permalink(); ?>">
                            <h3 title="post title"><?php echo wp_trim_words( get_the_title(), 2, '' ); ?></h3>
                        </a>
                    </div>
                    <div class="short-des">
                        <p><?php echo wp_trim_words( get_the_content(), 5, '' ); ?></p>
                    </div>
                </div>
                <div class="thumbnail">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>
            </div>
            <?php 
            endwhile; wp_reset_postdata();
        endif; ?>

        <?php
        echo $args['after_widget'];

    }

    // for form
    public function form($instance){
        $servicetitle = $instance['stitle'];
        $servicecount  = $instance['servicecount']; ?>

        <p>
            <label for="<?php echo $this->get_field_id('stitle'); ?>"><?php _e('Services Title', 'witl'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('stitle'); ?>" id="<?php echo $this->get_field_id('stitle'); ?>" value="<?php echo $servicetitle; ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('servicecount'); ?>"><?php _e('How many post you want to show?', 'witl'); ?></label>
            <input type="text" placeholder="How many post" name="<?php echo $this->get_field_name('servicecount'); ?>" id="<?php echo $this->get_field_id('servicecount'); ?>" value="<?php echo $servicecount; ?>">
        </p>
        
        
        <?php
    }
}