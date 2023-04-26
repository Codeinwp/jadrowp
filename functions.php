<?php
/**
 * Functions and definitions
 *
 * @package Jadro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

define( 'JADRO_VERSION', '1.0.0' );
define( 'JADRO_DIR', rtrim( get_template_directory(), '/' ) );
define( 'JADRO_URI', rtrim( get_template_directory_uri(), '/' ) );

/**
 * Theme setup.
 *
 * @since 1.0.0
 */
function jadro_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Admin editor styles.
	add_theme_support( 'editor-styles' );

	// Switch default core markup for different forms to output valid HTML5.
	add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Enable block styles.
	add_theme_support( 'wp-block-styles' );
}

add_action( 'after_setup_theme', 'jadro_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function jadro_scripts() {
	wp_enqueue_style( 'jadro-style', JADRO_URI . '/assets/css/style.css', array(), JADRO_VERSION );
}

add_action( 'wp_enqueue_scripts', 'jadro_scripts' );

/**
 * Register block patterns.
 *
 * @since 1.0.0
 */
function jadro_register_block_patterns() {
	register_block_pattern_category(
		'jadro',
		array(
			'label' => esc_html__( 'Jadro Patterns', 'jadro' ),
		)
	);

	$block_patterns = array(
		'header',
		'hero-banner',
		'features',
		'latest-articles',
		'cta-default',
		'cta-full-width',
		'testimonials',
		'pricing-table',
		'footer',
	);

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );
		register_block_pattern( 'jadro/' . $block_pattern, require $pattern_file );
	}
}

add_action( 'init', 'jadro_register_block_patterns', 9 );

/**
 * Register block styles.
 *
 * @since 1.0.0
 */
function jadro_register_block_styles() {
	$block_styles = array(
		'core/list' => array(
			'checklist'        => esc_html__( 'Checklist', 'jadro' ),
			'checklist-circle' => esc_html__( 'Checklist Circle', 'jadro' ),
			'square'           => esc_html__( 'Square', 'jadro' ),
			'none'             => esc_html__( 'None', 'jadro' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}

add_action( 'init', 'jadro_register_block_styles' );