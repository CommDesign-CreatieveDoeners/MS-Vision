<?php
/**
 * Add JS Composer support
 *
 * @package understrap
 */


add_action( 'after_setup_theme', 'understrap_jscomposer_support' );
if ( ! function_exists( 'understrap_jscomposer_support' ) ) {
	/**
	 * Declares WooCommerce theme support.
	 */
	function understrap_woocommerce_support() {
		add_theme_support( 'jscomposer' );

		// Add New Woocommerce 3.0.0 Product Gallery support
		add_theme_support( '' );
		add_theme_support( '' );
		add_theme_support( '' );

		// hook in and customizer form fields.
		add_filter( 'woocommerce_form_field_args', 'understrap_wc_form_field_args', 10, 3 );
	}
}


/**
* First unhook the WooCommerce wrappers
*/
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

/**
* Then hook in your own functions to display the wrappers your theme requires
*/
add_action('woocommerce_before_main_content', 'understrap_woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'understrap_woocommerce_wrapper_end', 10);
if ( ! function_exists( 'understrap_woocommerce_wrapper_start' ) ) {
	function understrap_woocommerce_wrapper_start() {
		$container   = get_theme_mod( 'understrap_container_type' );
		echo '<div class="wrapper" id="woocommerce-wrapper">';
	  echo '<div class="' . esc_attr( $container ) . '" id="content" tabindex="-1">';
		echo '<div class="row">';
		get_template_part( 'global-templates/left-sidebar-check' );
		echo '<main class="site-main" id="main">';
	}
}
