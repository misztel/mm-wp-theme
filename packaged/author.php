<?php get_header(); ?>
<?php
  $author = get_query_var('author');
  $author_posts = count_user_posts($author);
  $author_display = get_the_author_meta('display_name', $author);
  $author_description = get_the_author_meta('user_description', $author);
  $author_website = get_the_author_meta('user_url', $author);
?>
<div class="container">
  <div class="row">

    <div class="col-md-4">
      <header>
        <?php echo get_avatar($author, 128); ?>
        <h1> <?php echo esc_html($author_display) ?></h1>
        <?php
          // translators: %s is the number of posts
          printf(esc_html(_n('%s post', '%s posts', $author_posts, 'mytheme123')), number_format_i18n( $author_posts));
        ?>
        <?php if($author_website){ ?>
          <a target="_blank" href="<?php echo esc_url( $author_website); ?>">
            <?php echo esc_html($author_website) ?>
          </a>
        <?php } ?>
        <p class="post-author-description">
          <?php echo esc_html($author_description); ?>
        </p>
      </header>
    </div>

    <div class="col-md-8">
      <main role="main">
        <?php get_template_part('loop', 'author'); ?>
      </main>
    </div>

  </div>
</div>
<?php get_footer(); ?>
