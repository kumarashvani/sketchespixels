<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

<div class="footer-top-img">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer.png" />
</div>	
<div class="top-footer animatedParent">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="connect-us">
					<h2 class="animated bounceIn">Any Questions? Connect with Us.</h2>
					<div class="connect-us-btn"><a href="#" class="btn-gray animated bounceIn delay-500">Contact Us</a></div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="footer-box">
						<h3>Our Services</h3>
						<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'footer-menu', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="footer-box">
						<h3>Links</h3>
						<?php wp_nav_menu( array( 'theme_location' => 'handheld', 'menu_class' => 'footer-menu', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="copyright">
						<div class="copy-left">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo ot_get_option('logo'); ?>" title="<?php bloginfo('name'); ?>" class="animated bounceIn">
							</a>
						</div>
						<div class="copy-right text-right">
							<nav>
								<a href="#" class="animated bounceIn delay-250"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="animated bounceIn delay-500"><i class="fab fa-twitter"></i></a>
								<a href="#" class="animated bounceIn delay-750"><i class="fab fa-instagram"></i></a>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src='<?php echo get_stylesheet_directory_uri(); ?>/js/css3-animate-it.js'></script>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery(window).scroll(function () {
			var scroll = jQuery(window).scrollTop();
			if (scroll >= 1) {
				jQuery("header").addClass("fixed");
			}
			else {
				jQuery("header").removeClass("fixed");
			}
		});
	});
</script>

</body>
</html>
