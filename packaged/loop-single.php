<?php if(have_posts()) { ?>
<?php while(have_posts()) { ?>

  <?php the_post(); ?>

  <?php get_template_part( 'template-parts/post/content'); ?>

  <?php
    // if(get_theme_mod('mytheme123_display_author_info', true)) {
    //   get_template_part( 'template-parts/single/author');
    // }
  ?>

  <?php get_template_part( 'template-parts/single/navigation'); ?>

<?php } ?>
<?php } else { ?>
  <?php get_template_part( 'template-parts/post/content', 'none') ?>
<?php } ?>
