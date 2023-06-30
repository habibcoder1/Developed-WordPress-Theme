(function($){
	jQuery(document).ready(function(){


		/* ===========================
		Resposive Mobile Menu 
		=========================== */

		jQuery('.menu-area .bar i').click(function(){
			jQuery('.menu-area .main-menu').slideToggle(500);
			return false;
		});

		jQuery(window).resize(function(){
			if (jQuery(window).width()>992) {
				jQuery('.menu-area .main-menu').removeAttr('style');
			}
		});


		/* ===========================
			Menu Fixed 
		=========================== */

		jQuery(window).scroll(function(){
			if (jQuery(window).scrollTop()>50 && jQuery(window).width()>992) {
				jQuery('.top-header').addClass('fixed');
			}
			else {
				jQuery('.top-header').removeClass('fixed');
			}
		});
		

		/* ===========================
			Scroll To Top 
		=========================== */

			jQuery('.scroll-up a i').hide();

		jQuery(window).scroll(function(){
			if (jQuery(window).scrollTop()>300) {
				jQuery('.scroll-up a i').fadeIn();
			}
			else{
				jQuery('.scroll-up a i').fadeOut();
			}
		});

		jQuery('.scroll-up a i').click(function(){
			jQuery('html,body').animate({scrollTop:0}, 180)
			return false;
		});


		/* ==================================
			last two letter get
		================================== */
		jQuery('.menu-area .main-logo a').html(function() {
		    var txt= jQuery(this).text();
		    return txt.substr(0, txt.length-2)         //all but the last two characters
		         + '<span>'+txt.slice(-2)+'</span>';   //put last two characters in a span
		});

		/* ==================================
			footer title
		================================== */
		jQuery('.footer-details .footer-content h3').html(function() {
		    var txt= jQuery(this).text();
		    return txt.substr(0, txt.length-2)         //all but the last two characters
		         + '<span>'+txt.slice(-2)+'</span>';   //put last two characters in a span
		});

		/* ==================================
			blog page title
		================================== */
		jQuery('.blog-area .blogArea-title h2').each(function(){
		    var self = jQuery(this);
		    var p    = self.text().split(' ');
		    var html = self.html().replace(p[2], '<span>'+ p[2] +'</span>');

		    self.html(html);
		});

		/* ==================================
			span tag add in blog title 
		================================== */
		jQuery('.single-blog .singleBlog-title h3').each(function(){
		    var self = jQuery(this);
		    var p    = self.text().split(' ');
		    var html = self.html().replace(p[2], '<span>'+ p[2] +'</span>');

		    self.html(html);
		});

		/* ==================================
			content strong tag add
		================================== */
		jQuery('.single-blog .singleBlog-content p').each(function(){
		    var self = jQuery(this);
		    var p    = self.text().split(' ');
		    var html = self.html().replace(p[0], '<strong>'+ p[0] +'</strong>');

		    self.html(html);
		});


		/* ========================================
			span tag add in home welcome one title
		========================================= */
		jQuery('.first-welcome-area .welcome-title h2, .second-welcome-area .welcome-title h2').each(function(){
		    var self = jQuery(this);
		    var p    = self.text().split(' ');
		    var html = self.html().replace(p[2], '<span>'+ p[2] +'</span>');

		    self.html(html);
		});

		/* ========================================
			span tag add in home expert title
		========================================= */
		jQuery('.expert-trainer-area .expert-tainer-title h2').each(function(){
		    var self = jQuery(this);
		    var p    = self.text().split(' ');
		    var html = self.html().replace(p[1], '<span>'+ p[1] +'</span>');

		    self.html(html);
		});

		/* ========================================
			span tag add in about page title
		========================================= */
		jQuery('.institute-title h2, .seo-title h2, .aobut-trainer-details h2, .counter-title h2').each(function(){
		    var self = jQuery(this);
		    var p    = self.text().split(' ');
		    var html = self.html().replace(p[1], '<span>'+ p[1] +'</span>');

		    self.html(html);
		});


		/* ========================================
			span tag add in counter title
		========================================= */
		jQuery('.first-counter h4, .second-counter h4, .third-counter h4').each(function(){
		    var self = jQuery(this);
		    var p    = self.text().split(' ');
		    var html = self.html().replace(p[0], '<span>'+ p[0] +'</span>');

		    self.html(html);
		});

		/* ========================================
			span tag add in team title
		========================================= */
		jQuery('.manager-title h2, .team-title h2').each(function(){
		    var self = jQuery(this);
		    var p    = self.text().split(' ');
		    var html = self.html().replace(p[2], '<span>'+ p[2] +'</span>');

		    self.html(html);
		});


		/* ========================================
			span tag add in team members title
		========================================= */
		jQuery('.gents-team h3, .ladies-team h3').each(function(){
		    var self = jQuery(this);
		    var p    = self.text().split(' ');
		    var html = self.html().replace(p[1], '<span>'+ p[1] +'</span>');

		    self.html(html);
		});


		/* ===============
			Tooltip
		=============== */
		var exampleEl = document.getElementById('scrollup')
		var tooltip = new bootstrap.Tooltip(exampleEl, {
		  boundary: document.body 
		})


		/* ================
		  Review  Slider
		================ */
		jQuery('.review-slider').owlCarousel({
			autoplay: true,
			loop: true,
			items: 1,
			autoplayTimeout: 4000,
			smartSpeed: 1500,
		});


		/* ===========================
		 Sign In Form Validation
		=========================== */

		jQuery('#login').validate({

			errorClass: 'error fail alert',
			validClass: 'valid success alert',

			rules:{
				fname:{
					required: true,
					minlength: 3
				},
				lname:{
					required: true,
					minlength: 3
				},
				email: {
					required: true,
					email: true
				}
			},

			messages:{
				fname:{
					required: 'Enter your first name',
					minlength: 'At least 3 characters'
				},
				lname:{
					required: 'Enter your last name',
					minlength: 'At least 3 characters'
				},
				email:{
					required: 'Entar a valid email',
					email: 'Email as like abc@domain.com'
				}
			},
			submitHandler:function(form){
				form.submit();

				return false;
			}

		});



		/* ===========================
		 Sign Up Form Validation
		=========================== */
		jQuery('#sigup').validate({
			errorClass: 'error fail alert',
			validClass: 'valid success alert',

			rules:{
				firstname:{
					required: true,
					minlength: 3
				},
				mobile:{
					required: true,
					number: true,
					minlength: 5
				},
				emailfirst:{
					required: true,
					email: true
				},
				birth: {
					required: true,
				},
				age:{
					required: true,
					min: 15,
					max: 60,
					number: true
				},
				check:{
					required: true
				}
			},

			messages:{
				firstname:{
					required: 'First name is required',
					minlength: 'At least 3 characters'
				},
				mobile:{
					required: 'Contact number is required',
					number: 'Only numerical is allow',
					minlength: 'At least 5 characters'
				},
				emailfirst:{
					required: 'Email is required',
					email: 'Email as like abc@domain.com'
				},
				birth:{
					required: 'Birth date is required'
				},
				age:{
					required: 'Age is required',
					min: 'Should be minimun 15 years old',
					max: 'Should not over 60 years old',
					number: 'Only numerical is allow'
				},
				check:{
					required: 'Policy is required'
				}
			},
			submitHandler:function(form){
				form.submit();
				confirm('Are you confirmed?')

				return false;		
			}
			
		});


		/* ================
		SignUp   Date 
		================ */
			jQuery("#birth").datetimepicker({
		      timepicker: false,
		      datepicker: true,
		      format: 'd.M.Y'
		   });


		
		/* ===========================
		 Circle Progressbar
		=========================== */
		jQuery('.first-counter').circleProgress({
		    value: 0.90,
		    size: 150,
		    thickness: 12,
		    lineCap: 'round',
		    fill: {
		      gradient: ["red", "orange"]
		    }
		  });
		jQuery('.second-counter').circleProgress({
		    value: 0.90,
		    size: 150,
		    thickness: 12,
		    lineCap: 'round',
		    fill: {
		      gradient: ["#27ae60", "orange"]
		    }
		  });
		jQuery('.third-counter').circleProgress({
		    value: 0.80,
		    size: 150,
		    thickness: 12,
		    lineCap: 'round',
		    fill: {
		      gradient: ["orange", "#2980b9"]
		    }
		});



	});

})(jQuery);
