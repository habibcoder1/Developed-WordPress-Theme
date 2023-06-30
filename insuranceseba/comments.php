<?php 
/**
 * @package Insurance Seba
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
$iseba_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) : ?>

		<!-- ==========================
			Comments Number
		=========================== -->
		<h4 class="comments-title">
			<?php if ( '1' === $iseba_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'insurance-seba' ); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $iseba_comment_count, 'Comments title', 'insurance-seba' ) ),
					esc_html( number_format_i18n( $iseba_comment_count ) )
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
		    	'screen_reader_text'=> __(' ','insurance-seba'),
		    	'prev_text'  => __('Previous','insurance-seba'),
		    	'next_text'  => __('Next','insurance-seba'),
		    	'type'       => __('list', 'insurance-seba'),
		    	'show_all'   => true,
		    	'end_size'   => 5,
		    ) ); // end comment pagination

		    ?>
		</div>

		<!--////// When Comments Closed /////////// -->
		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'insurance-seba' ); ?></p>
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
					<input id="author" name="author" type="text" class="w-full outline-none py-[3px] px-3 border-2 border-[#ccc]" placeholder="Name" value="" size="30" maxlength="245" autocomplete="name" required="required">
					</p>',

				//Email
				'email' => '<p class="comment-form-email">
					<input id="email" name="email" placeholder="Email" type="email" value="" class="w-full outline-none py-[3px] px-3 border-2 border-[#ccc]" size="30" maxlength="100" autocomplete="email" required="required">
					</p>',

				// cookies
				'cookies' => '',


			)),
			

			// Textarea field
			'comment_field'  => '<p class="comment-form-comment">
						<textarea id="comment" name="comment" cols="55" rows="10" maxlength="65525" class="outline-none py-[3px] px-3 border-2 border-[#ccc] block mt-4 h-[110px] sm:h-[130px] md:h-[160px] lg:h-[200px] w-full resize-none" placeholder="Message" required="required" spellcheck="false"></textarea>
						</p>',

			// Remove " Your email address will not be published. Required fields are marked * ".
			'comment_notes_before'=>'',

			// Remove "Text or HTML to be displayed after the set of comment fields".
		    'comment_notes_after' => '',

			// Change the title of the reply section 
			'title_reply'         => __( 'Leave A Comment', 'insurance-seba' ),

			// Reply title before
			'title_reply_before'  => '<h4 id="reply-title" class="comment-reply-title title capitalize text-lg">',

			// Reply title after
			'title_reply_after'   => '</h4>',

			 // Change the title of the reply section
			'title_reply_to'      => __( 'Reply', 'insurance-seba' ),

			 //Cancel Reply Text
			'cancel_reply_link'   => __( 'Cancel Reply', 'insurance-seba' ),

			 //Submit Button ID/Class
			 'id_submit'          => __( 'submit' ),
			 'class_submit'       => __('mt-4 capitalize bg-[#0b7ad4] text-white px-4 py-2 cursor-pointer transition-colors duration-500 hover:bg-[#DD3627]', 'insurance-seba'),

			 // input submit 
			'label_submit'        => __( 'Send Message', 'insurance-seba' ),
		),

	);
	?>

</div><!-- #comments -->