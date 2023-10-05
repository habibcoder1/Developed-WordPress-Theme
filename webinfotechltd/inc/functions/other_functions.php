<?php  
/**
 * @package Web Info Tech Ltd
 * Version: 1.0.0
 * 
 * Theme Functions
 */


if(!defined('ABSPATH')){
    exit('not valid');
};


/* =============================================
  Script add dynamicallly
============================================== */
add_action('wp_footer', 'witl_scripts_load_dynamically');
function witl_scripts_load_dynamically(){ ?>
<script>
    // preloader
    <?php if(get_theme_mod('witl_preloader') == 'yes') : ?>
    let preloader = document.getElementById('witl_preloader');
    window.addEventListener("load", function(){
        preloader.style.display = "none";
    });
    <?php endif; ?>

    jQuery(document).ready(function($){
        // for home page service section
        //note: for every service need to give id and get that id in jquery
        
        <?php if(is_front_page()) : ?>
        /* First Item */    
        jQuery('.single-service:first-child').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Digital-Marketing.jpg');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Second Item */ 
        jQuery('.single-service:nth-child(2)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/SEO.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Third Item */
        jQuery('.single-service:nth-child(3)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/WordPress-Website-Development.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Four Item  */
        jQuery('.single-service:nth-child(4)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Graphic-Design2.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        <?php endif; 
		 if(! is_front_page()) : ?>
        
        // for digital marketing //
        /* First Item */    
        jQuery('div#dm_service_section .single-service:first-child').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Search-Engine-Marketing-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Second Item */ 
        jQuery('div#dm_service_section .single-service:nth-child(2)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/SEM2-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Third Item */
        jQuery('div#dm_service_section .single-service:nth-child(3)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/SEO-Copywriting-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Four Item  */
        jQuery('div#dm_service_section .single-service:nth-child(4)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Lead-Generation2-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        
        // for seo service //
        /* First Item */    
        jQuery('div#seo_service_section .single-service:first-child').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Search-Engine-Marketing-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Second Item */ 
        jQuery('div#seo_service_section .single-service:nth-child(2)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Local-SEO-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Third Item */
        jQuery('div#seo_service_section .single-service:nth-child(3)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Ecommerce-SEO-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Four Item  */
        jQuery('div#seo_service_section .single-service:nth-child(4)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Enterprise-SEO-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
       
        // for web development //
        /* First Item */    
        jQuery('div#wd_service_section .single-service:first-child').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/WordPress-Website-Development.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Second Item */ 
        jQuery('div#wd_service_section .single-service:nth-child(2)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Shopify-Website-Development-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Third Item */
        jQuery('div#wd_service_section .single-service:nth-child(3)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Custom-website-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Four Item  */
        jQuery('div#wd_service_section .single-service:nth-child(4)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/E-commerce-Website-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
       
        // for graphic design //
        /* First Item */    
        jQuery('div#gd_service_section .single-service:first-child').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Brand-Identity-Design-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Second Item */ 
        jQuery('div#gd_service_section .single-service:nth-child(2)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Social-Media-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Third Item */
        jQuery('div#gd_service_section .single-service:nth-child(3)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Motion-Graphics-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );
        /* Four Item  */
        jQuery('div#gd_service_section .single-service:nth-child(4)').hover(
            function () { // Mouse enter
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1)');
                jQuery(this).closest('.our-services').find('.bg-image img').attr('src', 'https://webinfotechltd.com/wp-content/uploads/2023/10/Print-Design-Small.png');
            },
            function () { // Mouse leave
                jQuery(this).closest('.our-services').find('.bg-image img').css('transform', 'scale(1.2)');
            }
        );

        <?php endif; ?>


    }); //end jquery document
    
    
</script>

    <?php 
}


/* =============================================
  Move the comment text field to the bottom
============================================== */
add_filter( 'comment_form_fields', 'witl_move_comment_field_to_bottom' );
function witl_move_comment_field_to_bottom( $fields ) {
    // for textarea field
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;

    return $fields;
};


/* =============================
    Customize Search Filter
============================= */
add_filter('pre_get_posts', 'witl_customize_search_filter');
function witl_customize_search_filter($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', ['post', 'witl-service']);  //only post & services allow
    }
    return $query;
}



/* =============================
    Plugins Recommended
============================= */
add_action('admin_notices', 'witl_recommend_plugin_activation');
function witl_recommend_plugin_activation() {
    // for elementor
    $elementor_slug = 'elementor';   //plugin slug

    if (!is_plugin_active($elementor_slug . '/' . $elementor_slug . '.php')) {   //exact plugin folder and file
        $plugin_name = 'Elementor';
        $install_link = wp_nonce_url(admin_url('update.php?action=install-plugin&plugin=' . $elementor_slug), 'install-plugin_' . $elementor_slug);

        $message = sprintf( __('We recommend installing and activating the %s plugin for creating Website Dynamically %sClick here to install%s.', 'witl'), $plugin_name, '<a href="' . $install_link . '">', '</a>' );

        echo '<div class="notice notice-info is-dismissible"><p>' . $message . '</p></div>';
    }
    
    // for contact form 7
    $cform_slug = 'contact-form-7';   //plugin slug

    if (!is_plugin_active($cform_slug . '/' . 'wp-contact-form-7' . '.php')) {   //exact plugin folder and file
        $plugin_name = 'Contact Form 7';
        $install_link = wp_nonce_url(admin_url('update.php?action=install-plugin&plugin=' . $cform_slug), 'install-plugin_' . $cform_slug);

        $message = sprintf( __('We recommend installing and activating the %s plugin for creating Website Dynamically %sClick here to install%s.', 'witl'), $plugin_name, '<a href="' . $install_link . '">', '</a>' );

        echo '<div class="notice notice-info is-dismissible"><p>' . $message . '</p></div>';
    }
};
