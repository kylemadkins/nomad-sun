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
						<div class="w-100 w-60-l vh-50 vh-100-l cover bg-center" style="<?php echo bg_image(get_field('hero_image')); ?>"></div>
						<div class="w-100 w-40-l flex justify-center items-center tc ph3 ph4-l relative">
							<div>
								<div class="f6 ttu mt0 mb5 tracked archivo absolute-l top-0-l left-0-l w-100-l pt4">
									<?php echo date_as_month_year(get_field('date')); ?>
									<div class="mt3 line"></div>
								</div>
								<h1 class="f2 f1-l archivo mt0 mb3 ttu lh-title"><?php the_title(); ?></h1>
								<h2 class="f2 f1-l tenor mt0 mb4 mb5-l ttu lh-title"><?php the_field('subheading'); ?></h2>
								<p class="f4 i measure mv0"><?php the_sub_field('header_intro'); ?></p>
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
