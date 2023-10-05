(function($){
    'use strict';
    jQuery(document).ready(function($){

        /* =============================
            mobile menu
        ============================= */     
        // mobile menu for sticky menu 
        let stickyMobileMenuBar = document.querySelector('.witl_sticky-menu .mobile-bar-icon i');
        let stickyMenucloseIcon = document.querySelector('.witl_sticky-menu .cross-icon i');
        let stickyMainMenu      = document.querySelector('.witl_sticky-menu .main-menu');

        stickyMobileMenuBar.addEventListener('click', function(){
            stickyMainMenu.classList.add('witlshow-menu');
        });
        stickyMenucloseIcon.addEventListener('click', function(){
            stickyMainMenu.classList.remove('witlshow-menu');
        });
        
        // mobile menu for normal menu
        let mobileMenuBar = document.querySelector('.main_menu-area .mobile-bar-icon i');
        let menucloseIcon = document.querySelector('.main_menu-area .cross-icon i');
        let mainMenu      = document.querySelector('.main_menu-area .main-menu');

        mobileMenuBar.addEventListener('click', function(){
            mainMenu.classList.add('witlshow-menu');
        });
        menucloseIcon.addEventListener('click', function(){
            mainMenu.classList.remove('witlshow-menu');
        });

        /* =============================
            Sticky Menu
        ============================= */ 
        window.addEventListener("scroll", function(){
            let sHeader = document.querySelector(".header-area .witl_sticky-menu");
            sHeader.classList.toggle("sticky-menu-show", window.scrollY > 50);
        });   
        
        /* =============================
            Sub Menu Show in Mobile 
        ============================= */ 
        let submenuOpened = false; 
        jQuery(".header-area .menu-item-has-children").on("click", function () {
            if (submenuOpened) {
                jQuery(this).children(".sub-menu").toggle(300);
            } else {
                jQuery(this).children(".sub-menu").slideDown(300);
                submenuOpened = true;
            }
        });
        
        /* =============================
           featured slider
        ============================= */ 
        jQuery('.featued-slider').slick({
            dots: false,
            autoplay: true,
            infinite: true,
            speed: 600,
            slidesToShow: 5,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '5px',
            prevArrow: false,
            nextArrow: false,
            responsive: [
                {
                  breakpoint: 992,
                  settings: {
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 576,
                  settings: {
                    centerMode: false,
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    centerMode: false,
                    slidesToShow: 1
                  }
                }
            ]
        });

        /* =============================
           Home Testimonial slider
        ============================= */ 
        jQuery('.home_testimonial-slider').slick({
            dots: true,
            autoplay: true,
            infinite: true,
            speed: 900,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerPadding: '10px',
            prevArrow: false,
            nextArrow: false,
        });

        /* =============================
           Core Value slider
        ============================= */ 
        jQuery('.core_value-slider').slick({
            dots: false,
            autoplay: true,
            infinite: true,
            speed: 900,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerPadding: '10px',
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        // prevArrow: false,
                        // nextArrow: false,
                    }
                }
            ]
        });

        /* =============================
           Team Slider
        ============================= */ 
        let teamSlider      = jQuery('.witl_team-slider');
        let thumbnailSlider = jQuery(".team_thumbnail-slider");

        function initSlickSlider() {
            teamSlider.slick({
                autoplay: true,
                infinite: true,
                autoplaySpeed: 2000,
                speed: 900,
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '10px',
                asNavFor: thumbnailSlider,
            });

            thumbnailSlider.slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: teamSlider,
                focusOnSelect: true,
                centerPadding: '40px',
                prevArrow: false,
                nextArrow: false,
            });
        }
        // Call the initialization function when the page loads
        initSlickSlider();
        // When a tab becomes active, destroy and reinitialize the slider
        jQuery('.aboutus-teamtab-menu li a').on('click', function (e) {
            e.preventDefault(); // Prevent the default anchor tag behavior

            // Destroy the existing sliders
            teamSlider.slick('unslick');
            thumbnailSlider.slick('unslick');

            // Reinitialize the sliders after a short delay (adjust the delay as needed)
            setTimeout(initSlickSlider, 50);
        }); 

        /* =============================
           Work Steps Slider
        ============================= */ 
        let swiper = new Swiper(".worksteps-tabitems", {
            slidesPerView: 5,
            spaceBetween: 10,
            loopFillGroupWithBlank: true,
            freeMode: true,
            watchSlidesProgress: true, 
            breakpoints: {
                // here count min-width
                300:{
                    slidesPerView: 1,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
                576:{
                    slidesPerView: 3,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
                768:{
                    slidesPerView: 5,
                },
            },
        });

        let swiper2 = new Swiper(".workstepstab-contents", {
            speed: 1000,
            spaceBetween: 10,
            slidesPerView: 1,
            thumbs: {
              swiper: swiper,
            },
            breakpoints: {
                300: {
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
            },
        });
            
        /* =============================
           Blog Slider
        ============================= */ 
        jQuery('.blog_post-slider').slick({
            dots: false,
            autoplay: true,
            infinite: true,
            speed: 1000,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerPadding: '20px',
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
      
        /* =============================
           Blog Slider
        ============================= */ 
        jQuery('.hero_title-slider').slick({
            dots: false,
            autoplay: true,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerPadding: '10px',
            vertical: true,
            prevArrow: false,
            nextArrow: false,
        });

        /* =============================
            Service Section Scripts
        ============================= */    
        /* For Smoth Hover on and out */
        jQuery('.single-service').mouseenter(function () {
            jQuery(this).addClass('active-service');
            
            jQuery('.bg-image img').css('transition', 'transform 0.5s ease');
            jQuery('.bg-image img').css('transform', 'scale(1.2)');
            
            setTimeout(function () {
                // jQuery('.bg-image img').attr('src', newImageSrc);
            }, 300); // Delay the image source change slightly for a smoother transition
            
            setTimeout(function () {
                jQuery('.bg-image img').css('transform', 'scale(1)');
            }, 300); // Delay the scaling for a smoother effect
        });
        jQuery('.single-service').mouseleave(function () {
            jQuery(this).removeClass('active-service');
            jQuery('.bg-image img').css('transition', 'transform 0.5s ease');
            jQuery('.bg-image img').css('transform', 'scale(1.2)');
        });
        
        /* =============================
            Portfolio Tab
        ============================= */ 
        jQuery(".witl_gallery-tab").tabs();
        
        /* =============================
            Our Team Tab
        ============================= */ 
        jQuery(".our_team-tab").tabs();
        
        /* =============================
            Service Module Tab
        ============================= */ 
        jQuery(".service_module-tab").tabs();
        
        /* =============================
            contact form item select
        ============================= */ 
        jQuery('.label-checkbox input').change(function() {
            let checkLabel = jQuery(this).closest('.label-checkbox'); 
            if (this.checked) {
                checkLabel.css('background-color', '#0094f7');
                checkLabel.css('color', '#fff');
            } else {
                checkLabel.css('background-color', '#d9d9d9');
                checkLabel.css('color', '#333');
            }
        });

        /* =============================
            Scroll To Top
        ============================= */
        // tooltip
        jQuery('.witl_scrollto-top a i').tooltip();
        
        // scroll to top by clicking
        jQuery('.witl_scrollto-top a i').hide();
        jQuery(window).scroll(function(){
			if (jQuery(window).scrollTop()>500) {
				jQuery('.witl_scrollto-top a i').fadeIn();
			}
			else{
				jQuery('.witl_scrollto-top a i').fadeOut();
			}
		});

		jQuery('.witl_scrollto-top a i').click(function(){
			jQuery('html,body').animate({scrollTop:0}, 180)
			return false;
		});
        
        /* =============================
        Jumper Animation
        ============================= */
        // addclass in jumper
        jQuery('.work_steps-tab .tab-items li .icon-box').on('click',function() {
            jQuery('.work_steps-tab .tab-items .witl-jumper').addClass('witl-jumper_yoohoo');
        
            setTimeout(function() {
                jQuery('.work_steps-tab .tab-items .witl-jumper').removeClass('witl-jumper_yoohoo');
            }, 1000); 
        });

        // jumper moving
        jQuery('.work_steps-tab .tab-items li:first .icon-box').on('click', function(){
            if (window.innerWidth <= 992) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '4.5%');
            }else if (window.innerWidth <= 1200) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '6%');
            }else if (window.innerWidth <= 1400) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '6.5%');
            }
            else{
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '7%');
            }
        });
        jQuery('.work_steps-tab .tab-items li:eq(1) .icon-box').on('click', function() { 
            if (window.innerWidth <= 992) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '24.7%');
            }else if (window.innerWidth <= 1200) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '26.1%');
            }else if (window.innerWidth <= 1400) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '26.7%');
            }
            else{
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '27.1%');
            }
        });
        jQuery('.work_steps-tab .tab-items li:eq(2) .icon-box').on('click', function() {  
            if (window.innerWidth <= 992) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '45%');
            }else if (window.innerWidth <= 1200) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '46.3%');
            }else if (window.innerWidth <= 1400) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '46.8%');
            }
            else{
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '47.2%');
            }
        });
        jQuery('.work_steps-tab .tab-items li:eq(3) .icon-box').on('click', function() {   
            if (window.innerWidth <= 992) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '65.3%');
            }else if (window.innerWidth <= 1200) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '66.4%');
            }else if (window.innerWidth <= 1400) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '67%');
            }
            else{
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '67.5%');
            }
        });
        jQuery('.work_steps-tab .tab-items li:eq(4) .icon-box').on('click', function() {
            if (window.innerWidth <= 992) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '85.6%');
            }else if (window.innerWidth <= 1200) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '86.8%');
            }else if (window.innerWidth <= 1400) {
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '87.2%');
            }
            else{
                jQuery('.work_steps-tab .tab-items .witl-jumper').css('left', '87.7%');
            }
            
        });

        
        
        

        
        

    });
})(jQuery);