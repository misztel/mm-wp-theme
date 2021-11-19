
<?php if(have_posts()) { ?>
  <?php while(have_posts()) { ?>
    <?php the_post(); ?>
    <?php get_template_part( 'template-parts/post/content-blog-style1'); ?>
  <?php } ?>
  <?php
  mytheme123_bs_pagination();
  ?>
  <?php do_action('mytheme123_after_pagination'); ?>
<?php } else { ?>
  <?php get_template_part( 'template-parts/post/content', 'none') ?>
<?php } ?>
