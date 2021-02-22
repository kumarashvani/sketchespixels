<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>


	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>


<?php wp_footer(); ?>

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
