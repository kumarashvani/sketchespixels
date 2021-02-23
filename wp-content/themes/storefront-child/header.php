<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animations.css" type="text/css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-3">
				<div class="logo d-none">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo ot_get_option('logo'); ?>" title="<?php bloginfo('name'); ?>">
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-9">
				<div class="header-right">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'main-menu', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="hero-area">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner1.jpg">
	<div class="banner-overlay">
		<div class="overlay-box animatedParent">
			<div class="overlay-left animated bounceInUp">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner2.png">
			</div>
			<div class="overlay-right">
				<h3 class="animated bounceInLeft delay-1000">Sketches & Pixels</h3>
				<h2 class="animated bounceInLeft delay-1500">Quality Services & Support</h2>
				<p class="animated bounceInLeft delay-2000">Our strong support team, means you can focus on growing our business.</p>
				<a href="#" class="default-btn animated bounceInLeft delay-2500">Our Pricing</a>
			</div>
		</div>
	</div>
	<div class="wave-shape">
	    <div class="river-wave"></div>
	    <div class="river-wave"></div>
	</div>
</div>

<?php do_action( 'storefront_content_top' );
