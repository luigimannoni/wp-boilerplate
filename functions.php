<?php
/**
 * WP Boilerplate functions and definitions
 *
 * @package WordPress
 * @subpackage WP_Boilerplate
 * @since WP Boilerplate 1.0
 */

if ( ! function_exists( 'wpboilerplate_setup' ) ) :
function wpboilerplate_setup() {

	register_nav_menu( 'primary', 'Primary Menu' );

	// Add RSS feed links to <head> for posts and comments.
	// add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 500, 500, true );
	add_image_size( 'full-hd', 1920, 1080, true );
}
endif;
add_action( 'after_setup_theme', 'wpboilerplate_setup' );




/**
 * Enqueue scripts and styles for the front end.
 *
 * @since WP Boilerplate 1.0
 *
 * @return void
 */
function wpboilerplate_scripts() {
	
	// Css Registration
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Droid+Sans:400,700', array() );
    wp_enqueue_style( 'style', get_stylesheet_uri(), array() );

	// JS Head Registration
	wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), null );
	
	// JS Footer Registration
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'transit-js' ), '20131209', true );

}
add_action( 'wp_enqueue_scripts', 'wpboilerplate_scripts' );

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since WP Boilerplate 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function wpboilerplate_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( is_home() || is_front_page() ) {
		$title = "$title";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'wpboilerplate' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'wpboilerplate_wp_title', 10, 2 );


/* // Custom post types, uncomment if necessary
function wpboilerplate_create_post_types() {
	
	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Portfolio' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
		'rewrite' => array('slug' => 'portfolio'),
		'menu_position' => 4,
		'capability_type' => 'post'
		)
	);

}
add_action( 'init', 'wpboilerplate_create_post_types' );
*/


