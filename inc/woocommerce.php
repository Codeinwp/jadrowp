<?php
/**
 * WooCommerce customization
 *
 * @package Jadro
 */

/**
 * WooCommerce setup function.
 *
 * @since 1.0.0
 *
 * @return void
 */
function jadro_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width'         => 540,
			'gallery_thumbnail_image_width' => 150,
		)
	);
}

add_action( 'after_setup_theme', 'jadro_woocommerce_setup' );

/**
 * Enqueue WooCommerce scripts and styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function jadro_woocommerce_scripts() {
	wp_enqueue_style( 'jadro-woocommerce', get_template_directory_uri() . '/woocommerce.css', array(), JADRO_VERSION );
	wp_style_add_data( 'jadro-woocommerce', 'rtl', 'replace' );
}

add_action( 'wp_enqueue_scripts', 'jadro_woocommerce_scripts' );

/**
 * Change number of products per row.
 *
 * @since 1.0.0
 *
 * @return int Number of columns.
 */
function jadro_product_columns() {
	return 3;
}

add_filter( 'loop_shop_columns', 'jadro_product_columns' );

/**
 * Change number of related products.
 *
 * @since 1.0.0
 *
 * @param array $args Arguments.
 * @return array Updated arguments.
 */
function jadro_related_products_args( $args ) {
	$args['columns']        = 3;
	$args['posts_per_page'] = 3;

	return $args;
}

add_filter( 'woocommerce_output_related_products_args', 'jadro_related_products_args' );

/**
 * Change number of upsell products.
 *
 * @since 1.0.0
 *
 * @param array $args Arguments.
 * @return array Updated arguments.
 */
function jadro_upsell_products_args( $args ) {
	$args['columns']        = 3;
	$args['posts_per_page'] = 3;

	return $args;
}

add_filter( 'woocommerce_upsell_display_args', 'jadro_upsell_products_args' );

/**
 * Init Woo customizations.
 *
 * @since 1.0.0
 *
 * @return void
 */
function jadro_woo_customization() {
	// Remove breadcrumb.
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

add_action( 'init', 'jadro_woo_customization' );
