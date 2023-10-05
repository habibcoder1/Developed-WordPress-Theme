<?php 
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Elementor Widget Development
 * */

if (!defined('ABSPATH')) {
	exit('not valid');
}; 




// Check if Elementor is active
if (in_array('elementor/elementor.php', get_option('active_plugins'))) {
    // Elementor is active
    

	// Register Widget //
    add_action( 'elementor/widgets/register', 'witl_register_elementor_widgets' );
	function witl_register_elementor_widgets( $widgets_manager ) {

        // contact page
		require_once( __DIR__ . '/contact/page_heading.php' );
		require_once( __DIR__ . '/contact/contact_form_details.php' );
		require_once( __DIR__ . '/contact/contact_address.php' );
		// about page
		require_once( __DIR__ . '/about/mission_vission_section.php' );
		require_once( __DIR__ . '/about/mission_vission_details.php' );
		require_once( __DIR__ . '/about/featured_logos.php' );
		require_once( __DIR__ . '/about/core_value.php' );
		require_once( __DIR__ . '/about/witl_teams.php' );
		require_once( __DIR__ . '/about/about_cta.php' );
		// home page
		require_once( __DIR__ . '/home/main_hero.php' );
		require_once( __DIR__ . '/home/service_section.php' );
		require_once( __DIR__ . '/home/how_we_do.php' );
		require_once( __DIR__ . '/home/marketing_module.php' );
		require_once( __DIR__ . '/home/client_satisfaction.php' );
		require_once( __DIR__ . '/home/why_choose_witl.php' );
		require_once( __DIR__ . '/home/witl_faq.php' );
		require_once( __DIR__ . '/home/recen_blogpost.php' );
		require_once( __DIR__ . '/home/featured_projects.php' );
		// service page
		require_once( __DIR__ . '/services/service_hero.php' );

        // contact page
		$widgets_manager->register( new \Witl_Contact_Page_Heading_Widget_Dev() );
		$widgets_manager->register( new \Witl_Contact_Form_Details_Widget_Dev() );
		$widgets_manager->register( new \Witl_Contact_Address_Widget_Dev() );
		// about page
		$widgets_manager->register( new \Witl_About_Mission_Vission_Section_Widget_Dev() );
		$widgets_manager->register( new \Witl_About_Mission_Vission_Details_Widget_Dev() );
		$widgets_manager->register( new \Witl_Featured_Logos_Widget_Dev() );
		$widgets_manager->register( new \Witl_Core_Value_Widget_Dev() );
		$widgets_manager->register( new \Witl_Witl_Teams_Widget_Dev() );
		$widgets_manager->register( new \Witl_About_Cta_Widget_Dev() );
		// home page
		$widgets_manager->register( new \Witl_Main_Hero_Widget_Dev() );
		$widgets_manager->register( new \Witl_Service_Section_Widget_Dev() );
		$widgets_manager->register( new \Witl_Howwedo_Section_Widget_Dev() );
		$widgets_manager->register( new \Witl_Marketing_Module_Widget_Dev() );
		$widgets_manager->register( new \Witl_Client_Satisfaction_Widget_Dev() );
		$widgets_manager->register( new \Witl_Why_Choose_Witl_Widget_Dev() );
		$widgets_manager->register( new \Witl_Witl_Faq_Widget_Dev() );
		$widgets_manager->register( new \Witl_Recent_Blog_Post_Widget_Dev() );
		$widgets_manager->register( new \Witl_Featured_Projects_Widget_Dev() );
		// service page
		$widgets_manager->register( new \Witl_Service_Hero_Section_Widget_Dev() );

	};	


	// Register New Category //
    add_action( 'elementor/elements/categories_registered', 'witl_elementor_category_register' );
	function witl_elementor_category_register( $elements_manager ) {
		$elements_manager->add_category( 'witl-category', [
				'title' => esc_html__( 'WITL Widgets', 'witl' ),
				'icon'  => 'fa fa-plug', 
			]
		);


        // for setting category in top 
        $categories = [];
        $categories['witl-category'] =
            [
                'title' => esc_html__( 'WITL Widgets', 'witl' ),
				'icon'  => 'fa fa-plug', 
            ];

        $old_categories = $elements_manager->get_categories();
        $categories = array_merge($categories, $old_categories);

        $set_categories = function ( $categories ) {
            $this->categories = $categories;
        };

        $set_categories->call( $elements_manager, $categories );

	}



}


