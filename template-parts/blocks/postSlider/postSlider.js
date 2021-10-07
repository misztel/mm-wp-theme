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
    $block.find('.post-slides').slick({
      dots: false,
      arrows: false,
      draggable: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 5000,
      speed: 300,
      slidesToShow: 1,
      slidesToScrool: 1,
      centerMode: false,
      variableWidth: false,
      adaptiveHeight: false,
      focusOnSelect: true,
    });
  }

  // Initialize each block on page load (front end).
  $(document).ready(function () {
    $('.post-slider').each(function () {
      initializeBlock($(this));
    });
  });

  // Initialize dynamic block preview (editor).
  if (window.acf) {
    window.acf.addAction('render_block_preview/type=postslider', initializeBlock);
  }

})(jQuery);
