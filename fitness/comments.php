<?php 
/*
	The Tempalte for displaying comments
*/

if ( post_password_required() )
    return;
?>


<?php

/* ==============================
 Comments List & Count 
============================== */

    $hr_comment_count = get_comments_number(); ?>

	<?php if ( have_comments() ) : ?>
		<!--// Comments Count //-->
		<h5 class="comments-title upper">

			<?php if ( '1' === $hr_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'hrfitness', 'comments title' , get_the_title() ); ?>
			<?php else : ?>
				<?php 
				printf(
					esc_html( _nx( '%s comment', '%s comments', $hr_comment_count, 'Comments title', 'hrfitness' ) ),
					esc_html( number_format_i18n( $hr_comment_count ) )
				); ?>

			<?php endif; ?>

		</h5>  
		<!--// Comment List //-->
		<ul class="comment-list commentlist">
			<div class="comment-text">			
				<?php
				wp_list_comments(
					array(
						'avatar_size'       => 50,
						'style'             => 'ul',    // comment list tag = ul/ol/div
						'short_ping'        => true,    // default 'false'
						'per_page'          => '',      // numbr of comment show 'init'
						'reverse_top_level' => true,    // For new at forst default 'false'
						'walker'            => null,       // an object & default 'null' 
					    'max_depth'         => '10',       // max comment depth 
					    'callback'          => null,       // callback default 'null'
					    'end-callback'      => null,       // end callback default 'null'
					    'type'              => 'comment',  // Default 'All'
					    'page'              => '',         // page ID to list show
					    'reverse_children'  => true,       // for children comment show
					    'echo'              => true        // default 'true'
					)
				);
				?>
			</div>
		</ul> 
		<!--// Comments pagination //-->
		<div class="pagination">
		    <?php 

		    // the_comments_pagination();  OR

		    paginate_comments_links( array(
		    	'screen_reader_text'=> __(' ','text_domain'),
		    	'prev_text'  => __('Previous','text_domain'),
		    	'next_text'  => __('Next','text_domain'),
		    	'type'       => __('list', 'text_domain'),
		    	'show_all'   => __(true, 'text_domain'),
		    	'end_size'   => 5,
		    ) ); // end comment pagination

		    ?>
		</div>



	<?php endif;  // end comment list & count ?>   


<?php
/* ==========================
	Comment Form
========================== */

comment_form( array(

	/////****** author, email, website in this filter hook *******///
	'fields'   => apply_filters( 'comment_form_default_fields', array(

		/// Name 
		'author'  		=> '<div class="form-group">
								<!--<label for="author">' .__('Name *') . '</label> -->
			                    <input name="author" id="author" type="text" placeholder="Name *" class="form-control" required="required">
			                </div>',
	    /// Email 
	    'email'   		=> '<div class="form-group last">
	                            <!--<label for="email">' . __('Email * ') . '</label> -->
			                    <input name="email" type="email" id="email" placeholder="Email *" class="form-control" required="required">
			                </div>',
	    /// Website 
	   'url'     		=> '', 

		// cookies
		'cookies'		=>	'<p class="comment-form-cookies-consent">
								<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" checked="checked"> 
								<label for="wp-comment-cookies-consent">Save your name, email, and website for more comments.</label>
							</p>',

	)),


		///***** Others fields and text ******////

        // Textarea field
        'comment_field'  => '<p class="comment-form-comment form-group">
        						<!-- <label for="comment"> ' . __(' Comment * ') . '</label> -->
	                  			<textarea class="form-control" id="comment" name="comment" placeholder="your comment *" required="required"></textarea>
	                	  	</p>',

		// input submit 
        'label_submit'  => __( 'Message Pathan', 'hrfitness' ),



	    // Remove " Your email address will not be published. Required fields are marked * ".
        'comment_notes_before' => __('<p class="before-comment-text"> Your email will be secure </p>', 'hrfitness'),
        // Remove "Text or HTML to be displayed after the set of comment fields".
	    'comment_notes_after'  => '',
		// Change the title of the reply section 
        'title_reply'          => __( 'Write a Comment or Reply', 'hrfitness' ),
        // Change the title of the reply section
    	'title_reply_to'       => __( 'reply comment', 'hrfitness' ),
    	//Cancel Reply Text
    	'cancel_reply_link'    => __( 'cancel reply comment', 'hrfitness' ),
	    //Submit Button ID
	    'id_submit'            => __( 'submit', 'hrfitness' ),


));


/**
 * Move the comment text field to the bottom.  (this code will add in theme functions.php file)
 */

// function hr_move_comment_field_to_bottom( $fields ) {
 
//     $comment_field = $fields['comment'];
//     unset( $fields['comment'] );
//     $fields['comment'] = $comment_field;

//     return $fields;
 
// }
// add_filter( 'comment_form_fields',      'hr_move_comment_field_to_bottom', 18 );

	

