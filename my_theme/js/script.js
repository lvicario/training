/**
 * @file
 * 
 */

(function($) {

  /**
   * Accordion Article
   */
  // Drupal.behaviors.accordionArticle = {
    // attach: function(context, settings) {
      var accordionContainter = $('.accordion-article'),
          accordionTitle = $('.views-field-title'),
          accordionDescription = $('.views-field-body');

        accordionDescription.hide();

        accordionContainter.on('click', '.views-field-title', function(e) {
          e.preventDefault();
          $(this)
            .next('.views-field-body').slideDown()
            .parent('.views-row').siblings('.views-row').find('.views-field-body').slideUp();
        });
    // }
  // };

})(jQuery);
