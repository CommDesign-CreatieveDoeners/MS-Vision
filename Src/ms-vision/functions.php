<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */



/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';



add_action( 'vc_after_init', 'add_tab_button_super_color' ); /* Note: here we are using vc_after_init because WPBMap::GetParam and mutateParame are available only when default content elements are "mapped" into the system */
function add_tab_button_super_color() {
  //Get current values stored in the color param in "Call to Action" element
  $param = WPBMap::getParam( 'vc_tab_button', 'color' );
  //Append new value to the 'value' array
  $param['value'][__( 'MSVision', 'msvision' )] = 'btn-super-color';
  //Finally "mutate" param with new values
  vc_update_shortcode_param( 'vc_tab_button', $param );
}
