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
				if (get_row_layout() == 'header') : ?>
					<div class="flex-l">
						<div class="w-100 w-60-l vh-50 vh-100-l cover bg-center" style="<?php if (get_field('hero_image')) : ?>background-image: url('<?php the_field('hero_image') ?>'); <?php endif; ?>"></div>
						<div class="w-100 w-40-l flex justify-center items-center tc ph4">
							<div>
								<div class="f6 ttu mt0 mb5 tracked archivo"><?php echo date('F Y', strtotime(get_field('date'))); ?></div>
								<h1 class="f1 archivo mt0 mb3 ttu"><?php the_title(); ?></h1>
								<h2 class="f1 tenor mt0 mb4 ttu"><?php the_field('subheading'); ?></h2>
								<p class="f4 i measure"><?php the_sub_field('header_intro'); ?></p>
							</div>
						</div>
					</div>
				<?php elseif (get_row_layout() == 'text') : ?>
					<div class="pv6 f4 measure-wide center text-content">
						<?php the_sub_field('text_content'); ?>
					</div>
		<?php endif;
			endwhile;
		endif;
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php // nomad_sun_entry_footer(); 
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
