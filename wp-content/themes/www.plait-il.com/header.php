<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/plait-il-logo.png"/>
		<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,900,700italic,900italic' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

		<header class="navigation-main large-12 text-center columns">
		<!--	<div class="small-6 large-6 columns logo">
				<a href="<?php// echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/plait-il-logo.png" height="60" width="100" alt="Logo Agence Plait-il"/></a>
			</div>
			<div class="small-6 large-6 columns main-menu">
				<?php// wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
			</div>
		</div>
	</header>
	<section class="container">-->

			<nav id="site-navigation" role="navigation" class="logo large-12 columns">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/plait-il-logo.png" height="60" width="100" alt="Logo Agence Plait-il"/></a>
					<!-- CUSTOM MENU -->
					<div class="header-custom-menu large-6 columns">
							<button class="showmenuresponsive"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plait-il/toggle.png" width="30"/></button>
					</div>
			</nav>
		</header>

		<?php if(is_home()){ ?>
			<div class="responsivemenuhome"><!-- RESPONSIVE MENU -->
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</div>
		<?php } else{ ?>
			<div class="responsivemenu"><!-- RESPONSIVE MENU PAGE ARTICLE -->
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu-second' ) ); ?>
			</div>
		<?php } ?>

		<p class="noshow"><?php bloginfo('home') ?></p>

		<?php

				do_action( 'foundationpress_after_header' );
