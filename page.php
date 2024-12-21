<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pawslove
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="p-5 d-flex flex-wrap">
		<div class="col-md-9 col-12">
			<?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content', 'page');

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
		<div class="col-md-3 col-12 position-sticky" style="top: 20px; height: max-content;">
			<?php get_sidebar(); ?>
		</div>
	</div>
</main><!-- #main -->


<?php
get_footer();
