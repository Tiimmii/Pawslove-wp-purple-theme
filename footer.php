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
						About
					</div>
					<div class="col-2">
						Company
					</div>
					<div class="col-md-4 mx-auto">
						Keep In Touch
					</div>
				</div>
			</div>
		</div>
		
		<div class="container py-2">
			<div class="row d-flex align-items-center">
				<div class="col">
					<p>&copy; <?php echo bloginfo( 'name' ); ?> <?php?></p>
				</div>
			</div>
		</div>
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
