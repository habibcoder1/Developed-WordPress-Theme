<?php 
/**
 * @package Insurance Seba
 * 
 * Template for displaying Left Sidebar
 * */

if (!defined('ABSPATH')) {
	exit('you are a foolish');
} ?>

<!-- left sidebar -->
<div class="body-left">
	<!-- one widget section -->
	<div class="left_section-one bg-[#EEEEEE]">
		<div class="section-title">
			<h5 class="text-[15px] uppercase bg-[#EEEEEE] pl-1 py-1"><?php _e('life insurance', 'insurance-seba'); ?></h5>
		</div>
		<?php  
		$lfquery = new WP_Query(array(
			'post_type'      => 'post',
			'category_name'  => 'life-insurance',
			'posts_per_page' => 3,
		));
		if($lfquery->have_posts()) :
			while($lfquery->have_posts()) : $lfquery->the_post() ; ?>
			<!-- widget one -->
			<div class="widget-one grid grid-cols-3 gap-2 pt-4 p-1 mr-2 sm:mr-1 mb-1 bg-white">
				<div class="widget-img">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<div class="widget-content col-span-2">
					<div class="widget-title mb-1 sm:mb-0">
						<a href="#"><p class="uppercase -mt-1 opacity-90 transition-all hover:text-[#DD3627]"><?php the_tags('', ' / ', ''); ?></p></a>
					</div>
					<div class="widget-description mb-1">
						<p class="text-[14px]"><?php echo wp_trim_words(get_the_content(), 10, ''); ?></p>
					</div>
				</div>
			</div>
		<?php endwhile; wp_reset_postdata();
		endif; ?>
		<!-- widget button -->
		<div class="more-btn mt-4">
			<?php 
			$categoryId   = get_term_by('slug', 'life-insurance', 'category'); 
			if($categoryId){
				$categoryLink = get_category_link($categoryId->term_id); ?>
				<a href="<?php echo esc_url($categoryLink); ?>" class="isebaButton"><?php _e('more latest news', 'insurance-seba'); ?></a>
			<?php
			} ?>
		</div>
	</div>
	<!-- widget second section -->
	<div class="left_section-two bg-[#EEEEEE] mt-4">
		<div class="section-title">
			<h5 class="text-[15px] uppercase bg-[#EEEEEE] pl-1 py-1"><?php _e('general insurance', 'insurance-seba'); ?></h5>
		</div>
		<!-- widget one -->
		<?php  
		$giquery = new WP_Query(array(
			'post_type'      => 'post',
			'category_name'  => 'general-insurance',
			'posts_per_page' => 3,
		));
		if($giquery->have_posts()) :
			while($giquery->have_posts()) : $giquery->the_post();
		?>
			<div class="widget-one grid grid-cols-3 gap-2 pt-4 p-1 mr-2 sm:mr-1 mb-1 bg-white">
				<div class="widget-img">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<div class="widget-content col-span-2">
					<div class="widget-title mb-1 sm:mb-0">
						<a href="#"><p class="uppercase -mt-1 opacity-90 transition-all hover:text-[#DD3627]"><?php the_tags('', ' / ', ''); ?></p></a>
					</div>
					<div class="widget-description mb-1">
						<p><?php echo wp_trim_words(get_the_content(), 10, ''); ?></p>
					</div>
				</div>
			</div>
		<?php endwhile; wp_reset_postdata();
		endif;
		?>
		<!-- button -->
		<div class="more-btn mt-4">
			<?php 
			$giCategoryId   = get_term_by('slug', 'general-insurance', 'category'); 
			if($giCategoryId){
				$giCategoryLink = get_category_link($giCategoryId->term_id); ?>
				<a href="<?php echo esc_url($giCategoryLink); ?>" class="isebaButton"><?php _e('more latest news', 'insurance-seba'); ?></a>
			<?php
			} ?>
		</div>
	</div>
</div>