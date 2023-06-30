<?php
/** 
 * @package hrpastyshop
 * 
 * Login Dashboard
 */

// login header img change
add_action('login_enqueue_scripts', 'login_logo_change');
function login_logo_change(){ ?>

	<style>
		/*Logo Image*/
		body.login #login h1 a{
			background-image: url('<?php echo get_theme_mod('hr_login_logo'); ?>');
		}
		/*BG Image*/
		body.login{
		    background: url('<?php echo get_theme_mod('hr_login_bgimg'); ?>');
		}
		/*Primary Color*/
		:root{
		    --loginPrimary: <?php echo get_theme_mod('hr_login_primary_color'); ?>;
		}
		/*Secondary Color*/
		:root{
			--loginSecondary: <?php echo get_theme_mod('hr_login_secondary_color'); ?>;
		}
	</style>

	<?php
};

// login header image url change
add_filter('login_headerurl', 'login_headerurl_change');
function login_headerurl_change(){
	return home_url();
};

