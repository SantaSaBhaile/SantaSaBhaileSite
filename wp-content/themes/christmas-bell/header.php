<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Christmas_Bell
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}
?>

<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'christmas-bell' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<?php
			$header_media_position = get_theme_mod( 'christmasbell_header_media_position', 'after-menu' );

			if ( 'before-header' === $header_media_position ) {
				get_template_part( 'template-parts/header/header', 'media' );
			}
			?>

			<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

			<?php
			if ( 'before-menu' === $header_media_position ) {
				get_template_part( 'template-parts/header/header', 'media' );
			}
			?>

			<?php
			if ( 'after-menu' === $header_media_position ) {
				get_template_part( 'template-parts/header/header', 'media' );
			}
			?>

		</header><!-- .site-header -->

		<?php get_template_part( 'template-parts/slider/content', 'slider' ); ?>

		<?php get_template_part( 'template-parts/header/breadcrumb' ); ?>

		<?php get_template_part( 'template-parts/featured-content/display', 'featured' ); ?>

		<?php get_template_part( 'template-parts/portfolio/display', 'portfolio' ); ?>

		<?php get_template_part( 'template-parts/hero-content/content', 'hero' ); ?>

		<?php get_template_part( 'template-parts/service/content', 'service' ); ?>

		<?php
		$testimonial_position = get_theme_mod( 'christmasbell_testimonial_position' );

		if ( $testimonial_position ) {
			get_template_part( 'template-parts/testimonial/display', 'testimonial' );
		}
		?>

		<div id="content" class="site-content">
			<div class="wrapper">
