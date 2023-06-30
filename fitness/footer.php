	

	<!-- =============================
		Footer Trainer Area Start
	============================== -->
	<?php global $hrfitness; ?>
	<footer class="footer-area">
		<div class="container">
			<div class="row">
				<!-- Footer Details -->
				<div class="footer-details col-md-4">
					<?php 
					dynamic_sidebar('hrfitness_footer1');
					?>

					
					<!-- Footer Social Icons -->
					<div class="footer-social">
						<h5><?php echo $hrfitness['hrfitftsocialtitle']; ?>:</h5>
						<ul>
							<?php if($hrfitness['hrfitfooterfb']) : ?>
							<li><a href="http://facebook.com/<?php echo $hrfitness['hrfitfooterfb']; ?>" target="_blank" ><i title="Facebook" class="fab fa-facebook-f"></i></a></li>
							<?php endif; ?>
							<?php if($hrfitness['hrfitfootertwitt']) : ?>
							<li><a href="http://twitter.com/<?php echo $hrfitness['hrfitfootertwitt']; ?>" target="_blank"><i title="Twitter" class="fab fa-twitter"></i></a></li>
							<?php endif; ?>
							<?php if($hrfitness['hrfitfooterinsta']) : ?>
							<li><a href="http://instagram.com/<?php echo $hrfitness['hrfitfooterinsta']; ?>" target="_blank"><i title="Instagram" class="fab fa-instagram"></i></a></li>
							<?php endif; ?>
							<?php if($hrfitness['hrfitfooterpint']) : ?>
							<li><a href="http://pinterest.com/<?php echo $hrfitness['hrfitfooterpint']; ?>" target="_blank"><i title="Pinterest" class="fab fa-pinterest"></i></a></li>
							<?php endif; ?>
							<?php if($hrfitness['hrfitfooterbehan']) : ?>
							<li><a href="http://behance.net/<?php echo $hrfitness['hrfitfooterbehan']; ?>" target="_blank"><i title="Behance" class="fab fa-behance"></i></a></li>
							<?php endif; ?>
							<?php if($hrfitness['hrfitfooteryt']) : ?>
							<li><a href="http://youtube.com/<?php echo $hrfitness['hrfitfooteryt']; ?>" target="_blank"><i title="Youtube" class="fab fa-youtube"></i></a></li>
							<?php endif; ?>
							<?php if($hrfitness['hrfitfooterdribble']) : ?>
							<li><a href="http://dribbble.com/<?php echo $hrfitness['hrfitfooterdribble']; ?>" target="_blank"><i title="Dribbble" class="fab fa-dribbble"></i></a></li>
							<?php endif; ?>
							<?php if($hrfitness['hrfitfootertumblr']) : ?>
							<li><a href="http://tumblr.com/<?php echo $hrfitness['hrfitfootertumblr']; ?>" target="_blank"><i title="Tumblr" class="fab fa-tumblr"></i></a></li>
							<?php endif; ?>
						</ul>
					</div>
					<!-- Footer Form -->
					<div class="footer-form">
						<?php 
						dynamic_sidebar('hrfitness_footersubscrbe');
						?>

					</div>
				</div>

				<!-- Blog Area -->
				<div class="blog col-md-4">
					<?php 
					dynamic_sidebar('hrfitness_footer2');
					?>

					
				</div>

				<!-- Instagram Area -->
				<div class="instagram col-md-4">
					<?php 
					dynamic_sidebar('hrfitness_footer3');
					?>

					
				</div>

				<!-- Copyright Area -->
				<div class="copyright-area text-center">
					<p class="text-light text-capitalize"><?php echo $hrfitness['hrfitnesscopyright']; ?></p>
				</div>
				<!-- Scroll Up Area -->
				<div class="scroll-up text-end">
					<a href="#"><i title="Go Up" data-bs-toggle="tooltip" id="scrollup" class="fas fa-angle-up"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- ===========================
		Footer Trainer Area End
	============================ -->

	

	<!-- Javascript Files -->

	<script>
		
		/* ================
			 Preloader 
		================ */
		var loader = document.getElementById('preloader');

		window.addEventListener('load', function(){
			loader.style.display = 'none';
		});


	</script>

	<?php wp_footer(); ?>
</body>
</html>