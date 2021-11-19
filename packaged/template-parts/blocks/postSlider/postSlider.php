<?php

/**
 * Post Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'post-slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'post-slider';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$categoryId = get_field('category');
$items_quantity = get_field('items_quantity');
$args = array(
  'numberposts' => $items_quantity,
  'category' => $categoryId
);
$posts = get_posts($args);

?>
<div class="row">
  <div id="<?php echo esc_attr($id); ?>" class="col-12 <?php echo esc_attr($className); ?>">
        <?php if(!empty($posts)): ?>
          <div class="post-slides">
            <?php foreach($posts as $p){ ?>
              <div class="row align-items-center post">
                <?php if(get_the_post_thumbnail($p->ID) !== '') { ?>
                <div class="col-md-6">
                  <div class="post__img"><?php echo get_the_post_thumbnail($p->ID, 'large'); ?> </div>
                </div>
                <?php } ?>
                <div class="col-md-6">
                  <?php mytheme123_post_meta(); ?>
                  <h3 class="post__title">
                    <?php echo $p->post_title ?>
                  </h3>
                  <p> <?php echo get_the_excerpt($p->ID); ?> </p>
                  <a class="btn btn-primary" href="<?php  the_permalink($p->ID); ?>">
                    Więcej...
                  </a>
                </div>
              </div>
            <?php } ?>
          </div>
        <?php else: ?>
          <p>This category has no posts</p>
        <?php endif; ?>
  </div>
</div>
