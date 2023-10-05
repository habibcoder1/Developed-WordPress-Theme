<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Template for displaying Comments Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} 

// passwork required
if ( post_password_required() ) {
	return;
};

// variable for comment number
$witl_comment_count = get_comments_number(); ?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) : ?>

		<!-- ==========================
			Comments Number
		=========================== -->
		<h4 class="comments-title">
			<?php if ( '1' === $witl_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'witl' ); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $witl_comment_count, 'Comments title', 'witl' ) ),
					esc_html( number_format_i18n( $witl_comment_count ) )
				);
				?>
			<?php endif; ?>  
		</h4><!-- .comments-title -->


		<!-- ==========================
			Comments List
		=========================== -->
		<ul class="comment-list">
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


		<!-- ==========================
			Comments Pagination
		=========================== -->
		<div class="comment-pagination">
		    <?php 

		    // the_comments_pagination();  OR

		    paginate_comments_links( array(
		    	'screen_reader_text'=> __(' ','witl'),
		    	'prev_text'  => __('Previous','witl'),
		    	'next_text'  => __('Next','witl'),
		    	'type'       => __('list', 'witl'),
		    	'show_all'   => true,
		    	'end_size'   => 5,
		    ) ); // end comment pagination

		    ?>
		</div>

		<!--////// When Comments Closed /////////// -->
		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'witl' ); ?></p>
		<?php endif; ?>

	<?php endif; ?>


	<!-- ==========================
		Comments Form
	=========================== -->
	<?php
	comment_form(

		array(

			'fields'   => apply_filters( 'comment_form_default_fields', array(
				'<div class="row">',
					//Author
					'<div class="col-sm-6 col-md-6">',
						'author' => '<p class="comment-form-author">
							<label for="comment_name" class="text-capitalize">name <span class="required">*</span></label>
							<input id="author" name="author" type="text" class="form-control" placeholder="Your Name" value="" size="30" maxlength="245" autocomplete="name" required="required">
							</p>',
					'</div>',

					//Email
					'<div class="col-sm-6 col-md-6">',
						'email' => '<p class="comment-form-email">
							<label for="comment_email" class="text-capitalize">email <span class="required">*</span></label>
							<input id="email" name="email" placeholder="Your Email" type="email" value="" class="form-control" size="30" maxlength="100" autocomplete="email" required="required">
							</p>',
					'</div>',

				'</div>',
				// cookies
				'cookies' => '',


			)),
			

			// Textarea field
			'comment_field'  => '<p class="textarea-box">
					<label for="comment_content" class="text-capitalize">say something <span class="required">*</span></label>
					<textarea id="comment" name="comment" maxlength="65525" class="form-control" placeholder="Write Something" required="required" spellcheck="false"></textarea>
					</p>',

			// Remove " Your email address will not be published. Required fields are marked * ".
			'comment_notes_before'=>'',

			// Remove "Text or HTML to be displayed after the set of comment fields".
		    'comment_notes_after' => '<p class="comment-form-cookies-consent">
				<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> 
				<label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>',

			// Change the title of the reply section 
			'title_reply'         => __( 'Leave A Comment', 'witl' ),

			// Reply title before
			'title_reply_before'  => '<h3 id="reply-title" class="comment-reply-title">',

			// Reply title after
			'title_reply_after'   => '</h3>',

			 // Change the title of the reply section
			'title_reply_to'      => __( 'Reply', 'witl' ),

			 //Cancel Reply Text
			'cancel_reply_link'   => __( 'Cancel Reply', 'witl' ),

			 //Submit Button ID/Class
			 'id_submit'          => __( 'submit', 'witl' ),
			 'class_submit'       => __('witlPrimaryBtn', 'witl'),

			 // input submit 
			'label_submit'        => __( 'Send Message', 'witl' ),
		),

	); ?>

</div> <!-- #comments -->