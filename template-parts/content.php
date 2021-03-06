<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nomad_Sun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if (have_rows('content')) :
			while (have_rows('content')) :
				the_row();
				if (get_row_layout() == 'header') :
					get_template_part('template-parts/content-header');
				elseif (get_row_layout() == 'text') :
					get_template_part('template-parts/content-text');
				elseif (get_row_layout() == 'image_gallery') :
					get_template_part('template-parts/content-image-gallery');
				endif;
			endwhile;
		endif;
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php get_template_part('template-parts/content-share'); ?>
		<?php get_template_part('template-parts/content-explore'); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
