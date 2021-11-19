<?php get_header(); ?>
<?php
  $layout = mytheme123_meta(get_the_ID(), '_mytheme123_post_layout', true);
  $sidebar = is_active_sidebar('primary-sidebar');
  if($layout === 'sidebar' && !$sidebar){
    $layout = 'full';
  }
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <main role="main">
        <?php get_template_part( 'loop', 'single') ?>
      </main>
    </div>
  </div>
</div>
<?php get_footer(); ?>
