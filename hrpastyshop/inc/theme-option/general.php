<?php
/**
 *  @package hrpastyshop
 * 
 *  General Theme Option
 */
?>

<div class="hr_general_body PrimaryBg p-round mt-2 mr-2">
    <div class="container">
        <?php 
            _e('<h1> General Option</h1>', 'hrpasty');
            _e('<p>Theme General Option is Here</p>', 'hrpasty'); ?>
        <!-- Form for Content -->
        <div class="general_form">
            <form action="options.php" method="post" class="mt-2">
                <?php wp_nonce_field('update-options');  //this one is for wp security ?>

                <label for="header-title"><?php _e('Header Title', 'hrpasty'); ?></label>
                <input type="text" name="header-title" id="header-title" value="<?php echo get_option('header-title'); ?>" placeholder="Header Title Here" required>

                <label for="header-desc1"><?php _e('Header Description One', 'hrpasty'); ?></label>
                <input type="text" name="header-desc1" id="header-desc1" value="<?php echo get_option('header-desc1'); ?>" placeholder="Header Description One Here" required>

                <label for="header-desc2"><?php _e('Header Description Two', 'hrpasty'); ?></label>
                <input type="text" name="header-desc2" id="header-desc2" value="<?php echo get_option('header-desc2'); ?>" placeholder="Header Description Two Here" required>

                <label for="header-bgimg"><?php _e('Header Background Image', 'hrpasty'); ?></label>
                <div class="left_buttons">
                    <input type="button" id="header-bgimg" class="d-block mt-2" value="<?php _e('Insert Image', 'hrpasty'); ?>" >
                    <input type="button" id="header-removeimg" class="d-block mt-2" value="<?php _e('Remove Image', 'hrpasty'); ?>" >
                </div>
                <?php $headerimg = get_option('header-bgimg'); ?>
                <input type="hidden" id="headerbg" name="header-bgimg" value="<?php echo $headerimg; ?>">
                <div class="headerbgimg d-in-block mt-2" style="background-image: url('<?php echo $headerimg; ?>');"></div>

                <input type="hidden" name="action" value="update">
                <input type="hidden" name="page_options" value="header-title, header-desc1, header-desc2, header-bgimg"> <!-- Here all name text -->
                <input type="submit" name="submit" id="submit" class="hr_button d-block mt-2" value="<?php _e('Save Changes', 'hrpasty'); ?>">
                <!-- wp default submit (it work fine also) 
                <?php submit_button('Submit Form', 'class_name'); ?> -->
            </form>

        </div>
        <!-- About the Author -->
        <div class="about_author">
            <div class="author_theme">
                <h2 class="center PrimaryColor"><?php _e('HR Pasty Shop', 'hrpasty'); ?></h2>
            </div>
            <div class="about_author_link center">
                <p class="d-in-block"><?php _e('Created By', 'hrpasty'); ?> <h3 class="d-in-block"><a href="http://habibcoder.com" target="_blank"><?php _e('HabibCoder', 'hrpasty'); ?></a></h3></p>
            </div>
        </div>
    </div>
</div>