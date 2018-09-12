<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme __WPI__THEME__VERSION__
 * @author : __WPI__THEME__AUTHOR__
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">


			<div id="site-generator">
				<?php do_action( 'mytheme_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'mytheme' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'mytheme' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'mytheme' ), 'WordPress' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>