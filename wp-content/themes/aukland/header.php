<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Aukland
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

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'aukland' ); ?></a>

	<header id="masthead" class="site-header contain-to-grid fixed" role="banner">
		<nav class="nav clearfix" role="navigation">
			<h1 id="mobile-nav"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<a id="menu-toggle" class="anchor-link" href="">MENU</a>
			<ul class="simple-toggle" id="menu">
			    <li><h1><a class="menu-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1></li>
				<li><a href="http://localhost/aukland-site/news/">NEWS</a></li>
				<li><a href="http://localhost/aukland-site/tour/">TOUR</a></li>
				<li><a href="http://localhost/aukland-site/music/">MUSIC</a></li>
				<li><a href="http://localhost/aukland-site/videos/">VIDEOS</a></li>
				<li><a href="http://localhost/aukland-site/contact/">CONTACT</a></li>
			</ul>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
