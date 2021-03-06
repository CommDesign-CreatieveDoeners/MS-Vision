<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

	

	</div><!-- .entry-content -->

	<footer class="entry-footer">



	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
