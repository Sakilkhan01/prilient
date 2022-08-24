(function( $ ){
        
    /* ----------------------------------------------------------- */
    /*  1. APPS SCREENSHOT SLIDEER ( SLICK SLIDER )
    /* ----------------------------------------------------------- */

        $('.mu-apps-screenshot-slider').slick({
          slidesToShow: 4,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: true,
                slidesToShow: 3
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: true,
                slidesToShow: 1
              }
            }
          ]
        });

})( jQuery );



  
    