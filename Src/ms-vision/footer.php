<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="<?php echo esc_attr( $container ); ?>">
	<div class="col-md-12 content-area" id="payoff">
	<span class="payoff-title">MSVision:</span>&nbsp;<span>Dedicated to Mass Spectrometry</span>
	</div>
</div>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper bg-footer " id="wrapper-footer bg-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

							<a href="https://www.commdesign.nl" target="_blank"><?php printf(
							/* translators:*/
							esc_html__( 'Build by CommDesign' ),'CreatieveDoeners' ); ?></a>


					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
