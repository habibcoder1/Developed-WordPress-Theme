<?php  
/**
 * @package Insurance Seba
 * 
 * Like & Dislike Functions
 */

 if (!defined('ABSPATH')) {
	exit('not valid');
}


/* ==========================
Like/Dislike
=========================== */
// Get like or dislike count
function hr_get_like_count($type = 'iseba-like') {
	$current_count = get_post_meta(get_the_id(), $type, true);

	return ($current_count ? $current_count : 0);
};

add_action('wp_ajax_process_like_dislike', 'process_like_dislike_ajax');
add_action('wp_ajax_nopriv_process_like_dislike', 'process_like_dislike_ajax');
function process_like_dislike_ajax() {
    $post_action = isset($_POST['post_action']) ? sanitize_text_field($_POST['post_action']) : '';
    $post_id     = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;
    $post_type   = isset($_POST['post_type']) ? sanitize_text_field($_POST['post_type']) : '';

    $like_count    = 0;
    $dislike_count = 0;
    $message       = '';

    if ($post_action && $post_id && $post_type) {
        if ($post_type === 'post') {
            if ($post_action === 'like') {
                // Like
                $like_count = get_post_meta($post_id, '_likes', true);

                if ($like_count) {
                    $like_count++;
                } else {
                    $like_count = 1;
                }

                $like_process  = update_post_meta($post_id, '_likes', $like_count);
                $dislike_count = get_post_meta($post_id, '_dislikes', true); // Get current dislike count

                if (!$dislike_count) {
                    $dislike_count = 0;
                }

                $message = 'Liked successfully.';
            } elseif ($post_action === 'dislike') {
                // Dislike
                $dislike_count = get_post_meta($post_id, '_dislikes', true);

                if ($dislike_count) {
                    $dislike_count++;
                } else {
                    $dislike_count = 1;
                }

                $dislike_process = update_post_meta($post_id, '_dislikes', $dislike_count);
                $like_count = get_post_meta($post_id, '_likes', true); // Get current like count

                if (!$like_count) {
                    $like_count = 0;
                }

                $message = 'Disliked successfully.';
            }
        }
    }
    // like/dislike count, message
    $response = array(
        'success' => ($like_process || $dislike_process),
        'data'    => array(
            'like_count'    => $like_count,
            'dislike_count' => $dislike_count,
            'message'       => $message
        )
    );

    wp_send_json($response);
}  //end like/dislike
