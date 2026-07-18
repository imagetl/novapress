<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<?php
/**
 * Theme functions
 *
 * @package NovaPress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Setup
 */
function novapress_setup() {

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Featured Image Support.
	add_theme_support( 'post-thumbnails' );

	// Custom Logo Support.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// HTML5 Support.
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

	// Register Navigation Menu.
	register_nav_menus(
		array(
			'primary' => 'Primary Menu',
		)
	);
}

add_action( 'after_setup_theme', 'novapress_setup' );
    
    
/**
 * Enqueue Styles & Scripts
 */
function novapress_scripts() {

	wp_enqueue_style(
		'novapress-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'novapress-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'novapress-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

}

add_action( 'wp_enqueue_scripts', 'novapress_scripts' );
    