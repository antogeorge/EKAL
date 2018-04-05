(function ($, Drupal, drupalSettings) {
 
  'use strict';

  Drupal.behaviors.comments = {
    attach: function (context, settings) {
    

	    var page_url = '';
		var error_message = drupalSettings.error_message;
		
		if (drupalSettings.page_lang == 'en') {
		  var page_url = 'en/';               
		}
		var current_effect = 'roundBounce';


		var validator=$("#aljabr-comments").validate({
				//place all errors in a <div id="errors"> element
				
				errorPlacement: function(error, element) {
					error.appendTo("div#" + element.attr("name") + "_mand_errors"); 
					//$(".finance-form").css({'height':($(".content").height()+'px')});
					

				},
				submitHandler: function(form) {

				  run_waitMe(current_effect);
				  var postForm = $('#aljabr-comments').serialize();
				  
				  var first_name= $("#first_name").val();
				  var phone= $("#phone").val();
				  var place= $("#place").val(); //check
				  var comments= $("#comments").val(); //check

				  var copy = new Date();
				  var currtime = copy.getTime();
				  var pslt=hex_sha512(first_name+phone+place+comments+currtime+ "3X7AiNUX");
				  var postForm = $('#aljabr-comments').serialize();
				  postForm += '&time='+currtime+'&pslt='+pslt;
							  
				  $.ajax({url: drupalSettings.path.baseUrl + page_url + "comments-submit",
				      type: "POST",
                      data: postForm, //Forms name
                      dataType: 'json',
                      success: function(data)
                        {
                           
                           $('#aljabr-comments')[0].reset();
						   
						   if(data['status'] == true) {
							   var priority = 'success';
						   } else {
							   var priority = 'error';
						   }
							console.log(data);
							$('body').waitMe('hide');
		  
							  
							$(document).trigger("add-alerts", [
							  {
								"message": data['message'],
								"priority": priority
							  }
							]);
		

                            return false;                                                 
                        }
                  });

				  
				}
			});
		

	
	 $("#first_name").rules("add", {
         required:true,
         messages: {
                required: error_message['first_name_mandatory']
         }
      });
	  

	  
	 $("#phone").rules("add", {
         required:true,
         messages: {
                required: error_message['phone_mandatory']
         }
      });
	  
	 $("#place").rules("add", {
         required:true,
         messages: {
                required: error_message['place_mandatory']
         }
      });
	  
	 $("#comments").rules("add", {
         required:true,
         messages: {
                required: error_message['comments_mandatory']
         }
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
