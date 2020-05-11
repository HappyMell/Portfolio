(function ($) {
  $(document).ready(function () {
    $(".main-carousel").flickity({
      // options
      cellAlign: "left",
      contain: true,
      // imagesLoaded: true,
      bgLazyLoad: true,
    });
  });
})(jQuery); // End of use strict
