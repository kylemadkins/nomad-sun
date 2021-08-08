<div class="flex flex-wrap center container ph4-l">
  <?php $images = get_sub_field('gallery'); ?>
  <?php foreach ($images as $image) : ?>
    <div class="ph3 mb4 h-100 gallery-image <?php echo image_width_class(get_field('width', $image['id'])); ?>">
      <?php echo wp_get_attachment_image($image['id'], 'full'); ?>
      <?php $caption = wp_get_attachment_caption($image['id']); ?>
      <?php if (!empty($caption)) : ?>
        <p class="archivo f5 o-50 pt3 mv0 caption">
          <?php echo $caption ?>
        </p>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>
