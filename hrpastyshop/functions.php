<?php 
/**
 * @package hrpastyshop
 * 
 *  HR Pasty Shop theme all functions and definations
 */


// ABSPATH Defined
if(!defined('ABSPATH')){
	exit('not valid');
}



/* ==========================
Like/Dislike
=========================== */

// Get like or dislike count
function hr_get_like_count($type = 'likes') {
	$current_count = get_post_meta(get_the_id(), $type, true);

	return ($current_count ? $current_count : 0);
};

add_action('template_redirect', 'hr_process_like_dislike');
// Process like or dislike 
function hr_process_like_dislike() {
	$like_process = false;
	$redirect     = false;

	// Check if like or dislike
	if(is_singular('post')) {

		if(isset($_GET['post_action'])) {
			if($_GET['post_action'] == 'like') {
				// Like
				$like_count = get_post_meta(get_the_id(), '_likes', true);

				if($like_count) {
					$like_count = $like_count + 1;
				}else {
					$like_count = 1;
				}

				$like_process = update_post_meta(get_the_id(), '_likes', $like_count);
			}elseif($_GET['post_action'] == 'dislike') {
				// Dislike
				$dislike_count = get_post_meta(get_the_id(), '_dislikes', true);

				if($dislike_count) {
					$dislike_count = $dislike_count + 1;
				}else {
					$dislike_count = 1;
				}

				$like_process = update_post_meta(get_the_id(), '_dislikes', $dislike_count);
			}

			if($like_process) {
				$redirect = get_the_permalink();
			}
		}
		
	}

	// Redirect
	if($redirect) {
		wp_redirect($redirect);
		die;
	}
}; //like/dislike





/* ==========================
Requires Files
=========================== */
// TGM Plugin Activation
if (file_exists(dirname(__FILE__).'/inc/lib/plugins/config.php')) {
	require_once(dirname(__FILE__).'/inc/lib/plugins/config.php');
}

// Theme Customizer
if(file_exists(dirname(__FILE__).'/inc/theme-customizer/theme_customizer.php')){
	require_once(dirname(__FILE__).'/inc/theme-customizer/theme_customizer.php');
}

// Theme Option
if(file_exists(dirname(__FILE__).'/inc/theme-option/admin_theme_option.php')){
	require_once(dirname(__FILE__).'/inc/theme-option/admin_theme_option.php');
}

// Login Dashboard Customize
if(file_exists(dirname(__FILE__).'/inc/login/wp_custom_login.php')){
	require_once(dirname(__FILE__).'/inc/login/wp_custom_login.php');
}

/* ===============================
Shortcodes for Visual Composser 
================================ */
add_action('vc_before_init', 'hrpasty_vc_map_shortcodes');
function hrpasty_vc_map_shortcodes(){
	
	// Home Page Art of Cake
	if (file_exists(dirname(__FILE__).'/inc/shortcodes/home-artofcake.php')) {
		require_once(dirname(__FILE__).'/inc/shortcodes/home-artofcake.php');
	}
	// Home Page Pancake
	if (file_exists(dirname(__FILE__).'/inc/shortcodes/home-pancake.php')) {
		require_once(dirname(__FILE__).'/inc/shortcodes/home-pancake.php');
	}
	// Home Breakfast
	if (file_exists(dirname(__FILE__).'/inc/shortcodes/home-breakfast.php')) {
		require_once(dirname(__FILE__).'/inc/shortcodes/home-breakfast.php');
	}
	// Home Sandwich
	if (file_exists(dirname(__FILE__).'/inc/shortcodes/home-sandwich.php')) {
		require_once(dirname(__FILE__).'/inc/shortcodes/home-sandwich.php');
	}
	// Breakfast Menu
	if (file_exists(dirname(__FILE__).'/inc/shortcodes/breakfast-menuitem.php')) {
		require_once(dirname(__FILE__).'/inc/shortcodes/breakfast-menuitem.php');
	}
	// Lunch Menu
	if (file_exists(dirname(__FILE__).'/inc/shortcodes/lunch-menuitem.php')) {
		require_once(dirname(__FILE__).'/inc/shortcodes/lunch-menuitem.php');
	}
	// Dinner Menu
	if (file_exists(dirname(__FILE__).'/inc/shortcodes/dinner-menuitem.php')) {
		require_once(dirname(__FILE__).'/inc/shortcodes/dinner-menuitem.php');
	}
	
};

///////// Widgets Development //////////

// Popular Food Widget Development
if(file_exists(dirname(__FILE__).'/inc/widgets/popular-food.php')){
	require_once(dirname(__FILE__).'/inc/widgets/popular-food.php');
}
// Speech of MD Widget Development
if(file_exists(dirname(__FILE__).'/inc/widgets/speech-md.php')){
	require_once(dirname(__FILE__).'/inc/widgets/speech-md.php');
}
// Location/Address Widget Development
if(file_exists(dirname(__FILE__).'/inc/widgets/hrpasty-location.php')){
	require_once(dirname(__FILE__).'/inc/widgets/hrpasty-location.php');
}


/* ==========================
CSS Files Enqueue
=========================== */
add_action('wp_enqueue_scripts', 'hrpastyall_css_enqueue');
function hrpastyall_css_enqueue(){
	// Google Fonts
	wp_enqueue_style('hrpasty-google-fonts', 'https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400;0,500;0,700;1,400&family=Playfair+Display:wght@400;700&display=swap');
	// Others CSS
	wp_enqueue_style('hrpasty-all', get_template_directory_uri().'/css/all.min.css');
	wp_enqueue_style('hrpasty-fontawesome', get_template_directory_uri().'/css/fontawesome-6.1.2.min.css');
	wp_enqueue_style('hrpasty-bootstrap', get_template_directory_uri().'/css/bootstrap-5.2.0.min.css');
	wp_enqueue_style('stylesheet', get_stylesheet_uri() );
	wp_enqueue_style('hrpasty-custom', get_template_directory_uri().'/css/custom.css');
	wp_enqueue_style('hrpasty-responsive', get_template_directory_uri().'/css/responsive.css');
}


/* ==========================
Scripts Files Enqueue
=========================== */
add_action('wp_enqueue_scripts', 'hrpasty_all_scripts_enqueue');
function hrpasty_all_scripts_enqueue(){
	wp_enqueue_script('hrpasty-fontawesome', get_template_directory_uri().'/js/fontawesome.min.js', array('jquery'), ' ', true);
	wp_enqueue_script('hrpasty-bootstrap', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array('jquery'), ' ', true);
	wp_enqueue_script('hrpasty-custom', get_template_directory_uri().'/js/custom.js', array('jquery'), ' ', true);
	wp_enqueue_script('comment-reply');
};

// Conditional Scripts
add_action('wp_enqueue_scripts', 'hrpasty_conditional_scripts');
function hrpasty_conditional_scripts(){
	wp_enqueue_script('html5shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_script_add_data('html5shim', 'conditional', 'if It ie 9');
};

/* ==========================
Enqueue for Login Panel
=========================== */
add_action('login_enqueue_scripts', 'hradmin_scripts');
function hradmin_scripts(){
	wp_enqueue_style( 'hrlogin', get_template_directory_uri().'/css/login.css', '', '1.0.0', false);
};


/* ==========================
Scripts For Admin Panel
=========================== */
add_action('admin_enqueue_scripts', 'hrpasty_admin_scripts');
function hrpasty_admin_scripts(){
	// for wp media
	wp_enqueue_media();
	// for admin js
	wp_enqueue_script('hradmin-scripts', get_theme_file_uri().'/js/admin-script.js', array('jquery'), '1.0.0', true);
	// for admin css
	wp_enqueue_style( 'hr_admin', get_template_directory_uri().'/css/admin.css', array(), '1.0.0', 'all');
}


/* ==========================
Theme Support
=========================== */
add_action('after_setup_theme', 'hrpasty_theme_support');
function hrpasty_theme_support(){
	add_theme_support('title-tag');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('widgets');
	add_theme_support('woocommerce');
	add_theme_support('custom-logo', array('width' => 150, 'height' => 80));
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('audio', 'video', 'gallery', 'aside', 'quote'));
	// Text Domain
	load_theme_textdomain('hrpasty', get_template_directory().'/lang');
	// Menus Register
	register_nav_menu('hrpstmmenu', __('Primary Menu', 'hrpasty'));
	register_nav_menu('hrpstfmenu1', __('Footer Menu First', 'hrpasty'));
	register_nav_menu('hrpstfmenu2', __('Footer Menu Second', 'hrpasty'));
};


/* ===============================
Widget Regsiter
================================ */
add_action('widgets_init', 'hrpasty_widget_register');
function hrpasty_widget_register(){
	// Main Sidebar
	register_sidebar(array(
		'name'    		=> __('Main Sidebar', 'hrpasty'),
		'id'      		=> 'hrpasty-sidebar1',
		'description'   => __('This is main sidebar', 'hrpasty'),
		'class'   		=> '',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	));

	// Popular Food Widget Development
	register_widget('hrpopular_foodwidget');

	// Speech of MD Widget Development
	register_widget('hrpasty_speechmd');

	// HR Pasty Address Widget Development
	register_widget('hrpasty_address');
	
}



/* ===============================
Custom Post Type
================================ */
add_action('init', 'hrpasty_menu_post_type');
function hrpasty_menu_post_type(){

	/* Post Type for Food Menus */
	register_post_type('hrpasty-menus', array(
		'public'            => true,
		'labels'            => array(
			'name'          		=> __('Food Menus', 'hrpasty'),
			'add_new'       		=> __('Add Food', 'hrpasty'),
			'add_new_item'  		=> __('Add Food Item', 'hrpasty'),
			'edit_item'     		=> __('Edit Food Item', 'hrpasty'),
			'view_item'     		=> __('View Food Item', 'hrpasty'),
			'new_item'      		=> __('New Food', 'hrpasty'),
			'featured_image'        => __('Food Image', 'hrpasty'),
			'set_featured_image'    => __('Set Food Image', 'hrpasty'),
			'remove_featured_image' => __('Remove Food Image', 'hrpasty'),
		),
		'menu_icon'         => 'dashicons-food',
		'menu_position'     => 25,
		'show_ui'           => true,
		'rewrite'           => array('slug' => 'menu-items'),
		'query_var'         => true,
		'has_archive'       => true,
		// 'taxonomies'     => array('tags'),
		'supports'          => array('title', 'editor', 'thumbnail', 'post-formats', 'revisions', 'page-attributes', 'comments'),
		'publicly_queryable'=> true,
	));

	// Register Taxonomy for Categories
 	register_taxonomy('hrpasty_taxonomy', 'hrpasty-menus', array(
		'public'            => true,
		'hierarchical'      => true,
		'labels'            => array(
			'name'                => __('Categories', 'hrpasty'),
			'add_new'             => __('Add Category','hrpasty'),
			'add_new_item'        => __('Add New Category', 'hrpasty'),
			'all_items'           => __('All Category', 'hrpasty'),
			'edit_item'           => __('Edit Category', 'hrpasty'),
			'update_item'         => __('Update Category', 'hrpasty'),
			'add_or_remove_items' => __('Add/Remove Category', 'hrpasty'),
		),
		'show_ui'           => true,
		'rewrite'           => array('slug' => 'menus-category'),   //taxonomy slug
		'query_var'         => true,
		'has_archive'       => false,
		'show_in_rest'      => true,
		'publicly_queryable'=> true,
		'show_admin_column' => true,
	));


	// Register Taxonomy for Tag
	register_taxonomy('hrpasty_tags', 'hrpasty-menus', array(
		'public'            => true,
		'labels'            => array(
			'name'                => __('Tags', 'hrpasty'),
			'add_new'             => __('Add Tag', 'hrpasty'),
			'add_new_item'        => __('Add New Tag', 'hrpasty'),
			'all_items'           => __('All Tags', 'hrpasty'),
			'edit_item'           => __('Edit Tags', 'hrpasty'),
			'view_item'           => __('View Tag', 'hrpasty'),
			'search_items'        => __('Search Tag', 'hrpasty'),
			'update_item'         => __('Update Tags', 'hrpasty'),
			'not_found'           => __('No Tag Found', 'hrpasty'),
			'add_or_remove_items' => __('Add/Remove Tag', 'hrpasty'),
		),
		'show_ui'           => true,
		'rewrite'           => array('slug' => 'menus-tag'),
		'query_var'         => true,
		'show_admin_column' => true,
	));



};


/* =======================================================
Allow only Post & Custom Post Content from Search Filter
======================================================== */
add_filter('pre_get_posts','searchFilter');
function searchFilter($query) {
    if ($query->is_search) {

        $query->set('post_type', array('post', 'hrpasty-menus'));
    }
    return $query;
}


/* ===============================
Metabox for Food Menu
================================ */
add_action('add_meta_boxes', 'hrpasty_foodmenu_metabox');
function hrpasty_foodmenu_metabox(){
	add_meta_box(
		'hrfoodmenu-custommetabox',    // unique id for metabox
		__('Menu Price', 'hrpasty'),   // title
		'hrpasty_foodprice',           // callback function
		'hrpasty-menus',               // post type (where will add)
		'normal',                      // set position
	);
}
// callback function
function hrpasty_foodprice(){ ?>
	<p>
		<label for="hrfprice"><?php _e('Food Menu Price', 'hrpasty') ?></label>
		<input type="text" class="regular-text" name="hrfprice" id="hrfprice" placeholder="Menu Price" value="<?php echo get_post_meta(get_the_ID(), '_hrfmprice', true); ?>">
	</p>

<?php 
}

// save post
add_action('save_post', 'hrpasty_pricemetabox_save');
function hrpasty_pricemetabox_save($post_id){

	if (isset( $_POST['hrfprice'] )) {
		update_post_meta($post_id, '_hrfmprice', $_POST['hrfprice']);
	};

}


/* =============================================
 * Move the comment text field to the bottom.
============================================== */
add_filter( 'comment_form_fields', 'hr_move_comment_field_to_bottom' );
function hr_move_comment_field_to_bottom( $fields ) {
 	// for textarea field
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;

    // for cookies
    $cookies_field = $fields['cookies'];
    unset( $fields['cookies'] );
    $fields['cookies'] = $cookies_field;

    return $fields;
};


/* =========================
 Post View Option
========================= */
// views show in a function
function hr_get_post_view() {
    $counts = get_post_meta( get_the_ID(), '_post_view', true );

    return "$counts Views";

};
// views set and increase count in a function
function hr_set_post_view() {

    $count = (int) get_post_meta( get_the_ID(), '_post_view', true );
    $count++;

    update_post_meta( get_the_ID(), '_post_view', $count );

};



// Add a column in post/custom post dashboard
add_filter( 'manage_posts_columns', 'hr_posts_column_views' );
function hr_posts_column_views( $columns ) {

    $columns['post_views'] = 'Views';

    return $columns;

};
// How many views count will show in post/custom post dashboard
add_action( 'manage_posts_custom_column', 'hr_posts_custom_column_views' );
function hr_posts_custom_column_views( $column ) {

    if ( $column === 'post_views') {

        echo hr_get_post_view();

    }

};


/* =========================
 Header BG Image Style
========================= */
add_action( 'wp_head', 'hr_pasty_header_design', 0);  //here 0 for top
function hr_pasty_header_design(){ ?>
	<style>
		.header-area{
			background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('<?php echo get_option('header-bgimg'); ?>'); 
			background: -o-linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('<?php echo get_option('header-bgimg'); ?>');
			background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.1)), to(rgba(0, 0, 0, 0.1))), url('<?php echo get_option('header-bgimg'); ?>');
		}
	</style>
<?php
}

