<?php get_header(); ?>

<?php if(have_posts()) { ?>
  <?php while(have_posts()) { ?>
    <?php the_post(); ?>
    <h2>
      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </h2>
    <div>
      <?php mytheme_post_meta(); ?>
    </div>
    <div>
      <?php the_excerpt(); ?>
    </div>
      <?php mytheme_read_more_link(); ?>
  <?php } ?>

  <?php the_posts_pagination(); ?>

<?php } else { ?>
  <p><?php _e('Sorry, no posts matched your criteria.', 'mytheme'); ?></p>
<?php } ?>

<?php

  $city = 'london';
  /* translators: %s: User City */
  printf(esc_html__('Your city is %s', 'mytheme'), $city);

?>


<?php get_footer(); ?>
