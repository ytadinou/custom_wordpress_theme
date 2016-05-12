<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thido_photograhy
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'thido_photography' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="before-menu_left col-lg-2 col-md-2 col-sm-12 col-xs-12" >   </div>
		<nav id="site-navigation" class="main-navigation col-lg-2 col-md-2 col-sm-12 col-xs-12" role="navigation" >
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'thido_photography' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<div class="site-branding col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Thido-Photography</a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Thido-Photography</a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<!-- <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p> -->
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation2" class="main-navigation col-lg-2 col-md-2 col-sm-12 col-xs-12" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'thido_photography' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary2', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<div class="after-menu_rigth col-lg-2 col-md-2 col-sm-12 col-xs-12" > </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
