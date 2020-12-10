<?php 

// Require the admin dasboard functions and the custom enqueue file
require get_template_directory() . '/inc/admin/admin-function.php';
require get_template_directory() .'/inc/enqueue.php'; 
require get_template_directory() .'/inc/customizer/customizer.php';




function hobi_global_script_enqueue()
{
    wp_enqueue_style( 'Hobi', get_stylesheet_uri(), array() );
    wp_register_style('font-awesome' ,get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', array(), 'all' );
    wp_enqueue_style( 'font-awesome');
    wp_register_style('hobi_css', get_template_directory_uri() . '/css/HOBI.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('hobi_css');

    $custom_css = HOBI_get_customizer_css();
	wp_add_inline_style( 'hobi_css', $custom_css );
	
	wp_enqueue_script( 'HOBI_navigation', get_template_directory_uri().'/assets/js/navigation.js', array(), true );

}

// Include scripts
add_action('wp_enqueue_scripts', 'hobi_global_script_enqueue');




/* 

==================================================

fnctions to add all needed supprt to our theme
===================================================

*/


function HOBI_theme_support()
{

    // logo theme support
    add_theme_support('custom-logo' , array(
            'width' => 200,
            'flex-height' => true,
            'flex-width'  => true,
    ) );


    //menu
    register_nav_menus( array(
        'main_menu' => __( 'Primary', 'Main menu' ),
    ));



		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
	

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );


		// functions to add arrows in front of menu with submenu
    
function be_arrows_in_menus( $item_output, $item, $depth, $args ) {

	if( in_array( 'menu-item-has-children', $item->classes ) ) {
		$arrow = 0 == $depth ? '<i class="fa fa-caret-down"></i>' : '<i class="fa fa-caret-right"></i>';
		$item_output = str_replace( '</a>', $arrow . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'be_arrows_in_menus', 10, 4 );


	}

add_action('after_setup_theme', 'HOBI_theme_support');

