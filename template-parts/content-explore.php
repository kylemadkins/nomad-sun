<div class="container center ph4-l mb5 mb6-l">
  <h3 class="archivo-black f2 center tc ttu lh-title mv0 explore-title">Let's Explore Together</h3>
  <div class="flex-ns justify-between">
    <?php

    $args = array(
      'posts_per_page' => 3,
      'orderby' => 'rand',
      // Exclude current post
      'post__not_in' => array($post->ID)
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

        <a href="<?php the_permalink(); ?>" class="db link w-100 w-third-ns ph3 mb3 mb0-ns">
          <div class="aspect-ratio aspect-ratio--1x1">
            <div class="aspect-ratio--object bg-center cover flex items-center justify-center ph3" style="<?php echo bg_image(get_field('hero_image')); ?>">
              <div class="archivo-black white mv0 ttu tracked f5 f4-l tc lh-title"><?php the_title(); ?></div>
            </div>
          </div>
        </a>

    <?php endwhile;
    endif; ?>
  </div>
</div>
