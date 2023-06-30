<?php  
/**
 * @package Insurance Seba
 * 
 * Custom Post Type
 */

 if (!defined('ABSPATH')) {
	exit('not valid');
}


/* ========================
 	Custom Post Type
======================== */
add_action('init', 'iseba_policy_post_type');
function iseba_policy_post_type(){
    // regsiter post type
    register_post_type('iseba-policy', array(
        'public'        => true,
        'labels'        => array(
            'name'                  => __('Policy', 'insurance-seba'),
            'add_new'               => __('Add Policy', 'insurance-seba'),
            'add_new_item'          => __('Add New Policy', 'insurance-seba'),
            'edit_item'             => __('Edit Policy', 'insurance-seba'),
            'view_item'             => __('View Policy', 'insurance-seba'),
            'new_item'              => __('New Policy', 'insurance-seba'),
            'featured_image'        => __('Policy Image', 'insurance-seba'),
            'set_featured_image'    => __('Set Policy Image', 'insurance-seba'),
            'remove_featured_image' => __('Remove Policy Image', 'insurance-seba'),
        ),
        'menu_icon'     => 'dashicons-edit',
        'menu_position' => 20,
        'show_ui'       => true,
        'rewrite'       => array('slug' => 'iseba-policy'),
        'has_archive'   => true,
        'query_var'     => true,
        // 'taxonomies'       => ['category'],
        'supports'      => ['title', 'editor', 'thumbnail', 'post-formats', 'revisions', 'comments', 'page-attributes'],
        'publicly_queryable' => true,
    ));

    // register category
    register_taxonomy('ispolicy_taxonomy', 'iseba-policy', array(
		'hierarchical'      => true,
		'labels'            => array(
			'name'                => __('Categories', 'insurance-seba'),
			'add_new'             => __('Add Category','insurance-seba'),
			'add_new_item'        => __('Add New Category', 'insurance-seba'),
			'all_items'           => __('All Category', 'insurance-seba'),
			'edit_item'           => __('Edit Category', 'insurance-seba'),
			'update_item'         => __('Update Category', 'insurance-seba'),
			'add_or_remove_items' => __('Add/Remove Category', 'insurance-seba'),
		),
		'show_ui'           => true,
		'rewrite'           => array('slug' => 'policy-category'),   //taxonomy slug
		'query_var'         => true,
		'has_archive'       => false,
		'show_in_rest'      => true,
		'publicly_queryable'=> true,
		'show_admin_column' => true,
	));

    // Register Taxonomy for Tag
	register_taxonomy('ispolicy_tags', 'iseba-policy', array(
		'labels'            => array(
			'name'                => __('Tags', 'insurance-seba'),
			'add_new'             => __('Add Tag', 'insurance-seba'),
			'add_new_item'        => __('Add New Tag', 'insurance-seba'),
			'all_items'           => __('All Tags', 'insurance-seba'),
			'edit_item'           => __('Edit Tags', 'insurance-seba'),
			'view_item'           => __('View Tag', 'insurance-seba'),
			'search_items'        => __('Search Tag', 'insurance-seba'),
			'update_item'         => __('Update Tags', 'insurance-seba'),
			'not_found'           => __('No Tag Found', 'insurance-seba'),
			'add_or_remove_items' => __('Add/Remove Tag', 'insurance-seba'),
		),
		'show_ui'           => true,
		'rewrite'           => array('slug' => 'policy-tag'),
		'query_var'         => true,
		'show_admin_column' => true,
	));
}



/* ========================
 	Custom Meta Box
======================== */
add_action('add_meta_boxes', 'iseba_policy_metaboxes');
function iseba_policy_metaboxes(){
    add_meta_box( 
        'ispolicy-metabox',     //unique id
        __('Title & Accordion (for single page)', 'insurance-seba'),  //title
        'iseba_metabox_callback',  //callback function
        'iseba-policy',   // post type
        'normal'   // position
    );
}
// callback for metabox
function iseba_metabox_callback(){ ?>
    
    <div class="iseba_policy-metabox">
        <style>
            .iseba_policy-metabox{
                ::placeholder{
                    font-size: 13px;
                    font-style: italic;
                    opacity: .8;
                }
            }
        </style>
        <p>
            <label for="isptitle" style="display:block;"><?php _e('Second Title', 'insurance-seba'); ?></label>
            <input type="text" placeholder="Second title is here" name="isptitle" id="isptitle" value="<?php echo get_post_meta(get_the_ID(), '_isptitle', true); ?>" style="width:100%;">
        </p>
        <p>
            <label style="display:block; font-weight:bold;"><?php _e('Accordion Show/Hide', 'insurance-seba'); ?></label>
            <small style="display:block;font-style:italic;">Default: Hide</small>
            <?php $acconoff = get_post_meta(get_the_ID(), '_ispaccordiononoff', true); ?>
            <label for="ispaccordiononoff"><?php _e('Show', 'insurance-seba'); ?></label>
            <input type="radio" name="ispaccordiononoff" id="ispaccordiononoff" value="yes" <?php if($acconoff == 'yes'){echo 'checked="checked"';} ?> >
            <label for="ispaccordionoff"><?php _e('Hide', 'insurance-seba'); ?></label>
            <input type="radio" name="ispaccordiononoff" id="ispaccordionoff" value="not" <?php if($acconoff == 'not'){echo 'checked="checked"';} ?>>
        </p>
        <div class="accordion-items">
            <p>
                <label for="ispaccordiontitle" style="display:block;"><?php _e('Accordion Title', 'insurance-seba'); ?></label>
                <input type="text" placeholder="Accordion title is here" name="ispaccordiontitle" id="ispaccordiontitle" value="<?php echo get_post_meta(get_the_ID(), '_ispaccordiontitle', true); ?>" class="regular-text">
            </p>
            <p>
                <p style="font-weight:bold;margin: 9px 0 5px 0;"><?php _e('Accordion Items', 'insurance-seba'); ?> <span style="font-weight:normal;"><?php _e('(fill up all fields)', 'insurance-seba'); ?></span></p>
                <label for="isaccfirttitle" style="display:block;"><?php _e('Accordion First Title', 'insurance-seba'); ?></label>
                <input type="text" placeholder="Accordion first title" name="isaccfirttitle" id="isaccfirttitle" value="<?php echo get_post_meta(get_the_ID(), '_isaccfirttitle', true); ?>" class="regular-text">
            </p>
            <p style="margin-top:-10px;">
                <label for="isaccfisrtcontent" style="display:block;"><?php _e('Accordion First Content', 'insurance-seba'); ?></label>
                <textarea name="isaccfisrtcontent" id="isaccfisrtcontent" placeholder="Accordion first content" cols="60" rows="5"><?php echo get_post_meta(get_the_ID(), '_isaccfisrtcontent', true); ?></textarea>
            </p>
            <p>
                <label for="isaccsecondtitle" style="display:block;"><?php _e('Accordion Second Title', 'insurance-seba'); ?></label>
                <input type="text" placeholder="Accordion second title" name="isaccsecondtitle" id="isaccsecondtitle" value="<?php echo get_post_meta(get_the_ID(), '_isaccsecondtitle', true); ?>" class="regular-text">
            </p>
            <p style="margin-top:-10px;">
                <label for="isaccsecondcontent" style="display:block;"><?php _e('Accordion Second Content', 'insurance-seba'); ?></label>
                <textarea name="isaccsecondcontent" id="isaccsecondcontent" placeholder="Accordion second content" cols="60" rows="5"><?php echo get_post_meta(get_the_ID(), '_isaccsecondcontent', true); ?></textarea>
            </p>
            <p>
                <label for="isaccthirdtitle" style="display:block;"><?php _e('Accordion Third Title', 'insurance-seba'); ?></label>
                <input type="text" placeholder="Accordion third title" name="isaccthirdtitle" id="isaccthirdtitle" value="<?php echo get_post_meta(get_the_ID(), '_isaccthirdtitle', true); ?>" class="regular-text">
            </p>
            <p style="margin-top:-10px;">
                <label for="isaccthirdcontent" style="display:block;"><?php _e('Accordion Third Content', 'insurance-seba'); ?></label>
                <textarea name="isaccthirdcontent" id="isaccthirdcontent" placeholder="Accordion third content" cols="60" rows="5"><?php echo get_post_meta(get_the_ID(), '_isaccthirdcontent', true); ?></textarea>
            </p>
        </div>
        <!-- script for accordion -->
        <script>
            jQuery(document).ready(function($){
                jQuery('.iseba_policy-metabox input#ispaccordiononoff').click(function(){
                    jQuery('.iseba_policy-metabox .accordion-items').show(500);
                })
                jQuery('.iseba_policy-metabox input#ispaccordionoff').click(function(){
                    jQuery('.iseba_policy-metabox .accordion-items').hide(500);
                })

                if(jQuery('.iseba_policy-metabox input#ispaccordiononoff').attr('checked')){
                    jQuery('.iseba_policy-metabox .accordion-items').show();
                }else{
                    jQuery('.iseba_policy-metabox .accordion-items').hide();
                }
            });
        </script>
    </div>

<?php
}
// save post
add_action('save_post', 'iseba_policy_save_post');
function iseba_policy_save_post($post_id){
    // for title
    if(isset($_POST['isptitle'])){
        update_post_meta( $post_id, '_isptitle', $_POST['isptitle']);
    }
    // for title
    if(isset($_POST['ispaccordiononoff'])){
        update_post_meta( $post_id, '_ispaccordiononoff', $_POST['ispaccordiononoff']);
    }
    // for accordion title
    if(isset($_POST['ispaccordiontitle'])){
        update_post_meta( $post_id, '_ispaccordiontitle', $_POST['ispaccordiontitle']);
    }
    // accordion first title
    if(isset($_POST['isaccfirttitle'])){
        update_post_meta( $post_id, '_isaccfirttitle', $_POST['isaccfirttitle']);
    }
    // accordion first conent
    if(isset($_POST['isaccfisrtcontent'])){
        update_post_meta( $post_id, '_isaccfisrtcontent', $_POST['isaccfisrtcontent']);
    }
    // accordion 2nd title
    if(isset($_POST['isaccsecondtitle'])){
        update_post_meta( $post_id, '_isaccsecondtitle', $_POST['isaccsecondtitle']);
    }
    // accordion 2nd conent
    if(isset($_POST['isaccsecondcontent'])){
        update_post_meta( $post_id, '_isaccsecondcontent', $_POST['isaccsecondcontent']);
    }
    // accordion third title
    if(isset($_POST['isaccthirdtitle'])){
        update_post_meta( $post_id, '_isaccthirdtitle', $_POST['isaccthirdtitle']);
    }
    // accordion third content
    if(isset($_POST['isaccthirdcontent'])){
        update_post_meta( $post_id, '_isaccthirdcontent', $_POST['isaccthirdcontent']);
    }
}