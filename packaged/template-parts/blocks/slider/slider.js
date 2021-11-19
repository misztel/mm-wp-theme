(function ($) {

  /**
   * initializeBlock
   *
   * Adds custom JavaScript to the block HTML.
   *
   * @date    15/4/19
   * @since   1.0.0
   *
   * @param   object $block The block jQuery element.
   * @param   object attributes The block attributes (only available when editing).
   * @return  void
   */
  var initializeBlock = function ($block) {
    $block.find('.slides').slick({
      dots: false,
      arrows: false,
      draggable: false,
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      speed: 9000,
      autoplay: true,
      autoplaySpeed: 0,
      cssEase: 'linear',
      variableWidth: true,
    });
  }

  // Initialize each block on page load (front end).
  $(document).ready(function () {
    $('.slider').each(function () {
      initializeBlock($(this));
    });
  });

  // Initialize dynamic block preview (editor).
  if (window.acf) {
    window.acf.addAction('render_block_preview/type=slider', initializeBlock);
  }

})(jQuery);
