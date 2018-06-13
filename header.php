<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title screen-reader-text">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div><!-- .site-branding -->

			<div class="header-nav">
				
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="container-navigation">
						<a href="http://localhost:3000/Inhabitent/">
						<img class="white-logo-header" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-tent-white.svg">
					
						<img class="green-logo-header" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-tent.svg">
						</a>
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>

					<div class="header-search">
                   	 	<!-- Load searchform.php -->
                   	 	<?php get_search_form(); ?>
                	</div>

				</nav><!-- #site-navigation -->
			</div> <!-- header-nav-->
		</header><!-- #masthead -->

		<div id="content" class="site-content">