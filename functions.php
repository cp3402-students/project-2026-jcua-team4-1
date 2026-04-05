<?php
/**
 * KC Tennis Blast functions and definitions
 *
 * @package KC_Tennis_Blast
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Theme setup
 */
function kc_tennis_blast_setup() {

	// Make theme translatable
	load_theme_textdomain( 'kc-tennis-blast', get_template_directory() . '/languages' );

	// Add RSS feed links
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage title
	add_theme_support( 'title-tag' );

	// Enable featured images
	add_theme_support( 'post-thumbnails' );

	// Register menu
	register_nav_menus(
		array(
			'menu-1' => __( 'Primary', 'kc-tennis-blast' ),
		)
	);

	// Switch default markup
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

	// Custom background
	add_theme_support(
		'custom-background',
		apply_filters(
			'kc_tennis_blast_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
}
add_action( 'after_setup_theme', 'kc_tennis_blast_setup' );

/**
 * Enqueue scripts and styles
 */
function kc_tennis_blast_scripts() {
	wp_enqueue_style( 'kc-tennis-blast-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script(
		'kc-tennis-blast-script',
		get_template_directory_uri() . '/js/main.js',
		array(),
		_S_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'kc_tennis_blast_scripts' );

/**
 * Custom functions (you can add yours below safely)
 */