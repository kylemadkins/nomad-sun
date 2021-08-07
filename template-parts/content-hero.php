<section class="flex items-center justify-center min-vh-100 cover bg-center hero" style="<?php if (get_field('hero_image')) : ?>background-image: url('<?php the_field('hero_image') ?>'); <?php endif; ?>">
  <div class="white tc hero-content">
    <h1 class="archivo mt0 mb3 ttu hero-heading"><?php the_title(); ?></h1>
    <?php if (get_field('subheading')) : ?>
      <h2 class="tenor mb6 mt0 normal ttu hero-subheading"><?php the_field('subheading'); ?></h2>
    <?php endif; ?>
    <?php if (get_field('date')) : ?>
      <div class="archivo f6 ma0 ttu tracked"><?php echo date('F Y', strtotime(get_field('date'))); ?></div>
    <?php endif; ?>
  </div>
</section>
