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

	<section class="hero" style="<?php if (get_field('hero_image')) : ?>background-image: url('<?php the_field('hero_image') ?>'); <?php endif; ?>">
		<div class="hero-content">
			<h1><?php the_title(); ?></h1>
			<?php if (get_field('subheading')) : ?>
				<h2><?php the_field('subheading'); ?></h2>
			<?php endif; ?>
			<?php if (get_field('date')) : ?>
				<div><?php echo date('F Y', strtotime(get_field('date'))); ?></div>
			<?php endif; ?>
		</div>
	</section>

	<header class="entry-header">

	</header><!-- .entry-header -->

	<div class="entry-content">

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php // nomad_sun_entry_footer(); 
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
