<?php

/**
 * Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slider';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
  <?php if(have_rows('carousel_item') ): ?>
    <div class="slides">
      <?php while (have_rows('carousel_item')) : the_row(); ?>
        <div style="height: 100%; display: flex;">
          <img src="<?php echo wp_get_attachment_image( the_sub_field('image'), 'full' ); ?>" alt="" />
        </div>
      <?php endwhile; ?>
    </div>
  <?php else: ?>
    <p>Please add some slides </p>
  <?php endif; ?>
</div>
