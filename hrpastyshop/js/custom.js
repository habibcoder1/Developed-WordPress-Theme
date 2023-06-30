(function($){
	'use strict';
	jQuery(document).ready(function(){
		

		// Mobile Menu
		jQuery('.header-area .top-header .mobile-menuicon i').click(function(e) {
			jQuery('.header-area .top-header .main-menu').slideToggle(500);
			return false;
		});
		jQuery(window).resize(function(event) {
			if (jQuery(window).width() > 992) {
				jQuery('.header-area .top-header .main-menu').removeAttr('style');
			}
		});

		// Scroll Top Hide and Show
		jQuery('.footer-area .scroll-top i').hide();
		jQuery(window).scroll(function(e) {
			if (jQuery(window).scrollTop() > 150) {
				jQuery('.footer-area .scroll-top i').fadeIn(100);
			}else {
				jQuery('.footer-area .scroll-top i').fadeOut(100);
			}
		});

		// Smoth Scroll To Top
		jQuery('.footer-area .scroll-top i').click(function(event) {
			jQuery('body, html').animate({
				scrollTop: 0
			}, 100);
		});



		// fontawesome add dynamically in menu item
		jQuery('.top-header .main-menu nav .menu-item-has-children').append('<i class="fa-solid fa-sort-down" title="Sub Menu"></i>');

		// Sub Menu & Sup Menu
		jQuery('.top-header .main-menu nav > ul > li > i').addClass('downicon-first');
		jQuery('.top-header .main-menu ul li .downicon-first').click(function(e) {
			jQuery('.top-header .main-menu nav > ul > li > ul').slideToggle(500);
			return false;
		});

		jQuery('.top-header .main-menu nav > ul li > ul li i').addClass('downicon-second');
		jQuery('.top-header .main-menu ul li .downicon-second').click(function(e) {
			jQuery('.top-header .main-menu ul ul ul').slideToggle(500);
			return false;
		});


		// slider extra class remove
		jQuery('.carousel-item:nth-child(2), .carousel-item:nth-child(3), .carousel-item:nth-child(4)').removeClass('active');

		
		// Like/Dislike Option ///////
		$('.like_dislike .like a').click(function(e) {
			e.preventDefault();

			$.ajax({
				type: 'get',
				data: {
					post_action: 'like', 
				},
				success: function(result) {
					alert('result');
				},
				
			});
			
			
		});
		
		

		// Sticky Header
		// jQuery(window).scroll(function(e) {
		// 	if (jQuery(window).scrollTop() > 50 && jQuery(window).width() > 580) {
		// 		jQuery('.top-header').addClass('sticky-header');
		// 	}else {
		// 		jQuery('.top-header').removeClass('sticky-header');
		// 	}
		// }); 
		
		


	});
})(jQuery);