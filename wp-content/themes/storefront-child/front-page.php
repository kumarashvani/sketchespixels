<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

<div class="services">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center">
					<h2><span>High Quality Services</span>Services We Do</h2>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="service-box">
					<div class="icon-box">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon1.png">
					</div>
					<h3>24/7 Wordpress Website Edits</h3>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="service-box">
					<div class="icon-box">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon2.png">
					</div>
					<h3>Unlimited small website edits. No time limits or caps.</h3>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="service-box">
					<div class="icon-box">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon3.png">
					</div>
					<h3>Google Analytics Integration</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="maintenence-service">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title title2 hide-circle d-flex flex-wrap align-items-end justify-content-between position-relative">
					<h2><span>What we do.</span>WordPress Maintenence Services</h2>
					<a href="#" class="btn-gray">Explore More</a>
				</div>
			</div>
			<div class="col-sm-4 mb-20">
				<div class="service-box box2">
					<div class="icon-box">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon4.png">
					</div>
					<h3>Speed Optimization</h3>
					<p>Our speed engineers will help you achieve loading times under 2 seconds. You'll also get free access to the WP Smush Pro and WP Rocket premium plugins.</p>
				</div>
			</div>
			<div class="col-sm-4 mb-20">
				<div class="service-box box2">
					<div class="icon-box">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon5.png">
					</div>
					<h3>Security Fully Managed</h3>
					<p>Our speed engineers will help you achieve loading times under 2 seconds. You'll also get free access to the WP Smush Pro and WP Rocket premium plugins.</p>
				</div>
			</div>
			<div class="col-sm-4 mb-20">
				<div class="service-box box2">
					<div class="icon-box">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon6.png">
					</div>
					<h3>Plugin, Theme & Core File Updates</h3>
					<p>Our speed engineers will help you achieve loading times under 2 seconds. You'll also get free access to the WP Smush Pro and WP Rocket premium plugins.</p>
				</div>
			</div>
			<div class="col-sm-4 mb-20">
				<div class="service-box box2">
					<div class="icon-box">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon7.png">
					</div>
					<h3>24/7 Website Edits</h3>
					<p>Our speed engineers will help you achieve loading times under 2 seconds. You'll also get free access to the WP Smush Pro and WP Rocket premium plugins.</p>
				</div>
			</div>
			<div class="col-sm-4 mb-20">
				<div class="service-box box2">
					<div class="icon-box">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon8.png">
					</div>
					<h3>Core file & Database Backups</h3>
					<p>Our speed engineers will help you achieve loading times under 2 seconds. You'll also get free access to the WP Smush Pro and WP Rocket premium plugins.</p>
				</div>
			</div>
			<div class="col-sm-4 mb-20">
				<div class="service-box box2">
					<div class="icon-box">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon9.png">
					</div>
					<h3>Advanced Website Support</h3>
					<p>Our speed engineers will help you achieve loading times under 2 seconds. You'll also get free access to the WP Smush Pro and WP Rocket premium plugins.</p>
				</div>
			</div>
		</div>
	</div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
