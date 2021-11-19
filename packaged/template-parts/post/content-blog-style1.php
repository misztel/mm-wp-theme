<article <?php post_class('col-md-4 mb-4'); ?>>

  <div class="d-flex flex-column post p-3 h-100" style="box-shadow: 1px 0px 16px 0px rgb(0 0 0 / 12%);">
      <?php if(get_the_post_thumbnail() !== '') { ?>
        <div class="post__img">
          <?php the_post_thumbnail( 'mytheme123-blog-thumbnail' ) ?>
        </div>
      <?php } ?>

      <header class="post__content">
        <div class="post__meta">
          <?php mytheme123_post_meta(); ?>
        </div>
        <h2 class="post__title">
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h2>
      </header>

      <div class="post__body">
        <?php the_excerpt(); ?>
        <?php mytheme123_read_more_link(); ?>
      </div>
  </div>

</article>
