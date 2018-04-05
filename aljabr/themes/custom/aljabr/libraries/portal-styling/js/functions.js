/* ==============================================
	Preload
=============================================== */
(function ($, Drupal, drupalSettings) {

  'use strict';

  Drupal.behaviors.portal = {
    attach: function (context, settings) {
         //$.ajaxSetup({cache: false});
         var current_effect = 'progressBar';
         var curr_url = window.location.href;
         var curr_url_arr = curr_url.split('/');
         var page_name = curr_url_arr[curr_url_arr.length-1].toLowerCase();
         var page_before = curr_url_arr[curr_url_arr.length-2].toLowerCase();

         switch(page_name) {
          case 'about-ijarah':
            userlogout();
            break;

          case 'customer-service':
            userlogout();
            break;

          case 'auto-leasing':
            userlogout();
            break;

          case 'promotions':
            userlogout();
            break;

          case 'contact-ijarah':
            userlogout();
            break;

          case 'ijarah-branches':
            userlogout();
            break;

          case 'apply-now':
            userlogout();
            break;

          case 'installment-calculation':
            userlogout();
            break;

          case 'installment-calculator-stc':
            userlogout();
            break;

          case 'services':
            userlogout();
            break;

          case 'user-agreement':
            userlogout();
            break;
         }
         
        switch(page_before) {
          case 'user':
            userlogout();
            break;

          case 'car':
            userlogout();
            break;

          
         }

         function userlogout() {
          if ($.inArray('administrator', drupalSettings.user_role) == -1 && $.inArray('content_editor', drupalSettings.user_role) == -1) {
            // not found
            $("#wrap-logout").fancybox().trigger('click');
            $(".side-bar, .contetn-wrap").css("opacity", "-0.6"); 
          }
         }

         
         run_waitMe(current_effect);
         var page_url = '';
         if (drupalSettings.page_lang == 'en') {
          var page_url = 'en/';               
         }
    
    var firstlogin = localStorage.getItem('first-login');
    //if(!firstlogin){
      //alert("function "+firstlogin);
      //$.cookie('subscripted_user', true, { expires: 2147483647 });
      //$.cookie('subscripted_user', true, { expires: 2147483647, path: '/', domain: '172.16.1.85', secure: true });
              
      var copy = new Date();
      var currtime = copy.getTime();
      var pslt = hex_sha512(firstlogin + currtime + "3X7AiNUX");
      var logdata = { 
          'first_login': firstlogin,
          'pslt': pslt,
          'time' : currtime
      };
                  $.ajax({url:drupalSettings.path.baseUrl + page_url + "set-cookie", 
                      type: "POST",
                      data: logdata,
                      dataType: 'json',
                      cache: false,
                      success: function(data)
                        {
                          if(data['status'] == 'invalid') {
                            window.location.replace(drupalSettings.path.baseUrl + page_url + 'user/logout?destination=' + page_url + 'user/login');
                          } else {
                            $('body').waitMe('hide');
                            return false;
                          }
                                                        
                        }

                  });

      // var loginflag=localStorage.setItem('first-login',0);
   // }
        // $.cookie('subscripted_24', true, { expires: 2147483647 });
// alert($.cookie('subscripted_user'));
//     if (!$.cookie('subscripted_user')) {
//               // Logout the user
//               alert($.cookie('subscripted_user'));
//               run_waitMe(current_effect);
//               //window.location.replace(drupalSettings.path.baseUrl + page_url + 'user/logout');
//               //return true;  
//     }


        /* start some common js functions req on all pages */
        
        run_waitMe(current_effect);
        $('input').attr('autocomplete','off');
            //Set default open/close settings
            $('.acc_container').hide(); //Hide/close all containers
            $('.acc_trigger:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container

            //On Click
            $(document).on('click','.acc_trigger',function() {
                if ($(this).next().is(':hidden')) { //If immediate next container is closed...
                    $('.acc_trigger').removeClass('active').next().slideUp(); //Remove all .acc_trigger classes and slide up the immediate next container
                    $(this).toggleClass('active').next().slideDown(); //Add .acc_trigger class to clicked trigger and slide down the immediate next container
                }
                return false; //Prevent the browser jump to the link anchor
            });

            $(document).on('click','.top-acc_trigger',function() {
                $('.top-acc_container').slideToggle('slow');
                return false;
            });

            $(document).on('click','.top-acc_trigger',function() {
                $(".top-acc_trigger").toggleClass("active");
            });

            $(document).on('click','.dashboard-btn',function(e) {
                e.preventDefault();
                $("body").toggleClass("toggle");
            });
            
            $(document).on('click','.mob-menu',function() {
              $('ul.menu').slideToggle('fast');
              return false;
            });

            $(document).on('click','.side-menu ul li .sub-btn',function() {
                var parent = $(this).parent();
                if (parent.hasClass('active')) {
                    $(".sub-menu:first", parent).hide(300);
                    parent.removeClass('active');
                } else {
                    $(".sub-menu:first", parent).show(300);
                    parent.addClass('active');
                }
             });

      $(document).on('click','#logout-no',function(e) {
          e.preventDefault();

          $.fancybox.close();
            

       });

      $(document).on('click','#logout-no-conf',function(e) {
          e.preventDefault();

          parent.history.back();
            

       });

      $(document).on('click','.fancybox-close',function(e) {
          e.preventDefault();

          window.location.reload();
            

       });


      $(document).on('click','#logo-website',function(e) {
          e.preventDefault();
          $("#wrap-logo").fancybox().trigger('click');
          //$.fancybox.close();
            

       });


      $(document).on('click','#logout-yes,#logout-yes-conf',function(e) {
          e.preventDefault();
          $.fancybox.close();
          run_waitMe(current_effect);
              window.location.replace(drupalSettings.path.baseUrl + page_url + 'user/logout?destination=' + page_url + 'user/login');
              return true;  
            
       });

            $.ajax({url:drupalSettings.path.baseUrl + page_url + "mailbox-notify", 
                      type: "POST",
                      dataType: 'json',
                      success: function(data)
                        {
                           //alert(data[i]);
                          // return false;
                          $( "#notifycount" ).remove();
                          //$( ".mail_det").remove();
                          // alert(data.length);
                          if(data.length>0){
                            $( '#envlpe' ).replaceWith('<a id="envlpe" class="dropdown-toggle" href="' + drupalSettings.path.baseUrl + page_url + 'mailbox" title=""> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <span id="notifycount" class="badge02 bg-theme">' + data.length + '</span> </a>');

                            if(data.length>=3)
                              var iteration=3;
                            else
                              var iteration=data.length;
                            
                            for(var i=0;i<iteration;i++){
                              var SUBJECT=data[i]['SUBJECT'];
                              var MSG_ID=data[i]['MSG_ID'];
                              // var BODY=dateFormat(data[i]['BODY']);
                             $( '<li class="mail_det"><a href="' + drupalSettings.path.baseUrl + page_url + 'mailbox-details/' + MSG_ID + '"><span class="subject"><span class="from">'+SUBJECT+'</span></span></a> </li>' ).insertAfter( "#inbox" );
                            }
                            $( "#mailbox" ).replaceWith('<li id="mailbox"> <a href="' + drupalSettings.path.baseUrl + page_url + 'mailbox">' + Drupal.t('See all messages') + '</a>  </li>');
                          }else{

                               $.ajax({url: drupalSettings.path.baseUrl + page_url + "mailbox-count", 
                                                type: "POST",
                                                dataType: 'json',
                                                success: function(data)
                                                  {

                                                      if(data['status']==0){
                                                        //no email
                                                        $( "#mailbox" ).replaceWith('<li id="mailbox"> <a href="">' + Drupal.t('No Email') + '</a> </li>');
                                                        $( '#envlpe' ).replaceWith('<a id="envlpe" data-toggle="dropdown" class="dropdown-toggle" href="#" title=""> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  </a>');
                                                      }else{
                                                        $( "#mailbox" ).replaceWith('<li id="mailbox"> <a href="' + drupalSettings.path.baseUrl + page_url + 'mailbox">' + Drupal.t('See all messages') + '</a>  </li>');
                                                        $( '#envlpe' ).replaceWith('<a id="envlpe" class="dropdown-toggle" href="' + drupalSettings.path.baseUrl + page_url + 'mailbox" title=""> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  </a>');
                                                      }
                                                  }

                               });

                          }
                           
                               $('body').waitMe('hide');
                               return false; 
                          
                                                        
                        }

            });


    function run_waitMe(effect){
       $('body').waitMe({
        effect: effect,
        text: Drupal.t('Processing'),
        bg: 'rgba(245, 245, 245, 0.68)',
        color:'#000',
        sizeW:'',
        sizeH:''
    });
   }


    }
  };
})(jQuery, Drupal, drupalSettings);