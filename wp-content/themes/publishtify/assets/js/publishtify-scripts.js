(function ($) {
  "use strict";
  $("#publishtify-main-content").click(function () {
    $("html, body").animate(
      {
        scrollTop: $($.attr(this, "href")).offset().top,
      },
      500
    );
    return false;
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".publishtify-scrollto-top a").fadeIn();
    } else {
      jQuery(".publishtify-scrollto-top a").fadeOut();
    }
  });
  jQuery(".publishtify-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
})(jQuery);
