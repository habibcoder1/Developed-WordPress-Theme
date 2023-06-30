(function($){
    'use strict';
    jQuery(document).ready(function($){
       /* ========================
            site menu
        ======================== */
        let siteMenuIcon  = document.querySelector('.site-menu-icon i');
        let siteMenu      = document.querySelector('.site-menu');
        let siteMenuClose = document.querySelector('.close-button i');

        siteMenuIcon.addEventListener('click', function() {
            siteMenu.classList.add('menu-show');
        });

        siteMenuClose.addEventListener('click', function() {
            siteMenu.classList.remove('menu-show');
        });

        /* ========================
            Accordion JavaScript
        ======================== */
        // accordion item variable
        const accordionItems = document.querySelectorAll('.accordion-item');
        // acconrdion loop
        accordionItems.forEach(item => {
            const accHeader  = item.querySelector('.accordion-header');
            const accContent = item.querySelector('.accordion-content');
            const accIcon    = item.querySelector('button span i.fa-solid');
        
            accHeader.addEventListener('click', () => {
                accContent.classList.toggle('hidden');
                accIcon.classList.toggle('fa-chevron-down');
                accIcon.classList.toggle('fa-chevron-right');
            });
        });

        /* ==================================
            add something in search form
        ================================== */
        jQuery('.main-search form input#s').addClass('w-52 sm:w-64 md:w-96 focus:outline-none');
        jQuery('.main-search form input#s').attr('placeholder', 'Search for...');

        let searchIcon = '<button type="submit" id="searchsubmit" class="transition-colors duration-500 hover:!bg-[#333]" value=""> <i class="fas fa-search"></i> </button>';
        jQuery('.header-area #searchsubmit').replaceWith(searchIcon);

        // site search form //
        jQuery('.site-menu-search form input#s').addClass('w-36 focus:outline-none');
        jQuery('.site-menu-search form input#s').attr('placeholder', 'Search for...');


        /* ==================================
            ajax for posts show
        ================================== */
        let loading = false;    // Variable to prevent multiple AJAX requests  
        // Load more posts on button click
        jQuery('.more-post_button a.isebaButton').click(function(e) {
            e.preventDefault();
        
            if (!loading) {
                loading = true;
        
                // AJAX request
                $.ajax({
                    type: 'POST',
                    url: ajax_object.ajax_url,   //url came from wp_enqueue_scripts()
                    data: {
                        action: 'iseba_load_more_posts',  //this function from functions.php
                    },
                    success: function(response) {
                        jQuery('.blog-page .blog-row').append(response);  //where will show
                        loading = false;
                    },
                });
            }
        });  //end post show ajax


        /* ==================================
            ajax for themeelse support
        ================================== */
        // Function to handle vote button click
        jQuery('.wdget-form .vote').click(function(e) {
            e.preventDefault();
            let selectedOption = jQuery('input[name=themeelse-support]:checked').val();
    
            if(!selectedOption){
                jQuery('.wdget-form .error-result').html('Please select an option');
                return;
            }
            // Save the selected option in the database using AJAX
            $.ajax({
                url: ajax_object.ajax_url,   //url came from wp_enqueue_scripts()
                method: 'POST',
                data: {
                    action: 'iseba_save_vote_option',
                    selectedOption: selectedOption
                },
                success: function(response) {
                    jQuery('.wdget-form .show-result').html('Voted !');
                },
                error: function(xhr, status, error) {
                    jQuery('.wdget-form .error-result').html('Error voted: ' + error);
                }
            });
        }); //end vote button
    
        // Function to handle result button click
        jQuery('.wdget-form .result').click(function(e) {
            e.preventDefault();
    
            // Retrieve the saved option from the database using AJAX
            $.ajax({
                url: ajax_object.ajax_url,   //url came from wp_enqueue_scripts()
                method: 'POST',
                data: {
                    action: 'iseba_get_vote_counts'
                },
                success: function(response) {
                    var voteCounts = JSON.parse(response);
                    if (voteCounts) {
                        jQuery('.wdget-form .result').after('<div class="result-text mt-1">' +
                        'Yes: ' + voteCounts.yesCount +
                        ' | Not: ' + voteCounts.notCount +
                        ' | Of Course: ' + voteCounts.ofCourseCount +
                        '</div>');
                    }else{
                    jQuery('.wdget-form .result').after('<span class="result-text mt-1">No result</span>');
                    }
                },
                error: function(xhr, status, error) {
                    jQuery('.wdget-form .error-result').html('Error data: ' + error);
                }
            });
        }); //end result button


        /* ==================================
            ajax for post like/dislike
        ================================== */
        jQuery('.like_dislike .like-button, .like_dislike .dislike-button').on('click', function(event) {
            event.preventDefault();

            var $this      = $(this);
            var postAction = $this.data('action');
            var postID     = $this.data('post-id');
            var postType   = $this.data('post-type');
            var ajaxURL    = $this.data('ajax-url');

            $.ajax({
                url: ajaxURL,
                type: 'POST',
                data: {
                    action: 'process_like_dislike',
                    post_action: postAction,
                    post_id: postID,
                    post_type: postType
                },
                success: function(response) {
                    if (response.success) {
                        // Update the like/dislike count on the page
                        jQuery('.like-count').text(response.data.like_count);
                        jQuery('.dislike-count').text(response.data.dislike_count);
                    } else {
                        console.log(response.data.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        }); //end like dislike button




        
    });
})(jQuery);