(function($){
	'use strict';
	jQuery(document).ready(function($){

		/* =========================
			For Header BG Image  
		========================== */
		let mediaUploader;

		jQuery('.hr_general_body #header-bgimg').on('click', function(e){
			e.preventDefault();  //prevent reload

			// If mediaUploader has then open
			if (mediaUploader) {
				mediaUploader.open();
				return;
			}
			// Media upload box title and choose button text & only one image allow
			mediaUploader = wp.media.frames.file_frame = wp.media({
				title: 'Choose a Header Image',   
				button: {
					text: 'Choose Image'          
				},
				multiple: false                   
			});
			// select image & convert to json & get image url
			mediaUploader.on('select', function(){
				let attachment = mediaUploader.state().get('selection').first().toJSON();
				jQuery('.hr_general_body #headerbg').val(attachment.url); //For input
				jQuery('.hr_general_body img#picture').attr("src", attachment.url);  //for img tag src
				jQuery('.hr_general_body .headerbgimg').css("background-image", 'url(' + attachment.url + ')');  //For Background Image
			});
			// Open uploader dialog/box
			mediaUploader.open();

			
		});
		// for remove image
		jQuery('.hr_general_body #header-removeimg').click(function(e) {
			jQuery('.hr_general_body #headerbg').val(' ');
			jQuery('.hr_general_body .headerbgimg').css("background-image", 'url()');
		});



		/* =========================
			For Speech of MD Widget 
		========================== */
	    jQuery(document).on('click', '#hrpasty_mddetails .uploadmdimg', function(e) {
	        e.preventDefault();

	        // Create a media 
	        const imageMedia = wp.media.frames.file_frame = wp.media({
	            title: 'Select a MD Image',
	            button: {
	                text: 'Use MD Image'
	            },
	            multiple: false
	        });

	        // Image selection callback
	        imageMedia.on('select', function() {
	            const attachment = imageMedia.state().get('selection').first().toJSON();
	            jQuery('#hrpasty_mddetails input.mdimgainput').val(attachment.url); //For input
				jQuery('#hrpasty_mddetails img.show_mdimg').attr("src", attachment.url);  //for img tag src
	        });

	        // Open the media frame
	        imageMedia.open();
	    });
	    // for remove image
	    jQuery(document).on('click', '#hrpasty_mddetails .removemdimg', function(e){
			jQuery('#hrpasty_mddetails input.mdimgainput').val('');
			jQuery('#hrpasty_mddetails img.show_mdimg').attr("src", '');
		});

		



	});

}(jQuery));