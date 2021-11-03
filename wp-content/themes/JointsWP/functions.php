<?php
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php'); 

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php'); 

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php'); 

// Register menu locations
register_nav_menus([
    'main-menu' => esc_html__( 'Main Menu', 'wptags' ),
]);


// The Top Menu MOBILE
function mobile_menu() {
    wp_nav_menu(array(
       'container' => false,                           // Remove nav container
       'menu_class' => 'vertical menu',                // Adding custom nav class
       'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
       'theme_location' => 'main-menu',                // Where it's located in the theme
       'depth' => 5,                                   // Limit the depth of the nav
       'fallback_cb' => false,                         // Fallback function (see below)
       'walker' => new Topbar_Menu_Walker()
   ));
} 