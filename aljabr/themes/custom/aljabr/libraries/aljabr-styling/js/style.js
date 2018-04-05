/* ==============================================
	Preload
=============================================== */
(function ($, Drupal, drupalSettings) {

  'use strict';

  Drupal.behaviors.aljabr = {
    attach: function (context, settings) {
      
        $('ul.slimmenu').slimmenu( {
          resizeWidth: '800',
          collapserTitle: 'Main Menu',
          easingEffect:'easeInOutQuint',
          animSpeed:'medium',
          indentChildren: true,
          childrenIndenter: '&raquo;'
        });
  
      /*- banner slider -*/
      if(window.chrome) { $('.banner li').css('background-size', '100% 100%'); }
          
      $('.banner').unslider({
        speed: 500,               //  The speed to animate each slide (in milliseconds)
        delay: 4000,              //  The delay between slide animations (in milliseconds)
        complete: function() {},  //  A function that gets called after every slide animation
        keys: true,               //  Enable keyboard (left, right) arrow shortcuts
        dots: false,               //  Display dot navigation
        fluid: false,              //  Support responsive design. May break non-responsive designs
                    arrows: true
      });
        
        $('.arrows').addClass( "banner-arrow" );
        
        $('.hm-content-slider').unslider({
          speed: 500,               //  The speed to animate each slide (in milliseconds)
          delay: 4000,              //  The delay between slide animations (in milliseconds)
          complete: function() {},  //  A function that gets called after every slide animation
          keys: true,               //  Enable keyboard (left, right) arrow shortcuts
          dots: true,               //  Display dot navigation
          fluid: false,              //  Support responsive design. May break non-responsive designs
          arrows: true
        });


        $(".range").ionRangeSlider({
        
        });
		
		if(window.chrome) { $('#offers .block-region-slider-block li').css('background-size', '100% 100%'); }
				
		$('#offers .block-region-slider-block').unslider({
				speed: 500,               //  The speed to animate each slide (in milliseconds)
				delay: 4000,              //  The delay between slide animations (in milliseconds)
				complete: function() {},  //  A function that gets called after every slide animation
				keys: true,               //  Enable keyboard (left, right) arrow shortcuts
				dots: true,               //  Display dot navigation
				fluid: false,              //  Support responsive design. May break non-responsive designs
				arrows: true
		});
		// $('.arrows').addClass( "offer-arrow" );
	
	
		$('ul li').filter(function() {
			//console.log($(this).text());			
			return $(this).text() == '';  
		}).remove();
		
		
		
		
		
    }
  };
})(jQuery, Drupal, drupalSettings);