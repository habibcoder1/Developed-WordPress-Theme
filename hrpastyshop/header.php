<?php 
	if(!defined('ABSPATH')){
		exit; // Exit if accessed directly.
	}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Meta Tag -->
	<meta charset="<?php echo bloginfo('charset'); ?>"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon Icon  //Default will be first priority (it's automatic) -->
	<link rel="shortcut icon" href="<?php echo get_theme_mod('hr_favicon'); ?>" type="image/x-icon">
	
	<!-- [if It ie 9]> <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif] -->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!--====================
		Website Layout
	===================  -->
	<div class="website_layout" <?php if(get_theme_mod('hr_webiste_layout') == 'box' ) : ?> style=" width: 90%; margin: auto;" <?php endif; ?> >
		

	<!--====================
		Preloader
	===================  -->
	<?php if(get_theme_mod('hr_preloader_onoff') == 'visible') : ?>
	<div id="preloader"></div>
	<?php endif; ?>
	

	<!--====================
		Header Area Start
	===================  -->
	<header class="header-area">
		<!-- Logo/Menu/Social Icons -->
		<div class="top-header" id="<?php echo get_theme_mod('hr_menu_options'); ?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-4 col-sm-4">
						<div class="main-logo">
							<a href="<?php echo home_url(); ?>"><?php echo get_theme_mod('hr_logo_text'); ?></a>
						</div>
					</div>
					<!-- Menu For Desktop/Laptop -->
					<div class="col-lg-8 menufordesktop">
						<div class="main-menu">
							<nav>
								<?php wp_nav_menu( array(
									'theme_location'  => 'hrpstmmenu',
									'container'       => '',
									'menu_class'      => 'mainmenu-firstul  text-center',
									// here text-center class for bootstrap
								) ); ?>
							</nav>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4">
						<div class="header-socialicon">
							<ul>
								<!-- Dark/Light Mode -->
								<?php if(get_theme_mod('hr_darklight') == 'on') : ?>
								<li class="dark_light" title="Dark/Light Mode">
									<i class="fa-solid fa-moon"></i>
								</li>
								<?php endif; ?>
								<!-- Twitter -->
								<?php if(get_theme_mod('hr_twitter')) : ?>
								<li><a href="http://twitter.com/<?php echo get_theme_mod('hr_twitter'); ?>" target="_blank"><i class="fab fa-twitter" title="Twitter"></i></a></li>
								<?php endif; ?>
								<!-- Facebook -->
								<?php if(get_theme_mod('hr_facebook')) : ?>
								<li><a href="http://facebook.com/<?php echo get_theme_mod('hr_facebook'); ?>" target="_blank"><i class="fab fa-facebook-f" title="Facebook"></i></a></li>
								<?php endif; ?>
								<!-- Instagram -->
								<?php if(get_theme_mod('hr_instagram')) : ?>
								<li><a href="http://instagram.com/<?php echo get_theme_mod('hr_instagram'); ?>" target="_blank"><i class="fab fa-instagram" title="Instagram"></i></a></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
					<!-- Menu For Tablet/Mobile -->
					<div class="col-md-4 col-sm-4 menuicon">
						<div class="mobile-menuicon">
							<i class="fas fa-bars"></i>
						</div>
					</div>
					<div class="menuformobile">
						<div class="main-menu">
							<nav>
								<?php wp_nav_menu( array(
									'theme_location'  => 'hrpstmmenu',
									'container'       => '',
									'menu_class'      => 'mainmenu-firstul text-center',
									// here text-center class for bootstrap
								) ); ?>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>