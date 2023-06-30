<?php 
/**
 *  Populra Food Item Widget Development
 */

class hrpopular_foodwidget extends WP_Widget{
    // for backend
    public function __construct(){
        parent::__construct('hrpopular_foodwidget', 'HR Pasty Popular Food', array(
            'description'  => __('HR Pasty Popular Food Widget', 'hrpasty'),
        ));
    }

    // for frondend
    public function widget($args, $instance){
        $hrpastypftitle = $instance['title'];
        $hrpastypfcount = $instance['count'];
        ?>
        <?php echo $args['before_widget']; ?>

        <?php echo $args['before_title'];?> <?php echo $hrpastypftitle; ?>  <?php echo $args['after_title']; ?>

        <?php 
        $query = new WP_Query(array(
            'post_type'      => 'hrpasty-menus',
            'posts_per_page' => $hrpastypfcount,
        ));
        ?>
        <div class="row">
            <?php while($query->have_posts()) : $query->the_post(); ?>
            <div class="col-md-6">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                <a href="<?php the_permalink(); ?>"><h5><?php echo wp_trim_words(get_the_title(), 2, '.'); ?></h5></a>
            </div>
            <?php endwhile; ?>
        </div>

        <?php echo $args['after_widget']; ?>
        <?php 
    }

    // Widget Form
    public function form($instance){
        $hrpastypftitle = $instance['title'];
        $hrpastypfcount = $instance['count'];
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Widget Title Here</label>
            <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $hrpastypftitle; ?>" >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('count'); ?>">How Many Item Will Show</label>
            <input type="text" name="<?php echo $this->get_field_name('count'); ?>" id="<?php echo $this->get_field_id('count'); ?>" value="<?php echo $hrpastypfcount; ?>">
        </p>

    <?php 
    }
}

$hrpopular_foodwidget = new hrpopular_foodwidget();