<?php
/*
Template Name: Page Home
*/
get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <main role="main">
        <?php if(have_posts()) { ?>
          <?php while(have_posts()) { ?>

            <?php the_post(); ?>


                <?php the_content(); ?>



          <?php } ?>

          <?php } else { ?>
            <?php get_template_part( 'template-parts/post/content', 'none') ?>
          <?php } ?>

      </main>
    </div>
  </div>
</div>

<?php get_footer(); ?>
