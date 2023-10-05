<?php  
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Theme Custom Post Type
 */


if(!defined('ABSPATH')){
    exit('not valid');
}; 



/* ========================
    Custom Post Type
======================== */
add_action('init', 'witl_custom_post_type');
function witl_custom_post_type(){
    // regsiter services post type //
    register_post_type('witl-service', array(
        'public'        => true,
        'labels'        => array(
            'name'                  => __('WITL Services', 'witl'),
            'add_new'               => __('Add Service', 'witl'),
            'add_new_item'          => __('Add New Service', 'witl'),
            'edit_item'             => __('Edit Service', 'witl'),
            'view_item'             => __('View Service', 'witl'),
            'new_item'              => __('New Service', 'witl'),
            'featured_image'        => __('Service Image', 'witl'),
            'set_featured_image'    => __('Set Service Image', 'witl'),
            'remove_featured_image' => __('Remove Service Image', 'witl'),
        ),
        'menu_icon'     => 'dashicons-editor-paste-word',
        'menu_position' => 20,
        'show_ui'       => true,
        'rewrite'       => array('slug' => 'witl-service'),
        'has_archive'   => true,
        'query_var'     => true,
        'supports'      => ['title', 'editor', 'thumbnail', 'revisions', 'comments', 'page-attributes'],
        'publicly_queryable' => true,
    ));

    // register category
    register_taxonomy('witlser_cate', 'witl-service', array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'                => __('Categories', 'witl'),
            'add_new'             => __('Add Category','witl'),
            'add_new_item'        => __('Add New Category', 'witl'),
            'all_items'           => __('All Category', 'witl'),
            'edit_item'           => __('Edit Category', 'witl'),
            'update_item'         => __('Update Category', 'witl'),
            'add_or_remove_items' => __('Add/Remove Category', 'witl'),
        ),
        'show_ui'           => true,
        'rewrite'           => array('slug' => 'service-category'),   //taxonomy slug
        'query_var'         => true,
        'has_archive'       => false,
        'show_in_rest'      => true,
        'publicly_queryable'=> true,
        'show_admin_column' => true,
    ));

    // Register Taxonomy for Tag
    register_taxonomy('witlser_tags', 'witl-service', array(
        'labels'            => array(
            'name'                => __('Tags', 'witl'),
            'add_new'             => __('Add Tag', 'witl'),
            'add_new_item'        => __('Add New Tag', 'witl'),
            'all_items'           => __('All Tags', 'witl'),
            'edit_item'           => __('Edit Tags', 'witl'),
            'view_item'           => __('View Tag', 'witl'),
            'search_items'        => __('Search Tag', 'witl'),
            'update_item'         => __('Update Tags', 'witl'),
            'not_found'           => __('No Tag Found', 'witl'),
            'add_or_remove_items' => __('Add/Remove Tag', 'witl'),
        ),
        'show_ui'           => true,
        'rewrite'           => array('slug' => 'service-tag'),
        'query_var'         => true,
        'show_admin_column' => true,
    ));
    
    // regsiter team post type //
    register_post_type('witl-team', array(
        'public'        => true,
        'labels'        => array(
            'name'                  => __('WITL Teams', 'witl'),
            'add_new'               => __('Add Member', 'witl'),
            'add_new_item'          => __('Add New Team Member', 'witl'),
            'edit_item'             => __('Edit Team Member', 'witl'),
            'view_item'             => __('View Team Member', 'witl'),
            'new_item'              => __('New Team Member', 'witl'),
            'featured_image'        => __('Team Member Image', 'witl'),
            'set_featured_image'    => __('Set Team Member Image', 'witl'),
            'remove_featured_image' => __('Remove Team Member Image', 'witl'),
        ),
        'menu_icon'     => 'dashicons-groups',
        'menu_position' => 22,
        'show_ui'       => true,
        'rewrite'       => array('slug' => 'witl-team'),
        'has_archive'   => true,
        'query_var'     => true,
        'supports'      => ['title', 'editor', 'thumbnail', 'revisions', 'page-attributes'],
        'publicly_queryable' => true,
    ));

    // register category
    register_taxonomy('witlteam_dep', 'witl-team', array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'                => __('Departments', 'witl'),
            'add_new'             => __('Add Department','witl'),
            'add_new_item'        => __('Add New Department', 'witl'),
            'all_items'           => __('All Department', 'witl'),
            'edit_item'           => __('Edit Department', 'witl'),
            'update_item'         => __('Update Department', 'witl'),
            'add_or_remove_items' => __('Add/Remove Department', 'witl'),
            'parent_item'         => __('Main Department', 'witl'),
        ),
        'show_ui'           => true,
        'rewrite'           => array('slug' => 'team-department'),   //taxonomy slug
        'query_var'         => true,
        'has_archive'       => false,
        'show_in_rest'      => true,
        'publicly_queryable'=> true,
        'show_admin_column' => true,
    ));


}

 // Title Placeholder name change
 add_filter( 'enter_title_here', 'witl_team_member_title_placeholder_change' );
 function witl_team_member_title_placeholder_change( $title ){

    $screen = get_current_screen();
    if  ( 'witl-team' == $screen->post_type ) {
     $title = 'Team Member Name';
    }

    return $title;
 }



/* ========================
    Custom Meta Box
======================== */
add_action('add_meta_boxes', 'witl_metaboxes');
function witl_metaboxes(){
    // in post
    add_meta_box( 
        'witlpost-metabox',     //unique id
        __('Post Reading Time', 'witl'),  //title
        'witl_postmetabox_callback',  //callback function
        'post',            // post type
        'normal',         // position
        'high'            // high, side
    );

    // in teams
    add_meta_box( 
        'witlteam-metabox',     //unique id
        __('Team Member Designation & Social Links', 'witl'),  //title
        'witl_teammetabox_callback',  //callback function
        'witl-team',            // post type
        'normal',         // position
        'high'            // high, side
    );
}
// callback for Reading Time metabox
function witl_postmetabox_callback(){ ?>
    
    <div class="witl_post-metabox">
        <p>
            <label for="witlpost_readingtime"><?php _e('Post Reading Time', 'witl'); ?></label>
            <input type="text" class="regular-text" placeholder="Second title is here" name="witlpost_readingtime" id="witlpost_readingtime" value="<?php echo get_post_meta(get_the_ID(), '_witlreadingtime', true); ?>" >
        </p>
                
    </div>

<?php
}
// save post
add_action('save_post', 'witl_metabox_save_post');
function witl_metabox_save_post($post_id){
    // for title
    if(isset($_POST['witlpost_readingtime'])){
        $reading_time = sanitize_text_field($_POST['witlpost_readingtime']);
        
        update_post_meta( $post_id, '_witlreadingtime', $reading_time);
    }

}

// callback for Team Member metabox //
function witl_teammetabox_callback(){ ?>
    
    <div class="witl_team-metabox">
        <p>
            <label for="witl-designation" style="margin-right: 5px; font-weight: 600;"><?php _e('Designation', 'witl'); ?></label>
            <input type="text" class="regular-text" placeholder="Team member designation" name="witl-designation" id="witl-designation" value="<?php echo get_post_meta(get_the_ID(), '_witldesignation', true); ?>" >
        </p>
        <b style="font-size: 15px;">Social Links</b>
        <p>
            <label for="witl-team-facebook" style="margin-right: 10px;"><?php _e('Facebook url', 'witl'); ?></label>
            <input type="text" class="regular-text" placeholder="only username" name="witl-team-facebook" id="witl-team-facebook" value="<?php echo get_post_meta(get_the_ID(), '_team-facebook', true); ?>" >
        </p>
        <p>
            <label for="witl-team-twitter" style="margin-right: 24px;"><?php _e('Twitter url', 'witl'); ?></label>
            <input type="text" class="regular-text" placeholder="only username" name="witl-team-twitter" id="witl-team-twitter" value="<?php echo get_post_meta(get_the_ID(), '_tea-twitter', true); ?>" >
        </p>
        <p>
            <label for="witl-team-linkedin" style="margin-right: 15px;"><?php _e('Linkedin url', 'witl'); ?></label>
            <input type="text" class="regular-text" placeholder="only username" name="witl-team-linkedin" id="witl-team-linkedin" value="<?php echo get_post_meta(get_the_ID(), '_team-linkedin', true); ?>" >
        </p>
        <p>
            <label for="witl-team-instagram" style="margin-right: 6px;"><?php _e('Instagram url', 'witl'); ?></label>
            <input type="text" class="regular-text" placeholder="only username" name="witl-team-instagram" id="witl-team-instagram" value="<?php echo get_post_meta(get_the_ID(), '_team-instagram', true); ?>" >
        </p>
                
    </div>

<?php
}
// save post
add_action('save_post', 'witl_teams_metabox_save_post');
function witl_teams_metabox_save_post($post_id){
    // for designation
    if(isset($_POST['witl-designation'])){
        $reading_time = sanitize_text_field($_POST['witl-designation']);
        
        update_post_meta( $post_id, '_witldesignation', $reading_time);
    }
    // for facebook
    if(isset($_POST['witl-team-facebook'])){
        $reading_time = sanitize_text_field($_POST['witl-team-facebook']);
        
        update_post_meta( $post_id, '_team-facebook', $reading_time);
    }
    // for twitter
    if(isset($_POST['witl-team-twitter'])){
        $reading_time = sanitize_text_field($_POST['witl-team-twitter']);
        
        update_post_meta( $post_id, '_tea-twitter', $reading_time);
    }
    // for instagram
    if(isset($_POST['witl-team-instagram'])){
        $reading_time = sanitize_text_field($_POST['witl-team-instagram']);
        
        update_post_meta( $post_id, '_team-instagram', $reading_time);
    }
    // for linkedin
    if(isset($_POST['witl-team-linkedin'])){
        $reading_time = sanitize_text_field($_POST['witl-team-linkedin']);
        
        update_post_meta( $post_id, '_team-linkedin', $reading_time);
    }

}



/* =============================
    Cotent show in Dashboard
============================= */
add_filter('manage_witl-team_posts_columns', 'witl_custom_post_list_columns');
function witl_custom_post_list_columns($columns) {
    $new_columns = array();

    foreach ($columns as $key => $value) {
        if ($key === 'date') {
            $new_columns['featured_image'] = 'Photo'; 
        }

        $new_columns[$key] = $value;

        if ($key === 'title') {
            $new_columns['witl_designation'] = 'Designation';
        }
    }

    return $new_columns;
}

add_action('manage_witl-team_posts_custom_column', 'witl_post_list_column_content', 10, 2);
function witl_post_list_column_content($column, $post_id) {
    if ($column === 'witl_designation') {
        echo get_post_meta($post_id, '_witldesignation', true);
    }

    if ($column === 'featured_image') {
        echo get_the_post_thumbnail($post_id, array(38, 38));  // image size
    }
}




