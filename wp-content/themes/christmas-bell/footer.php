<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Christmas_Bell
 */
?>

			</div><!-- .wrapper -->
		</div><!-- .site-content -->

		<?php
		$testimonial_position = get_theme_mod( 'christmasbell_testimonial_position' );

		if ( ! $testimonial_position ) {
			get_template_part( 'template-parts/testimonial/display', 'testimonial' );
		}
		?>

		<?php get_template_part( 'template-parts/footer/footer', 'instagram' ); ?>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>

			<div id="site-generator">
				<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
			</div><!-- #site-generator -->

		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
