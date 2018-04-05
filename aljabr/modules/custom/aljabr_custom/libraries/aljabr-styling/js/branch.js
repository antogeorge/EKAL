(function ($, Drupal, drupalSettings) {
 
  'use strict';

  Drupal.behaviors.branch = {
    attach: function (context, settings) {
    

	    var page_url = '';
		var headoffice = drupalSettings.headoffice;
		
		if (drupalSettings.page_lang == 'en') {
		  var page_url = 'en/';               
		}
		var current_effect = 'roundBounce';
	  
		var map;
		function myMap() {
		  var mapCanvas = document.getElementById("map");
		  var headoffice_latitude = parseFloat(headoffice['latitude']);
		  var headoffice_longitude = parseFloat(headoffice['longitude']);
		  var myLatLng = {lat: headoffice_latitude, lng: headoffice_longitude};
		  var mapOptions = {  
			center: myLatLng,
			zoom: 15 
		  };
		  

		
		  map = new google.maps.Map(mapCanvas, mapOptions);
		  
		  		  var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
		}

		myMap();

		var coords = {
		  'PHI': '39.953050,-75.163961',
		  'NYC': '40.875597,-77.776226',
		  'HAR': '41.763633,-72.682662'
		};

		function changeMap(city) {
		  var c = coords[city].split(',');
		  map.setCenter(new google.maps.LatLng(c[0], c[1]));
		}

	   $(document).on('change','#branch',function() {
		  //console.log(this.value);
		  if(this.value == '' || this.value == null) {
			  var latit = parseFloat(headoffice['latitude']);
			  var longt = parseFloat(headoffice['longitude']);
		  } else {
			  var c = this.value.split(',');
			  
			  var latit = parseFloat(c[0]);
			  var longt = parseFloat(c[1]);

		  }

			  map.setCenter(new google.maps.LatLng(latit, longt));

			   var marker = new google.maps.Marker({
				  position: {lat: latit, lng: longt},
				  map: map,
				  title: 'Hello World!'
				});
		
		});
	  
		function run_waitMe(effect){
		   $('body').waitMe({
			effect: effect,
			bg: 'rgba(104, 69, 69, 0.51)',
			color:'#000',
			sizeW:'',
			sizeH:''
		});
	   }
   
    }
};
})(jQuery, Drupal, drupalSettings);
