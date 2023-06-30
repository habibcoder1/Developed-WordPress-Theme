<?php 
	if(!defined('ABSPATH')){
		exit; // Exit if accessed directly.
	}
?>
	<!-- ====================
		Footer Area Start
	====================  -->

	<footer class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-5">
					<div class="footerleft-menu">
						<?php wp_nav_menu(array(
							'theme_location' => 'hrpstfmenu1',
							'container'      => '',
						)); ?>
						
					</div>
				</div>
				<div class="col-md-2 col-sm-2">
					<div class="footer-logo">
						<a href="<?php echo home_url(); ?>"><?php echo get_theme_mod('hr_footer_logo'); ?></a>
					</div>
				</div>
				<div class="col-md-5 col-sm-5">
					<div class="footerright-menu">
						<?php wp_nav_menu(array(
							'theme_location' => 'hrpstfmenu2',
							'container'      => '',
						)); ?>
						
					</div>
				</div>
				<!-- Copyright Text -->
				<div class="copyright-text">
					<p><?php echo get_theme_mod('hr_footer_copyright'); ?></p>
				</div>
			</div>
		</div>
		<!-- Scroll Top -->
		<?php if(get_theme_mod('hr_scrolltop_hideshow') == 'show') : ?>
		<div class="scroll-top" id="kicu">
			<span><?php _e('Go Up', 'hrpasty'); ?></span>
			<i class="fas fa-chevron-up"></i>
		</div>
		<?php endif; ?>
	</footer>

	<!--====================
		Footer Area End
	===================  -->



	<!-- JavaScript -->
	<script>
		
		// Preloader
		let loader = document.getElementById('preloader');
		window.addEventListener('load', function(){
			loader.style.display = 'none'
		});

		// Sticky header 
		window.addEventListener("scroll", function(){
			let sheader = document.querySelector(".header-area .top-header");
			sheader.classList.toggle("sticky-header", window.scrollY > 70);
		});

		// Dark/Light Mode
		let darkIcon = document.querySelector('.dark_light i');
		darkIcon.addEventListener('click', () => {
			darkIcon.classList.toggle('fa-sun');
			darkIcon.classList.toggle('fa-moon');
			document.body.classList.toggle('dark_theme');
		});
		window.addEventListener('load', () => {
			if (document.body.classList.contains('dark_theme')) {
				darkIcon.classList.add('fa-sun');
			}else{
				darkIcon.classList.add('fa-moon');
			}
		});
		
	</script>
	</div>  <!-- ///////////////// Website Layout -->

	<?php wp_footer(); ?>
</body>
</html>