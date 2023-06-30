<?php 
/**
 * @package Insurance Seba
 * 
 * Template for displaying Single Policy Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} 

if(have_posts()) :
	while(have_posts()) : the_post();
?>
	<!-- single post -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="post-title">
			<h2 class="font-semibold capitalize text-[34px] leading-10"><?php the_title(); ?></h2>
		</div>
		<div class="post_date_author_category justify-center flex mt-2 mb-3">
			<?php  
			$policytags = get_the_terms(get_the_ID(), 'ispolicy_tags');
			if(!empty($policytags)){
				$increc = 1;
				foreach($policytags as $plicytag){
					$ptagname = $plicytag->name;
					$ptaglink = get_term_link($plicytag, 'ispolicy_tags');
					echo '<a href="'.esc_url($ptaglink).'" class="category capitalize transition-all hover:text-[#DD3627]"><p class="inline-block mr-1 ml-1">'.__($ptagname, 'insurance-seba').'</p></a>';

					//add comma for more tags
					echo ($increc < count($policytags)) ? ' / ' : '';
					$increc++;
				}
			} ?>
			<p class="comments hidden sm:block mx-6">
				<i class="fa-regular fa-comment mr-1"></i>
				<a href="<?php comments_link(); ?>" class="capitalize transition-all hover:text-[#DD3627]"> <?php comments_number( 'Leave a Comment', '1 Comment', '% Comments' ); ?></a>
			</p>
			<p class="view hidden sm:block"><i class="fa-solid fa-eye mr-1"></i> <?php iseba_set_post_view(); ?> <?php echo iseba_get_post_view(); ?></p>
		</div>
		<div class="post-thumbnail mb-6">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="post-content mt-4">
			<h3 class="post-second_title capitalize font-semibold text-[28px] px-2 border-2 border-gray-300 leading-8"> <?php echo get_post_meta(get_the_ID(), '_isptitle', true); ?></h3>
			<div class="post-main_content border-2 border-t-0 border-gray-300 py-1 px-2">
				<?php the_content(); ?>
			</div>
		</div>
	</article>
	<hr class="mt-7 mb-5">
	<!-- accordion -->
	<?php $isbacconoff = get_post_meta(get_the_ID(), '_ispaccordiononoff', true); 
	if($isbacconoff == 'yes') : ?>
	<div class="policy-accordion mb-2 sm:mb-3 p-2 sm:p-4 border-2 border-gray-300">
		<h3 class="accordion-title capitalize text-[26px] font-extrabold"><?php echo get_post_meta(get_the_ID(), '_ispaccordiontitle', true); ?></h3>
		<div class="accordion">
			<!-- first item -->
			<div class="accordion-item">
				<h2 class="accordion-header">
				<button class="accordion-button grid grid-cols-12 items-center w-full">
					<i class="fa-solid fa-briefcase text-xl sm:text-2xl text-left text-[#DD3627]"></i>
					<h4 class="col-span-10 text-left capitalize text-lg font-bold"><?php echo get_post_meta(get_the_ID(), '_isaccfirttitle', true); ?></h4>
					<span class="right-icon text-right"><i class="fa-solid fa-chevron-down text-lg"></i></span>
				</button>
				</h2>
				<div class="accordion-content mb-2">
					<p><?php echo get_post_meta(get_the_ID(), '_isaccfisrtcontent', true); ?></p>
				</div>
			</div>
			<hr class="opacity-30">
			<!-- second item -->
			<div class="accordion-item">
				<h2 class="accordion-header">
				<button class="accordion-button grid grid-cols-12 items-center w-full">
					<i class="fa-solid fa-comment-dollar text-xl sm:text-2xl text-left text-yellow-400"></i>
					<h4 class="col-span-10 text-left capitalize text-lg font-bold"><?php echo get_post_meta(get_the_ID(), '_isaccsecondtitle', true); ?></h4>
					<span class="right-icon text-right"><i class="fa-solid fa-chevron-right text-lg"></i></span>
				</button>
				</h2>
				<div class="accordion-content hidden mb-2">
					<p><?php echo get_post_meta(get_the_ID(), '_isaccsecondcontent', true); ?></p>
				</div>
			</div>
			<hr class="opacity-30">
			<!-- third item -->
			<div class="accordion-item">
				<h2 class="accordion-header">
				<button class="accordion-button grid grid-cols-12 items-center w-full">
					<i class="fa-regular fa-circle-xmark text-xl sm:text-2xl text-left text-[#DD3627]"></i>
					<h4 class="col-span-10 text-left capitalize text-lg font-bold"><?php echo get_post_meta(get_the_ID(), '_isaccthirdtitle', true); ?></h4>
					<span class="right-icon text-right"><i class="fa-solid fa-chevron-right text-lg"></i></span>
				</button>
				</h2>
				<div class="accordion-content hidden">
					<p><?php echo get_post_meta(get_the_ID(), '_isaccthirdcontent', true); ?></p>
				</div>
			</div>
		</div>                         
	</div>
	<?php endif; ?>
	<!-- related policy title -->
	<h3 class="relatedpolicy-title capitalize text-xl font-extrabold"><?php _e('related policy', 'insurance-seba'); ?></h3>
	<hr class="mb-6">
	<!-- latest news -->
	<div class="latest-post mb-8 border-2 border-gray-300">
		<h3 class="title capitalize text-lg font-extrabold bg-[#EEEEEE] py-1 pl-1"><?php _e('latest news', 'insurance-seba'); ?></h3>
		<div class="latest-post_content p-3 grid grid-cols-1 sm:grid-cols-3 sm:gap-6 mb-3">
			<?php 
			$iseba_ln_post = get_post(get_the_ID());
			// Define your criteria for recommended posts (example: same category)
			$iseba_latestn = new WP_Query(array(
				'post_type'      => 'iseba-policy',
				'category__in'   => wp_get_post_categories($iseba_ln_post->ID),  //post categories
				'post__not_in'   => array($iseba_ln_post->ID),  //for after post
				'posts_per_page' => 3,
			));
			if ($iseba_latestn->have_posts()) : //if have related post
				while($iseba_latestn->have_posts()) : $iseba_latestn->the_post();
			?>
				<article class="mb-5 sm:mb-0">
					<div class="post-thumb mb-2">
						<a href="<?php the_permalink(); ?>" class="block overflow-hidden"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="category">
						<?php  
						$latestntags = get_the_terms(get_the_ID(), 'ispolicy_tags');
						if(!empty($latestntags)){
							$i = 1;
							foreach($latestntags as $lntag){
								$lnname = $lntag->name;
								$lnlink = get_term_link($lntag, 'ispolicy_tags');
								echo '<a href="'.esc_url($lnlink).'"><p class="uppercase inline-block">'.__($lnname, 'insurance-seba').'</p></a>';
								//Add comma (if will one more taxonomy)
								echo ($i < count($latestntags)) ? ' / ' : '';
								$i++;
							}
						} ?>
					</div>
					<div class="title">
						<a href="<?php the_permalink(); ?>"><h2 class="text-xl leading-6 transition-colors hover:text-[#DD3627] mb-1"><?php the_title(); ?></h2></a>
					</div>
					<div class="post-content">
						<p><?php echo wp_trim_words(get_the_content(), 12, ''); ?></p>
					</div>
				</article>
			<?php endwhile; wp_reset_postdata();
			endif; ?>
		</div>
		<div class="readmore-button px-3">
			<a href="<?php echo home_url('policy'); ?>" class="isebaButton"><?php _e('read more', 'insurance-seba'); ?></a>
		</div>
	</div> <!--// end latest post -->
	<!-- latest post 2nd -->
	<div class="latest-post mb-8 border-2 border-gray-300">
		<h3 class="title capitalize text-lg font-extrabold bg-[#EEEEEE] py-1 pl-1"><?php _e('latest post', 'insurance-seba'); ?></h3>
		<div class="latest-post_content p-3 grid grid-cols-1 sm:grid-cols-3 sm:gap-6 mb-3">
			<?php  
			$isebalp = new WP_Query(array(
				'post_type'      => 'post',
				'posts_per_page' => 3,
			));
			if($isebalp->have_posts()) :
				while($isebalp->have_posts()) : $isebalp->the_post();
			?>
				<article class="mb-5 sm:mb-0">
					<div class="post-thumb mb-2">
						<a href="<?php the_permalink(); ?>" class="block overflow-hidden"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="category">
						<p class="uppercase"><?php the_tags('', ' / ', ''); ?></p>
					</div>
					<div class="title">
						<a href="<?php the_permalink(); ?>"><h2 class="text-xl leading-6 transition-colors hover:text-[#DD3627] mb-1"><?php echo wp_trim_words(get_the_title(), 8, ''); ?></h2></a>
					</div>
					<div class="post-content">
						<p><?php echo wp_trim_words(get_the_content(), 18, ''); ?></p>
					</div>
				</article>
			<?php endwhile; wp_reset_postdata();
			endif; ?>
		</div>
		<div class="readmore-button px-3">
			<a href="<?php echo home_url('blog'); ?>" class="isebaButton"><?php _e('read more', 'insurance-seba'); ?></a>
		</div>
	</div> <!--// end latest post -->
<?php 
	endwhile;
else: 
	_e('No Post', 'insurance-seba');
endif;