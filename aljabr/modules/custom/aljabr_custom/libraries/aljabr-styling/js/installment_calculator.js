(function ($, Drupal, drupalSettings) {
 
  'use strict';

  Drupal.behaviors.installment_calculator = {
    attach: function (context, settings) {
        var en='';
        var red='';
        var url=window.location.href;
        var urlarr = url.split("/");
        var current_effect = 'progressBar';
        for(var i=0;i<urlarr.length;i++){
            if(urlarr[i]=='en'){
              en='en'; 
              red='en/'; 
            }
        }
         $(":input").bind("keyup", apply_calc);
         $(":input").bind("change", apply_calc);
         $(":input").bind("blur", apply_calc);
         //$("#downpayment_val").bind("keyup", Calc_DownPaymentRange);
         //$("#lastpayment_val").bind("keyup", Calc_BalloonPaymentRange);
         $('#emi,#downpayment_val,#downp_val,#lastpayment_val,#lastp_val,#insurance_value,#total,#intrest_rate_value').number(true, 0);

      $('#downpayment_val,#lastpayment_val').keydown(function () {
        
        if($(this).val() == 0) {
           console.log($(this).val());
          $(this).val('');
        }
      });

      $('#downpayment_val,#lastpayment_val').keyup(function () {
           console.log($(this).val());

          $(this).focus();
          var tmpStr = $(this).val();
          $(this).val('');
          $(this).val(tmpStr);
          if($(this).attr('id') == 'downpayment_val') {
            Calc_DownPaymentRange();  
          } else if($(this).attr('id') == 'lastpayment_val') {
            Calc_BalloonPaymentRange();
          }
          
      });





    $(document).on('click','#lastdownsliderdown',function(e) {

         var value = $('#downpayment').val();
         if (parseInt(value) > 0) {
             value = parseInt(value) - 1;
             $("#downpayment").simpleSlider("setValue", value);
             $('#downpayment_percent').val(value + '%');
             CheckDownPaymentRange();

         }
         else {
             $("#downpayment").simpleSlider("setValue", 0);
             $('#downpayment_percent').val(0 + '%');
             CheckDownPaymentRange();
         }
         CheckDownPaymentMinimumRange();
    });


     $(document).on('click','#lastdownsliderup',function(e) {
         var value = $('#downpayment').val();
         if (parseInt(value) < 80) {
             value = parseInt(value) + 1;
             $('#downpayment_percent').val(value + '%');
             $("#downpayment").simpleSlider("setValue", value);
             CheckDownPaymentRange(); //to calculate advance
             CheckDownPaymentMinimumRange();
         }
     });


     $(document).on('click','#lastpaymsliderdown',function(e) {
         var value = $('#lastpayment').val();
         if (parseInt(value) > 0) {
             value = parseInt(value) - 1;
             $("#lastpayment").simpleSlider("setValue", value);
             $('#lastpayment_percent').val(value + '%');
             CheckBalloonPaymentRange();
         }
         else {
             $("#lastpayment").simpleSlider("setValue", 0);
             $('#lastpayment_percent').val(0 + '%');
             CheckBalloonPaymentRange();

         }
     });

     $(document).on('click','#lastpaymsliderup',function(e) {
         var value = $('#lastpayment').val();
         if (parseInt(value) < 25) {
             value = parseInt(value) + 1;
             $('#lastpayment_percent').val(value + '%');
             $("#lastpayment").simpleSlider("setValue", value);
             CheckSliderRange();
         }
     });

     $(document).on('click','#sliderdown',function(e) {
         var value = $('#duration').val();
         if (parseInt(value) > 12) {

              value = parseInt(value) - 6;

             $("#duration").simpleSlider("setValue", value);
             $('#amount').val(value);
         }
     });

     $(document).on('click','#sliderup',function(e) {
         var value = $('#duration').val();
         if (parseInt(value) < 60) {

              value = parseInt(value) + 6; 
             
             $('#amount').val(value);
             $("#duration").simpleSlider("setValue", value);

             CheckSliderRange();
         }
     });

     $(document).on('click','.dur',function(e) {
		e.preventDefault();
		$('.listing .active').removeClass('active');
		$(this).addClass( 'active' );
		var dur = $(this).text();
		console.log('dur '+dur);
		$('[data-drupal-selector="amount"]').val(dur); 
		$('#period_funding').val(dur);
		 InterestCalc();
         emi_calc();
		 
     });
	 

    function CheckDownPaymentRange() {
    InterestCalc();
        $('#downpayment_val,#downp_val').val(($('#car_price_val').val() * parseFloat($("#downpayment_percent").val())) / 100);
         Cond_MinimumValue();
    }

     function CheckDownPaymentMinimumRange() {
		 console.log($('#car_price_val').val());
		 
         if ($('#car_price_val').val() != "") {

             var carprice = $('#car_price_val').val();
			 console.log('car price' + carprice);
             var advan = $('#downpayment_val').val();
             var Minval = carprice - advan;
             var MaxLimit = carprice - 20000;
			 console.log('maxlimit ' + MaxLimit);
             $('#downpayment,#downpayment_val').removeAttr("disabled");
             
			 
             if (Minval < 20000) {
                 var DownPaymentVal = MaxLimit * 100 / $('#car_price_val').val();

                 $("#downpayment").simpleSlider("setValue", DownPaymentVal);
                 $('#downpayment_val,#downp_val').val(MaxLimit);
                 $("#downpayment_percent").val(DownPaymentVal.toFixed(2) + '%');
                 $('#Error_Min').hide();

             }
             if (MaxLimit < 0) {
                 $("#downpayment").simpleSlider("setValue", 0);
                 $('#downpayment_val,#downp_val').val(carprice * 0 / 100);
                 $("#downpayment_percent").val('0%');
                 $('#downpayment,#downpayment_val,#downpayment_percent').attr("disabled", "disabled");
             }

         }
     }

    function CheckBalloonPaymentRange() {
    InterestCalc();
        $('#lastpayment_val,#lastp_val').val(parseFloat($("#lastpayment_percent").val()) * $("#car_price_val").val() / 100);
        Cond_MinimumValue();
    }

     function CheckSliderRange() {


         //var Lastp = $("#lastpayment").val();
         //var Dur = $("#duration").val();
         //if (Lastp > 20 && Dur <= 48) {
         //  $("#lastpayment_percent").val("20" + '%');
         //  $("#lastpayment").simpleSlider("setValue", 20);

         // alert(20);
         //}
         // if (Lastp > 10 && Dur > 49) {
         //   $("#lastpayment_percent").val("20" + '%');
         //   $("#lastpayment").simpleSlider("setValue", 20);

         //alert(10);
         // }
     }


    function InterestCalc() {
         if ($('#car_price_val').val() <= 50000) { $('[data-drupal-selector="insurance-ratio"]').val(0.055); }
         else if ($('#car_price_val').val() > 50000 && $('#car_price_val').val() <= 60000) { $('[data-drupal-selector="insurance-ratio"]').val(0.055); }
         else if ($('#car_price_val').val() > 60000) { $('[data-drupal-selector="insurance-ratio"]').val(0.055); }
         var Lastpayment=parseFloat($('#lastpayment_percent').val());

           if ($('#lastpayment_val').val()== 0 && $('[data-drupal-selector="amount"]').val() <= 48) { $('[data-drupal-selector="interst-ratio"]').val(0.055); }
           else if (Lastpayment <= 10 && $('[data-drupal-selector="amount"]').val() <= 48) { $('[data-drupal-selector="interst-ratio"]').val(0.055); }
           else if (Lastpayment > 10 && $('#lastpayment').val() <= 25 && $('[data-drupal-selector="amount"]').val() <= 48) { $('[data-drupal-selector="interst-ratio"]').val(0.055); }
           else if ($('#lastpayment_val').val() == 0 && $('[data-drupal-selector="amount"]').val() > 48) { $('[data-drupal-selector="interst-ratio"]').val(0.055); }
           else if (Lastpayment <= 20 && $('[data-drupal-selector="amount"]').val() > 48) { $('[data-drupal-selector="interst-ratio"]').val(0.055); } 
         

     }

     function Cond_MinimumValue() {
         $('#Error_Min').hide();
         if ($('#car_price_val').val() != "") {
             var carprice = $('#car_price_val').val();
             var advan = $('#downpayment_val').val();
             var Minval = carprice - advan;

             if (Minval < 20000) {
                 $('#Error_Min').show();
             }
         }
     }     

     function apply_calc() {
         if ($(this).attr('id') == 'car_price_val') {
             CheckDownPaymentMinimumRange();
             $('#downpayment_val,#downp_val').val($('#car_price_val').val() * parseFloat($('#downpayment_percent').val()) / 100);
             $('#lastpayment_val,#lastp_val').val($("#car_price_val").val() * parseFloat($("#lastpayment_percent").val()) / 100);
             // $("#lastpayment_percent").val($("#lastpayment").val() + '%');
             // $("#downpayment_percent").val($("#downpayment").val() + '%');
         }
         InterestCalc();
         emi_calc();
     }


     function emi_calc() {
         //alert('test');
		 console.log("emi_calc");
         Cond_MinimumValue();
         var lastpayment = 0;
         var duration_after_latest = 0;
         var duration = $('[data-drupal-selector="amount"]').val();
         var total = 0;
         var totalemi=0;
         var np = +$("#car_price_val").val() - $("#downpayment_val").val();
		 console.log("np" + np);
//alert(np);
         //var intrest_rate_value=0;
         $('[data-drupal-selector="net-price"]').val(np);
         //alert('testit');
         //lastpayment = $("#lastpayment").val() * $("#car_price_val").val() / 100;
         lastpayment = $("#lastpayment_val").val();
		 console.log("lastpayment " + lastpayment);
         duration_after_latest = +duration + (($("#lastpayment").val() > 0) ? 1 : 0);

         $("#insurance_value").val(($("#car_price_val").val() * $('[data-drupal-selector="insurance-ratio"]').val() * duration / 12).toFixed(0));
         var testinsuraceratio = $('[data-drupal-selector="insurance-ratio"]').val();
         var testinsurancevalue = $("#insurance_value").val();
         var testinterestratio = $('[data-drupal-selector="interst-ratio"]').val();
         var intrest_rate_value = (np * $('[data-drupal-selector="interst-ratio"]').val() * duration / 12).toFixed(0);
console.log("intrest_rate_value"+intrest_rate_value);
         $("#intrest_rate_value").val(intrest_rate_value);
         $('[data-drupal-selector="rv"]').val(intrest_rate_value);
         //+$("#insurance_value").val() +
console.log("insurance_value " + $("#insurance_value").val());
          total = +np + +intrest_rate_value + (+$("#insurance_value").val());
          $("#total").val(total);
		  console.log("total" + total);
         // $("#lastpayment_val").val(lastpayment);


           $("#emi").val(((total - lastpayment) / duration).toFixed(0));
           var testemi = $("#emi").val();
         
         //alert(total);

     }

     function CheckPaymentRange() {
         InterestCalc();
    
         $('#downpayment_val,#downp_val').val(($('#car_price_val').val() * parseFloat($("#downpayment_percent").val())) / 100);
    
    
         $('#lastpayment_val,#lastp_val').val(parseFloat($("#lastpayment_percent").val()) * $("#car_price_val").val() / 100);
    
         Cond_MinimumValue();
     }

     function Calc_DownPaymentRange() {
         $('#Error').hide();
         var DownPaymentVal = $('#downpayment_val').val() * 100 / $('#car_price_val').val();
		 console.log("downpaymentval" + DownPaymentVal);
         if (DownPaymentVal > 80) {
             $('#downpayment_val,#downp_val').val(($('#car_price_val').val() * $('#downpayment').val()) / 100);
             $("#downpayment_percent").val($('#downpayment').val() + '%');
         }
         else if (DownPaymentVal < 0) {
             $('#Error').show();
         }
         else {
             $("#downpayment").simpleSlider("setValue", DownPaymentVal);
             $("#downpayment_percent").val(DownPaymentVal.toFixed(2) + '%');
             $('#downpayment_val,#downp_val').val($('#car_price_val').val() * DownPaymentVal / 100);
         }
         CheckDownPaymentMinimumRange();
     }

     function Calc_BalloonPaymentRange() {
         $('#Error').hide();
         var BallonPaymentVal = $('#lastpayment_val').val() * 100 / $('#car_price_val').val();
         //alert(BallonPaymentVal);
         if (BallonPaymentVal > 20) {
             $('#lastpayment_val,#lastp_val').val(($('#car_price_val').val() * $('#lastpayment').val()) / 100);
             $("#lastpayment_percent").val($('#lastpayment').val() + '%');
         }
         else if (BallonPaymentVal < 0) {
             $('#Error').show();
         }
         else {
             $("#lastpayment").simpleSlider("setValue", BallonPaymentVal);
             $("#lastpayment_percent").val(BallonPaymentVal.toFixed(2) + '%');
             $('#lastpayment_val,#lastp_val').val(BallonPaymentVal * $("#car_price_val").val() / 100);
         }
     }

     $("[data-slider]")
          .each(function () {
              
			  var input = $(this);
              $("<span>")
              .addClass("output")
              .insertAfter($(this));
          })
          .bind("slider:ready slider:changed", function (event, data) {
			  
        if(event.target.id=="lastpayment"){
        $("#lastpayment_percent").val($("#lastpayment").val() + '%');
        CheckBalloonPaymentRange();
        }
        else if(event.target.id=="car_price"){
			
			if($("#car_price").val() != 0) {
				console.log("wil"+$("#car_price").val());
				$("#car_price_val").val($("#car_price").val());
			} else {
				$("#car_price_val").val('');
			}
		
        }
        else if(event.target.id=="downpayment"){
        $("#downpayment_percent").val($("#downpayment").val() + '%');
        CheckDownPaymentRange();
        }
             
             
             
              
              CheckDownPaymentMinimumRange();
              CheckSliderRange();
              emi_calc();
          });

		  $('#car_price').slider({isRTL: true});
		  
    }
};
})(jQuery, Drupal, drupalSettings);
