<!DOCTYPE html>
<html <?php global $hrfitness; language_attributes(); ?> >
<head>
	<!-- Required Meta Data -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon Icon -->
	<link rel="shortcut icon" href="<?php echo $hrfitness['hrfitnessfavicon']['url']; ?>" type="images/x-icon">

	<!-- [if It ie 9]> <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif] -->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<!-- ==================
		Preloader Area
	=================== -->

	<div id="preloader"></div>


	<!-- ========================
		Header Area Start
	========================= -->

	<header class="header-area" id="header-area" style="background-image: url('<?php echo $hrfitness['hrfitnessbgimg']['url']; ?>')">
		<div class="top-header">
			<div class="row">
				<div class="menu-area col-md-8 col-sm-6">
					<!-- Responsive Menu Bar -->
					<div class="bar">
						<a href="#"><i class="fas fa-bars"></i></a>
					</div>
					<!-- Main Logo -->
					<div class="main-logo">
						<a href="<?php echo home_url(); ?>" class="navbar-brand"><?php echo $hrfitness['hrfitnesslogo']; ?></a>
					</div>
					<!-- Main Menu -->
					<nav class="main-menu">
						<?php 
						wp_nav_menu(array(
							'theme_location'  => 'hrfitness-mleftmenu',
							'container'       => ''
						));
						?>

					</nav>
				</div>
				<!-- Register Area -->
				<div class="register-area col-md-4 col-sm-6">

					<ul class="text-end">
						<!-- right menu -->
						<?php 
							wp_nav_menu(array(
								'theme_location' => 'hrfitness-mrightmenu',
								'container'      => '',
								'items_wrap'     => '<li>%3$s</li>',
							));
						?>
					</ul>
				</div>
			</div>
		</div>
		<!-- Call To Action -->
		<div class="hero-area">
			<div class="container">
				<div class="row">
					<div class="hero-title">
						<h1><?php echo $hrfitness['hrfithtitle1']; ?> <span><?php echo $hrfitness['hrfithtitle2']; ?></span></h1>
					</div>
					<div class="hero-content">
						<p><?php echo $hrfitness['hrfitheroshortdesc']; ?></p>
					</div>
					<div class="hero-btn">
						<a class="text-uppercase button" href="<?php echo home_url(); ?>/<?php echo $hrfitness['hrfitherobtnlink']; ?>"><?php echo $hrfitness['hrfitherobtntext']; ?></a>
					</div>
				</div>
			</div>			
		</div>

	</header>			

	<!-- ========================
		Header Area End
	========================= -->