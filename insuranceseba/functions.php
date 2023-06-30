<?php 
/**
 * @package Insurance Seba
 * 
 * Insurance Seba all functions and defination
 * */

if (!defined('ABSPATH')) {
	exit('you are a foolish');
}

/* ===========================
 	Require Files
=========================== */
// theme customize
$themeCustomizer = dirname(__FILE__).'/inc/theme-customize/theme-customizer.php';
if(file_exists($themeCustomizer)){
	require_once($themeCustomizer);
}

// widgets development
$policysummary = dirname(__FILE__).'/inc/widgets/policy-summary.php';
if(file_exists($policysummary)){
	require_once($policysummary);
}
$noticewidget = dirname(__FILE__).'/inc/widgets/notice-widget.php';
if(file_exists($noticewidget)){
	require_once($noticewidget);
}
$contactwidget = dirname(__FILE__).'/inc/widgets/policy-contact.php';
if(file_exists($contactwidget)){
	require_once($contactwidget);
}

// file enqueue
$themeEnqueue = dirname(__FILE__).'/inc/functions/theme_enqueue.php';
if(file_exists($themeEnqueue)){
	require_once($themeEnqueue);
}

// theme support
$themesupport = dirname(__FILE__).'/inc/functions/theme_support.php';
if(file_exists($themesupport)){
	require_once($themesupport);
}

// menu customize
$menucustomize = dirname(__FILE__).'/inc/functions/menu_customize.php';
if(file_exists($menucustomize)){
	require_once($menucustomize);
}

// post view
$postview = dirname(__FILE__).'/inc/functions/post_view.php';
if(file_exists($postview)){
	require_once($postview);
}

// other functions
$otherfunction = dirname(__FILE__).'/inc/functions/other_functions.php';
if(file_exists($otherfunction)){
	require_once($otherfunction);
}

// more post with ajax
$morepost = dirname(__FILE__).'/inc/functions/more_post_ajax.php';
if(file_exists($morepost)){
	require_once($morepost);
}

// widgets register
$widgetregi = dirname(__FILE__).'/inc/functions/widget_register.php';
if(file_exists($widgetregi)){
	require_once($widgetregi);
}

// custom post
$custompost = dirname(__FILE__).'/inc/functions/custom_post_metabox.php';
if(file_exists($custompost)){
	require_once($custompost);
}

// like & dislike
$likedislike = dirname(__FILE__).'/inc/functions/like_dislike.php';
if(file_exists($likedislike)){
	require_once($likedislike);
}


