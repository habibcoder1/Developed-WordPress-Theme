<?php
/**
 * The template for displaying comments
 *
 */

// ABSPATH Defined
if(!defined('ABSPATH')){
	exit('Not Valid'); // Exit if accessed directly.
}


// passwork required
if ( post_password_required() ) {
	return;
};

// variable for comment number
$hrpasty_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) : ?>

		<!-- ==========================
			Comments Number
		=========================== -->
		<h4 class="comments-title">
			<?php if ( '1' === $hrpasty_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'hrpasty' ); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $hrpasty_comment_count, 'Comments title', 'hrpasty' ) ),
					esc_html( number_format_i18n( $hrpasty_comment_count ) )
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
		    	'screen_reader_text'=> __(' ','hrpasty'),
		    	'prev_text'  => __('Previous','hrpasty'),
		    	'next_text'  => __('Next','hrpasty'),
		    	'type'       => __('list', 'hrpasty'),
		    	'show_all'   => true,
		    	'end_size'   => 5,
		    ) ); // end comment pagination

		    ?>
		</div>

		<!--////// When Comments Closed /////////// -->
		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'hrpasty' ); ?></p>
		<?php endif; ?>

	<?php endif; ?>


	<!-- ==========================
		Comments Form
	=========================== -->
	<?php
	comment_form(

		array(

			'fields'   => apply_filters( 'comment_form_default_fields', array(

				//Author
				'author' => '<p class="comment-form-author">
					<!-- <label for="author">Name <span class="required">*</span></label> -->
					<input id="author" name="author" type="text" class="form-control" placeholder="Name *" value="" size="30" maxlength="245" autocomplete="name" required="required">
					</p>',

				//Email
				'email' => '<p class="comment-form-email">
					<!-- <label for="email">Email <span class="required">*</span></label> --> 
					<input id="email" name="email" placeholder="Email *" type="text" value="" class="form-control" size="30" maxlength="100" autocomplete="email" required="required">
					</p>',

				// Website 
	   			'url' => '<p class="comment-form-url">
						 <!--<label for="url">' .__('Website *') .'</label> -->
						 <input id="url" name="url" class="form-control" placeholder="Url *" type="text" value="" size="30" maxlength="200" required="required">
					    </p>', 

				// cookies
				'cookies' => '<p class="comment-form-cookies-consent">
					    <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> 
					    <label for="wp-comment-cookies-consent">Save my details in this browser for the next comment.</label>
					    </p>',


			)),
			

			// Textarea field
			'comment_field'  => '<p class="comment-form-comment">
						<!-- <label for="comment">Comment <span class="required">*</span></label> -->
						<textarea id="comment" name="comment" cols="55" rows="10" maxlength="65525" class="form-control" placeholder="About This Post *" required="required" spellcheck="false"></textarea>
						</p>',

			// Remove " Your email address will not be published. Required fields are marked * ".
			'comment_notes_before'=> __('<p class="before-comment-text"> Your Email will be secure. </p>', 'hrpasty'),

			// Remove "Text or HTML to be displayed after the set of comment fields".
		    'comment_notes_after' => '',

			// Change the title of the reply section 
			'title_reply'         => __( 'Write a Comment', 'hrpasty' ),

			// Reply title before
			'title_reply_before'  => '<h4 id="reply-title" class="comment-reply-title">',

			// Reply title after
			'title_reply_after'   => '</h4>',

			 // Change the title of the reply section
			'title_reply_to'      => __( 'reply comment', 'hrpasty' ),

			 //Cancel Reply Text
			'cancel_reply_link'   => __( 'cancel reply comment', 'hrpasty' ),

			 //Submit Button ID/Class
			 'id_submit'          => __( 'submit' ),
			 'class_submit'       => __('submit', 'hrpasty'),

			 // input submit 
			'label_submit'        => __( 'Post a Comment', 'hrpasty' ),
		),

	);
	?>

</div><!-- #comments -->
