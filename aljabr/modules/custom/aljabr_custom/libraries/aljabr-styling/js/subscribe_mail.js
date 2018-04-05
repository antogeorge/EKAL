(function ($, Drupal, drupalSettings) {
 
  'use strict';

  Drupal.behaviors.subscribe_mail = {
    attach: function (context, settings) {
    

	    var page_url = '';
		var error_message = drupalSettings.error_message;
		
		if (drupalSettings.page_lang == 'en') {
		  var page_url = 'en/';               
		}
		var current_effect = 'roundBounce';


		var validator=$("#aljabr-mail").validate({
				//place all errors in a <div id="errors"> element
				
				errorPlacement: function(error, element) {
					error.appendTo("div#" + element.attr("name") + "_mand_errors"); 
					//$(".finance-form").css({'height':($(".content").height()+'px')});
					

				},
				submitHandler: function(form) {

				  run_waitMe(current_effect);
				  var postForm = $('#aljabr-mail').serialize();
				  
				  var first_name= $("#field_first_name").val();
				  var email= $("#email").val();

				  var copy = new Date();
				  var currtime = copy.getTime();
				  var pslt=hex_sha512(first_name+email+currtime+ "3X7AiNUX");
				  var postForm = $('#aljabr-mail').serialize();
				  postForm += '&time='+currtime+'&pslt='+pslt;
							  
				  $.ajax({url: drupalSettings.path.baseUrl + page_url + "emailsubscribe-submit",
				      type: "POST",
                      data: postForm, //Forms name
                      dataType: 'json',
                      success: function(data)
                        {
                           
                           $('#aljabr-mail')[0].reset();
						   
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
		
      //custom validation rule
      $.validator.addMethod("customemail", 
          function(value, element) {
              var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
              return pattern.test(value);
          }, 
          error_message['email_validate']
      );
	
	 $("#field_first_name").rules("add", {
         required:true,
         messages: {
                required: error_message['first_name_mandatory']
         }
      });
	  

	  
	 $("#email").rules("add", {
         email:true,
		 required: {depends:function(){
                      $(this).val($.trim($(this).val()));
                      return true;
                     } 
                    },
		 customemail: true,
         messages: {
                required: error_message['email_mandatory'],
				email: error_message['email_validate']
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
