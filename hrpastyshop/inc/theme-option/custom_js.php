<?php
/**
 * @package hrpastyshop
 * 
 * Custom JavaScript Theme Option
 */
?>

<div class="hr_custom_js p-round mt-2 mr-2 PrimaryBg">
    <div class="container">
        <div class="custom-js-form">
        <?php _e('<h1> Custom JavaScript Option </h1>', 'hrpasty'); ?>
            <form action="options.php" method="post">
                <?php wp_nonce_field('update-options');  // wp security ?> 

                <label for="custom-js" class="d-block"><?php _e('Custom JavaScript', 'hrpasty'); ?></label>
                <textarea name="custom-js" id="custom-js" placeholder="Custom JavaScript Code Here (You should start jQuery before for jQuery script)"><?php echo get_option('custom-js'); ?></textarea>

                <input type="hidden" name="action" value="update">
                <input type="hidden" name="page_options" value="custom-js">
                <input type="submit" class="hr_button d-block mt-2" value="<?= _e('Save Changes', 'hrpasty'); ?>">
            </form>
        </div>
    </div>
</div>
