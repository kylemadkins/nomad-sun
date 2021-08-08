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

	<div class="gallery-image">
		<?php echo wp_get_attachment_image(48, 'full'); ?>
		<p class="archivo f5 o-50 pt3 mv0 caption">
			<?php echo wp_get_attachment_caption(48); ?>
		</p>
	</div>

	<footer class="entry-footer">
		<?php // nomad_sun_entry_footer(); 
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
