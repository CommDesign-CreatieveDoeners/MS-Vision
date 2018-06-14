<?php
/**
 * Template Name: Shop | MS Vision
 *
 * This template can be used for Shop pages
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

<div class="col-md-4 content-area" id="primary">
			<?php get_sidebar( 'shop' ); ?>
		</div>

				<div class="col-md-8 content-area" id="primary">

								<main class="site-main" id="main" role="main">

									<?php echo do_shortcode("[ess_grid alias='shop_buttons']"); ?>

								</main><!-- #main -->

				</div><!-- #primary -->
</div><!-- .row -->

	<div class="row">
				<div class="col-md-12 content-area" id="primary">

								<main class="site-main" id="main" role="main">

									<?php while ( have_posts() ) : the_post(); ?>

										<?php get_template_part( 'loop-templates/content', 'shop' ); ?>


									<?php endwhile; // end of the loop. ?>

								</main><!-- #main -->

				</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
