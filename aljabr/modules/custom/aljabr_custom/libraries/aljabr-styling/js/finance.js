(function ($, Drupal, drupalSettings) {
 
  'use strict';

  Drupal.behaviors.finance = {
    attach: function (context, settings) {
    

	    var page_url = '';
		var error_message = drupalSettings.error_message;
		
		if (drupalSettings.page_lang == 'en') {
		  var page_url = 'en/';               
		}
		var current_effect = 'roundBounce';
	    var currentDate = new Date();
    
		$( "#date_issue, #doj" ).datepicker({ maxDate: "+0M +0D", changeMonth: true,changeYear: true, dateFormat: 'yy-mm-dd',
		 });
	 
		$( "#expiry_date" ).datepicker({ minDate: "+0M +0D", changeMonth: true,changeYear: true, dateFormat: 'yy-mm-dd',
		 });
		 
		$("#date_issue, #expiry_date, #doj").attr( 'readOnly' , 'true' );

		$('#male').click(function() {
			$("#female").prop("checked", false); 
			$('[data-drupal-selector="gender"]').val('male');
		});
		
		$('#female').click(function() {
			$("#male").prop("checked", false); 
			$('[data-drupal-selector="gender"]').val('female');
		});
		
		$('#single').click(function() {
			$("#married").prop("checked", false); 
			$('[data-drupal-selector="marriage"]').val('single');
		});
		
		$('#married').click(function() {
			$("#single").prop("checked", false); 
			$('[data-drupal-selector="marriage"]').val('married');
		});



		var validator=$("#aljabr-finance").validate({
				//place all errors in a <div id="errors"> element
				
				errorPlacement: function(error, element) {
					error.appendTo("div#" + element.attr("name") + "_mand_errors"); 
					//$(".finance-form").css({'height':($(".content").height()+'px')});
					

				},
				submitHandler: function(form) {

				  run_waitMe(current_effect);
				  var postForm = $('form').serialize();
				  
				  var first_name= $("#first_name").val();
				  var residency_card= $("#residency_card").val();
				  var place_issue= $("#place_issue").val();
				  var date_issue= $("#date_issue").val(); //check
				  var expiry_date= $("#expiry_date").val(); //check
				  var gender=$('[data-drupal-selector="gender"]').val();
				  var nationality= $("#nationality").val();
				  var mobile_no= $("#mobile_no").val();
				  var residence_no= $("#residence_no").val();
				  var marrital_status=$('[data-drupal-selector="marriage"]').val();
				  var address= $("#address").val();
				  var pbno= $("#pbno").val();
				  var city= $("#city").val();
				  var postal_code= $("#postal_code").val();
				  var district= $("#district").val();
				  var street= $("#street").val();
				  var building_no= $("#building_no").val();
				  var accomodation_type= $("#accomodation_type").val();
				  var annual_rent= $("#annual_rent").val();
				  var employer= $("#employer").val();
				  var job_title= $("#job_title").val();
				  var doj= $("#doj").val(); //check
				  var office_address= $("#office_address").val();
				  var post_box= $("#post_box").val();
				  var income= $("#income").val();
				  var net_salary= $("#net_salary").val();
				  var additional_income= $("#additional_income").val();
				  var car_model= $("#car_model").val();
				  var car_brand= $("#car_brand").val();
				  var car_price= $("#car_price").val();
				  var car_type= $("#car_type").val();
				  var down_payment= $("#down_payment").val();
				  var period= $("#period").val();
				  var max_value_monthly= $("#max_value_monthly").val();
				  var max_value_lastpayment= $("#max_value_lastpayment").val();
				  var copy = new Date();
				  var currtime = copy.getTime();
				  var pslt=hex_sha512(first_name+residency_card+place_issue+date_issue+expiry_date+gender+nationality+mobile_no+residence_no+marrital_status+address+pbno+city+postal_code+district+street+building_no+accomodation_type+annual_rent+employer+job_title+doj+office_address+post_box+income+net_salary+additional_income+car_model+car_brand+car_price+car_type+down_payment+period+max_value_monthly+max_value_lastpayment+currtime+ "3X7AiNUX");
				  var postForm = $('form').serialize();
				  postForm += '&time='+currtime+'&pslt='+pslt;
							  
				  $.ajax({url: drupalSettings.path.baseUrl + page_url + "finance-submit",
				      type: "POST",
                      data: postForm, //Forms name
                      dataType: 'json',
                      success: function(data)
                        {
                           
                           $('#aljabr-finance')[0].reset();
						   
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
		
		

	
	$( "#edit-submit" ).click(function(event) {
		$(this).unbind('submit').submit(); // continue the submit unbind preventDefault
	 
		var firstdiv = $("#firstdiv").height();
		var seconddiv = $("#seconddiv").height();
		var thirddiv = $("#thirddiv").height();
		var fourthdiv = $("#fourthdiv").height();
		var div_array = [firstdiv, seconddiv, thirddiv, fourthdiv];
		var biggest = Math.max.apply( null, div_array );
		var extraheight = 50;
		var setheight = parseInt(biggest) + parseInt(extraheight);
		$(".finance-form").css({'height':(setheight+'px')});
		return false;
	});

	
	 $("#first_name").rules("add", {
         required:true,
         messages: {
                required: error_message['name_mandatory']
         }
      });
	  
	 $("#residency_card").rules("add", {
         required:true,
         messages: {
                required: error_message['residency_card_mandatory']
         }
      });
	  
	 $("#date_issue").rules("add", {
         required:true,
         messages: {
                required: error_message['date_issue_mandatory']
         }
      });
	  
	 $("#expiry_date").rules("add", {
         required:true,
         messages: {
                required: error_message['expiry_date_mandatory']
         }
      });
	  
	 $("#mobile_no").rules("add", {
         required:true,
         messages: {
                required: error_message['mobile_no_mandatory']
         }
      });
	  
	 $("#annual_rent").rules("add", {
         required:true,
         messages: {
                required: error_message['annual_rent_mandatory']
         }
      });
	  
	 $("#income").rules("add", {
         required:true,
         messages: {
                required: error_message['income_mandatory']
         }
      });
	  
	 $("#net_salary").rules("add", {
         required:true,
         messages: {
                required: error_message['netsalary_mandatory']
         }
      });
	  
	 $("#car_model").rules("add", {
         required:true,
         messages: {
                required: error_message['car_model_mandatory']
         }
      });
	  
	 $("#car_brand").rules("add", {
         required:true,
         messages: {
                required: error_message['car_brand_mandatory']
         }
      });
	  
	 $("#car_price").rules("add", {
         required:true,
         messages: {
                required: error_message['car_price_mandatory']
         }
      });
	  
	 $("#car_type").rules("add", {
         required:true,
         messages: {
                required: error_message['car_type_mandatory']
         }
      });
	  
	 $("#down_payment").rules("add", {
         required:true,
         messages: {
                required: error_message['downpayment_mandatory']
         }
      });
	  
	 $("#period").rules("add", {
         required:true,
         messages: {
                required: error_message['period_mandatory']
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
