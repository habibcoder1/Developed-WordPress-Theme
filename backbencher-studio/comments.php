<?php 
/**
 * @package Backbencher Studio
 * Version: 1.0.0
 * 
 * Template for displaying Comments Page
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
} 

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$bbs_comment_count = get_comments_number(); ?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php if ( '1' === $bbs_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'backbencher' ); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $bbs_comment_count, 'Comments title', 'backbencher' ) ),
					esc_html( number_format_i18n( $bbs_comment_count ) )
				);
				?>
			<?php endif; ?>
		</h2><!-- .comments-title -->

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'avatar_size' => 60,
					'style'       => 'ol',
					'short_ping'  => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_pagination(
			array(
				'before_page_number' => esc_html__( 'Page', 'backbencher' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => esc_html__('Previous', 'backbencher'),
				'next_text'          => esc_html__( 'Nex', 'backbencher' ),
			)
		);
		?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'backbencher' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'title_reply'        => esc_html__( 'Leave a comment', 'backbencher' ),
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
		)
	);
	?>

</div><!-- #comments -->