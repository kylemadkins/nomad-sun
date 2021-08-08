<section class="flex items-center justify-center min-vh-100 cover bg-center hero" style="<?php echo bg_image(get_field('hero_image')); ?>">
  <div class="white tc hero-content">
    <h1 class="archivo-black mt0 mb3 ttu hero-heading"><?php the_title(); ?></h1>
    <?php if (get_field('subheading')) : ?>
      <h2 class="tenor mb6 mt0 normal ttu hero-subheading"><?php the_field('subheading'); ?></h2>
    <?php endif; ?>
    <?php if (get_field('date')) : ?>
      <div class="archivo-black f6 ma0 ttu tracked"><?php echo date_as_month_year(get_field('date')); ?></div>
    <?php endif; ?>
  </div>
</section>
