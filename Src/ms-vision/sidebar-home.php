<?php
/**
 * The Home sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! is_active_sidebar( 'home-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>


<div class="col-md-3 widget-area" id="home-sidebar" role="complementary">


<?php dynamic_sidebar( 'home-sidebar' ); ?>

</div><!-- #secondary -->
