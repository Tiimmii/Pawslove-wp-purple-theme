<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pawslove
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="bg-primary text-white pt-5 pb-5">

			<div class="container">
				<div class="row">
					<div class="col-2">
						<?php echo dynamic_sidebar('footer_widget-col-one'); ?>
					</div>
					<div class="col-2">
						<?php echo dynamic_sidebar('footer_widget-col-two'); ?>
					</div>
					<div class="col-md-4 mx-auto">
						Keep In Touch
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="col">
					<p>&copy; <?php echo bloginfo( 'name' ); ?> Theme <?php echo date('Y' ); ?> / Created by <a href="https://timmi-tech.kesug.com" target="_blank">Timmi</a></p>
				</div>
				<div class="col h-25 d-inline-block text-end">
					<img src="<?php echo get_template_directory_uri(). '/images/payment-methods.png' ?>" alt="payment methods" class="payment-method img-fluid" loading="lazy"/>
				</div>
			</div>
		</div>
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
