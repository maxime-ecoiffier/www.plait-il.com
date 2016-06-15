<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
		</section>
		<div class="footer-container-background">
			<div class="row">
				<p class="large-4 small-12 small-text-center columns">© Agence Plait-il | 2016     -     <a href="Mentions Légales">Mentions légales</a></p>
				<p class="large-4 text-center columns">Plait-il ? -  5 rue du Bûcher , 13007 Marseille</p>
				<div class="social text-right small-text-center large-4 small-12 columns">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
				</div>
			</div>
		</div>


<!-- SCRIPTS SLIDER FLEXSLIDER -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/javascript/jquery.flexslider.js">
</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/customjs.js"></script>

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
</script>

<!-- -->

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

</body>
</html>
