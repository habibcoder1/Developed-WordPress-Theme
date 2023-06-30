<?php
/**
 *  @package hrpastyshop
 * 
 *  Custom CSS Theme Option
 */

?>

<div class="hr_custom_css p-round mt-2 mr-2 PrimaryBg">
    <div class="container">
        <div class="custom-css-form">
        <?php _e('<h1> Custom CSS Option </h1>', 'hrpasty'); ?>
            <form action="options.php" method="post">
                <?php wp_nonce_field('update-options');  // wp security ?> 

                <label for="custom-css" class="d-block"><?php _e('Custom CSS', 'hrpasty'); ?></label>
                <textarea name="custom-css" id="custom-css" placeholder="Custom CSS Code Here"><?php echo get_option('custom-css'); ?></textarea>

                <input type="hidden" name="action" value="update">
                <input type="hidden" name="page_options" value="custom-css">
                <input type="submit" class="hr_button d-block mt-2" value="<?= _e('Save Changes', 'hrpasty'); ?>">
            </form>
        </div>
    </div>
</div>


