/*
 * Behavior for the automatic file upload
 * this module was customize by NS
 */

(function ($) {
  Drupal.behaviors.autoUpload = {
    attach: function(context, settings) {
      $('.field-type-image button[value=Transférer]', context).hide();
      $('.field-type-image input[type=file]', context).change(function() {
      
      
        //setTimeout to allow for validation
        //would prefer an event, but there isn't one
        setTimeout(function() {
    //      if(!$('.error', $parent).length) {
            $('.field-type-image button[type=submit]').mousedown();
      //    }
        }, 100);
      });
    }
  };
})(jQuery);