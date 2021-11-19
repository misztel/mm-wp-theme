<?php
  $prev = get_previous_post();
  $next = get_next_post();



?>
<?php if($prev || $next){ ?>
<nav class="post-navigation mt-5 mb-5" role="navigation">
  <h2 class="sr-only"><?php esc_attr_e('Post Navigation', 'mytheme123'); ?></h2>
  <div class="post-navigation__links d-flex justify-content-between">
    <?php if($prev) { ?>
      <div class="post-navigation-post prev">
        <a href="<?php the_permalink( $prev->ID ) ?>">
          <div class="btn btn-primary d-flex flex-column">
            <span> <?php echo esc_html_e('Poprzedni wpis', 'mytheme123') ?> </span>
            <span> <?php echo esc_html(get_the_title( $prev->ID)) ?> </span>
          </div>
        </a>
      </div>
    <?php } ?>
    <?php if($next) { ?>
      <div class="post-navigation-post next">
        <a href="<?php the_permalink( $next->ID ) ?>">
          <div class="btn btn-primary d-flex flex-column">
            <span> <?php echo esc_html_e('Następny wpis', 'mytheme123') ?> </span>
            <span> <?php echo esc_html(get_the_title( $next->ID)) ?> </span>
          </div>
        </a>
      </div>
    <?php } ?>
  </div>
</nav>
<?php } ?>
