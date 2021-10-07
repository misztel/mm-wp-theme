<form role="search" class="form-inline" method="get" action="<?php echo esc_url(home_url('/')) ?>">
  <div class="form-group">
    <label>
      <span class="sr-only">
        <?php echo esc_html_x('Search for:', 'label', '_themename')?>
      </span>
      <input type="search" class="form-control" name="s"
        placeholder="<?php echo esc_attr_x('Search', 'placeholder', '_themename'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" />
    </label>
    <button class="btn btn-primary" type="submit">
      <span class="sr-only"><?php echo esc_html_x('Search', 'submit button', '_themename'); ?></span>
      <i class="fa fa-search" aria-hidden="true"></i>
    </button>
  </div>
</form>
