(function () {
    "use strict";
  
    var carousels = function () {
      $(".owl-carousel1").owlCarousel({
        loop: true,
        center: true,
        margin: 0,
        responsiveClass: true,
        nav: false,
        autoplay:true,
        responsive: {
          400: {
            items: 1,
          },
          680: {
            items: 2,
          },
          1000: {
            items: 3,
          },
          1200: {
            items: 4,
          }
          
        }
        
      });
      
    };
  
    (function ($) {
      carousels();
    })(jQuery);
  })();
  