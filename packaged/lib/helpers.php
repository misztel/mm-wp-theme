<?php

function mytheme_post_meta() {
  /* translators: %s: Post Date */
  printf(
    esc_html__('Posted on %s', 'mytheme'),
    '<a href="' . esc_url(get_permalink()) . '">
      <time datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time>
    </a>'
  );
  /* translators: %s: Post Author */
  printf(
    esc_html__(' By %s', 'mytheme'),
    '<a href="' . esc_url(get_author_posts_url(get_the_author_meta( 'ID' ))) . '">
      ' . esc_html(get_the_author()) . '
    </a>'
  );
}

function mytheme_read_more_link() {
  ?>
    <a href="<?php echo esc_url(get_the_permalink())  ?>" title="<?php the_title_attribute(); ?>">
     <?php
     /* translators: %s: Post Title */
      printf(
        wp_kses(
        __('Read More <span class="u-screen-reader-text"> About %s', 'mytheme'),
      [
        'span' => [
          'class' => []
        ]
      ]),
        get_the_title()
      )
      ?>
    </a>
  <?php
}

?>
