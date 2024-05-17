<?php
/**
 * Functions and definitions
 *
 * @package Jadro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

define( 'JADRO_VERSION', '1.0.1' );
define( 'JADRO_DIR', rtrim( get_template_directory(), '/' ) );
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

	// Enqueue editor styles.
	add_editor_style();
}

add_action( 'after_setup_theme', 'jadro_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function jadro_scripts() {
	wp_enqueue_style( 'jadro-style', get_stylesheet_uri(), array(), JADRO_VERSION );
	wp_style_add_data( 'jadro-style', 'rtl', 'replace' );
}

add_action( 'wp_enqueue_scripts', 'jadro_scripts' );

/**
 * Register block patterns category.
 *
 * @since 1.0.0
 */
function jadro_register_block_patterns_category() {
	register_block_pattern_category(
		'jadro',
		array(
			'label' => esc_html__( 'Jadro', 'jadro' ),
		)
	);
}

add_action( 'init', 'jadro_register_block_patterns_category', 9 );

/**
 * Register block styles.
 *
 * @since 1.0.0
 */
function jadro_register_block_styles() {
	$block_styles = array(
		'core/list'      => array(
			'checklist'        => esc_html__( 'Checklist', 'jadro' ),
			'checklist-circle' => esc_html__( 'Checklist Circle', 'jadro' ),
			'square'           => esc_html__( 'Square', 'jadro' ),
			'none'             => esc_html__( 'None', 'jadro' ),
		),
		'core/separator' => array(
			'dotted'         => esc_html__( 'Dotted', 'jadro' ),
			'wide-thin-line' => esc_html__( 'Wide Thin Line', 'jadro' ),
			'left-aligned'   => esc_html__( 'Left Aligned', 'jadro' ),
			'right-aligned'  => esc_html__( 'Right Aligned', 'jadro' ),
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

// WooCommerce customizations.
if ( class_exists( 'WooCommerce', false ) ) {
	require_once JADRO_DIR . '/inc/woocommerce.php';
}
