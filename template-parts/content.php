<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pawslove
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php

		if ( 'post' === get_post_type() ) :
			?>
			<div class="media1 d-flex gap-2 pt-4">
				<img class="rounded-2 " src="<?php the_post_thumbnail_url('thumbnail') ?>" alt="image">
				<div class="media-body">
					<h2 class=""><?php the_title(); ?></h2>
					<div class="meta mb-1"><span class="date">Published <?php echo get_the_date(); ?></span><span> <?php pawslove_posted_by() ?></span><span class="px-2"><a class="text-decoration-none"><?php echo get_comments_number(). " Comments"?></a></span></div>
					<div class="intro"><?php the_excerpt(); ?></div>
					<div class="icons pr-5">
						<i class="bi bi-github text-white"></i>
						<i class="bi bi-twitter-x text-primary"></i>
						<i class="bi bi-linkedin text-primary"></i>
						<i class="bi bi-link-45deg text-primary"></i>
						<i class="bi bi-instagram text-primary"></i>
						<i class="bi bi-threads text-primary"></i>
						<i class="bi bi-discord text-primary"></i>
					</div>
					<a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
        		</div>
			</div>
		<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
