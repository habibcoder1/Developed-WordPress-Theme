<?php 
/**
 * @package Insurance Seba
 * 
 * Template for displaying Right Sidebar
 * */

if (!defined('ABSPATH')) {
	exit('you are a foolish');
} ?>


<div class="body-right">
    <!-- one widget section -->
    <div class="right_section-one one widget bg-[#EEEEEE]">
        <div class="section-title">
            <h5 class="text-[15px] uppercase bg-[#EEEEEE] pl-1 py-1"><?php _e('life insurance', 'insurance-seba'); ?></h5>
        </div>
        <!-- widget one -->
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
					<a href="<?php the_permalink(); ?>" class="block overflow-hidden"><?php the_post_thumbnail(); ?></a>
				</div>
				<div class="widget-content col-span-2">
					<div class="widget-title mb-1 sm:mb-0">
						<a href="#"><p class="tag uppercase -mt-1 opacity-90 transition-all hover:text-[#DD3627]"><?php the_tags('', ' / ', ''); ?></p></a>
					</div>
					<div class="widget-description mb-1">
						<p class="text-[14px]"><?php echo wp_trim_words(get_the_content(), 8, ''); ?></p>
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
    <div class="right_section-two two widget bg-[#EEEEEE] mt-4">
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
			while($giquery->have_posts()) : $giquery->the_post() ; ?>
			<!-- widget one -->
			<div class="widget-one grid grid-cols-3 gap-2 pt-4 p-1 mr-2 sm:mr-1 mb-1 bg-white">
				<div class="widget-img">
					<a href="<?php the_permalink(); ?>" class="block overflow-hidden"><?php the_post_thumbnail(); ?></a>
				</div>
				<div class="widget-content col-span-2">
					<div class="widget-title mb-1 sm:mb-0">
						<a href="#"><p class="tag uppercase -mt-1 opacity-90 transition-all hover:text-[#DD3627]"><?php the_tags('', ' / ', ''); ?></p></a>
					</div>
					<div class="widget-description mb-1">
						<p class="text-[14px]"><?php echo wp_trim_words(get_the_content(), 8, ''); ?></p>
					</div>
				</div>
			</div>
		<?php endwhile; wp_reset_postdata();
		endif; ?>
		<!-- widget button -->
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
    <!-- widget three section -->
    <?php dynamic_sidebar('iseba-rightsidebar1'); ?>
    <!-- widget four section -->
    <div class="right_section-four four widget bg-[#EEEEEE] pl-1 mt-4 sm:mt-3">
        <div class="section-title">
            <h5 class="text-[15px] uppercase bg-[#EEEEEE] pl-1 py-1"><?php _e('opinion', 'insurance-seba'); ?></h5>
        </div>
        <!-- widget one -->
        <?php  
        $opinionquery = new WP_Query(array(
            'post_type'      => 'iseba-policy',
            'posts_per_page' => 2,
            'tax_query' => array(
                array(
                    'taxonomy' => 'ispolicy_taxonomy',
                    'field'    => 'slug',
                    'terms'    => array('opinion')  //category slug name
                )
            )
        ));
        if($opinionquery->have_posts()) :
            while($opinionquery->have_posts()) : $opinionquery->the_post();
        ?>
            <div class="widget-one pt-2 bg-white">
                <div class="widget-img mb-2">
                    <a href="<?php the_permalink(); ?>" class="block overflow-hidden"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="widget-content pl-3 col-span-2">
                    <div class="widget-title mb-1 sm:mb-0">
                        <?php  
                        $opiniontags = get_the_terms(get_the_ID(), 'ispolicy_tags');
                        if(!empty($opiniontags)){
                            $i = 1;
                            foreach($opiniontags as $optag){
                                $opname = $optag->name;
                                $oplink = get_term_link($optag, 'ispolicy_tags');
                                echo '<a href="'.esc_url($oplink).'"><p class="uppercase opacity-90 transition-all hover:text-[#DD3627]">'.__($opname, 'insurance-seba').'</p></a>';

                                //Add comma (if will one more taxonomy)
                                echo ($i < count($opiniontags)) ? " / " : "";
                                $i++;
                            }
                        } ?>
                    </div>
                    <div class="widget-description mb-1 pb-4">
                        <p class="text-[14px]"><?php echo wp_trim_words(get_the_content(), 20, ''); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata();
        endif; ?>
        <!-- widget button -->
        <div class="more-btn mt-4">
            <a href="<?php echo home_url('/policy'); ?>" class="isebaButton"><?php _e('more latest news', 'insurance-seba'); ?></a>
        </div>
    </div>
    <!-- five widget section -->
    <div class="right_section-five five widget p-1 mt-4">
        <div class="section-title">
            <h6 class="bg-[#333] text-[15px] font-normal text-center text-white py-1"><?php _e('Are you fan of the themeelse blog?', 'insurance-seba'); ?></h6>
        </div>
        <div class="wdget-form">
            <form action="#" method="POST">
                <div class="yes mt-3 ml-2">
                    <input type="radio" class="cursor-pointer" name="themeelse-support" id="yes" value="yes">
                    <label class="pl-1 cursor-pointer" for="yes"><?php _e('Yes', 'insurance-seba'); ?></label>
                </div>
                <div class="not my-3 ml-2">
                    <input type="radio" class="cursor-pointer" name="themeelse-support" id="not" value="not">
                    <label class="pl-1 cursor-pointer" for="not"><?php _e('Not', 'insurance-seba'); ?></label>
                </div>
                <div class="of-course mb-3 ml-2">
                    <input type="radio" class="cursor-pointer" name="themeelse-support" id="of-course" value="of-course">
                    <label class="pl-1 cursor-pointer" for="of-course"><?php _e('Of Course!', 'insurance-seba'); ?></label>
                </div>
                <button class="vote hover:!bg-[#DD3627]"><?php _e('Vote', 'insurance-seba'); ?></button>
                <button class="result ml-2 hover:!bg-[#DD3627]"><?php _e('Result', 'insurance-seba'); ?></button>
                <span class="show-result block"></span>
                <span class="error-result"></span>
            </form>
        </div>
        <ul class="social-link text-end mb-1 mt-4">
            <li><a class="facebook" href="http://facebook.com/habibcoder1" target="_blank" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a class="twitter" href="http://twitter.com/habibcoder" target="_blank" title="Twitter"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a class="linkedin" href="http://linkedin.com/in/habibcoder" target="_blank" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a class="email" href="mailto:contact.habibcoder@gmail.com" target="_blank" title="Email"><i class="fa-regular fa-envelope"></i></a></li>
        </ul>
    </div>
</div>