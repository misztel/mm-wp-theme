<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <header>
      <?php the_archive_title('<h1>', '</h1>'); ?>
      <?php the_archive_description('<p>', '</p>'); ?>
    </hedaer>
    </div>
    <div class="col-md-12">
      <main role="main">
        <?php get_template_part('loop', 'archive'); ?>
      </main>
    </div>
  </div>
</div>
<?php get_footer(); ?>
