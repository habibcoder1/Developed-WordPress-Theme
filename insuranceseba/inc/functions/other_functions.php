<?php  
/**
 * @package Insurance Seba
 * 
 * Other Important Functions
 */

 if (!defined('ABSPATH')) {
	exit('not valid');
}


/* =============================================
 * Move the comment text field to the bottom.
============================================== */
add_filter( 'comment_form_fields', 'iseba_move_comment_field_to_bottom' );
function iseba_move_comment_field_to_bottom( $fields ) {
 	// for textarea field
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;

    return $fields;
};


/* =============================
 	Themeelse Support Option
============================= */
// Save the selected option using update_option
add_action('wp_ajax_iseba_save_vote_option', 'iseba_save_vote_option');
add_action('wp_ajax_nopriv_iseba_save_vote_option', 'iseba_save_vote_option');
function iseba_save_vote_option() {
    if (isset($_POST['selectedOption'])) {
        $selectedOption = sanitize_text_field($_POST['selectedOption']);
    
        // Get the current vote counts
        $voteCounts = get_option('vote_counts', array('yesCount' => 0, 'notCount' => 0, 'ofCourseCount' => 0));
    
        // Increment the count for the selected option
        switch ($selectedOption) {
            case 'yes':
                $voteCounts['yesCount']++;
            break;
            case 'not':
                $voteCounts['notCount']++;
            break;
            case 'of-course':
                $voteCounts['ofCourseCount']++;
            break;
        }
    
        // Save the updated vote counts in the database
        update_option('vote_counts', $voteCounts);
        // echo 'Option saved successfully.';
    }
    wp_die();
}
  
// Retrieve the vote counts using get_option
add_action('wp_ajax_iseba_get_vote_counts', 'iseba_get_vote_counts');
add_action('wp_ajax_nopriv_iseba_get_vote_counts', 'iseba_get_vote_counts');
function iseba_get_vote_counts() {
    $voteCounts = get_option('vote_counts', array('yesCount' => 0, 'notCount' => 0, 'ofCourseCount' => 0));
    echo json_encode($voteCounts);
    wp_die();
}
 

