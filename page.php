<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <main role="main">
        <?php get_template_part('loop', 'page'); ?>
      </main>
    </div>
      <div class="col-md-4">
        <?php get_sidebar(); ?>
      </div>
  </div>
</div>
<?php get_footer(); ?>
