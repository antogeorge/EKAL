<?php
/**
* @file
* contains \Drupal\aljabr_custom\Controller\CommentsFormController
*/
 namespace Drupal\aljabr_custom\Controller;

 use Drupal\Core\Controller\ControllerBase;

 use Symfony\Component\HttpFoundation\JsonResponse;
 use Drupal\Core\Url;
 use Drupal\node\Entity\Node;
 use Symfony\Component\HttpFoundation\RedirectResponse;
 use Drupal\aljabr_custom\Controller\CommonFunctionsController;

 class CommentsFormController extends ControllerBase {
 	
  /**
   * Page callback for /career-submit
   */
  public function commentSubmit() {
    $response = new \stdClass();
    global $base_url;

    $page_language = \Drupal::languageManager()->getCurrentLanguage()->getId();
	
    if(!empty($_POST['pslt']) && !empty($_POST['time'])) {
	  
      $first_name= filter_var($_POST['first_name']);
      $phone= filter_var($_POST['phone']);
      $place= filter_var($_POST['place']);
      $comments= filter_var($_POST['comments']);
      

      $time = filter_var($_POST['time']);
      $pslt = filter_var($_POST['pslt']);

      $pgkey = CommonFunctionsController::generateKey($first_name.$phone.$place.$comments.$time);

      if(!CommonFunctionsController::validateKey($pslt, $pgkey)){
        $response->status = 'invalid';
        $response->message = \Drupal::config('aljabr_custom.ajax_message')->get('invalid_message');
        return new JsonResponse($response);
      }

        $sendValues = self::sendValues($_POST);

        if($sendValues == true) {
          $response->message = \Drupal::config('aljabr_custom.ajax_message')->get('success_message');
          $response->status = TRUE;
        } else if($sendValues == false) {
          $response->message = \Drupal::config('aljabr_custom.ajax_message')->get('failure_message');
          $response->status = FALSE;
        } else {
		  $response->message = \Drupal::config('aljabr_custom.ajax_message')->get('failure_message');
          $response->status = FALSE;
		}
        return new JsonResponse($response);


    } else {
      $response->message = \Drupal::config('aljabr_custom.ajax_message')->get('invalid_message');
      $response->status = 'invalid';
      return new JsonResponse($response);
    }
	
 }
 
 /**
 *save values to entity  - comments
 */
  public static function sendValues($fieldpostvalues) {
	  
	$content_type = 'comments';
	
	# post values
	
      $first_name= filter_var($fieldpostvalues['first_name']);
      $phone= filter_var($fieldpostvalues['phone']);
      $place= filter_var($fieldpostvalues['place']);
      $comments= filter_var($fieldpostvalues['comments']);

      $time = filter_var($fieldpostvalues['time']);
      $pslt = filter_var($fieldpostvalues['pslt']);
	  
		  
	$node = Node::create(
      array(
        'type' => $content_type,
        'title' => $first_name,
        'field_first_name' => [
          'value' => $first_name,
        ],
        'field_mobile_no' => [
          'value' => $phone,
        ],
        'field_address' => [
          'value' => $place,
        ],
        'field_comments' => [
          'value' => $comments,
        ],
      )
    );

    if($node->save()) {
      //$node_id = Node::load($node->nid->value);
	  
	  $send_email = self::sendEmail($fieldpostvalues);
	  if($send_email == true) {
		return true;  
	  } else {
		  return 'email_failed';
	  }
    } else {
      return false;
    }
	
	  
  }
  
    
  function sendEmail($fieldpostvalues) {
	  
      $first_name= filter_var($fieldpostvalues['first_name']);
      $phone= filter_var($fieldpostvalues['phone']);
      $place= filter_var($fieldpostvalues['place']);
      $comments= filter_var($fieldpostvalues['comments']);
	  
	  $modulepath = drupal_get_path('module', 'aljabr_custom');
	  
	  $subject=\Drupal::config('aljabr_custom.email_settings')->get('comments_form_subject');
      $home=\Drupal::config('aljabr_custom.email_settings')->get('home');
      $body = file_get_contents($modulepath . '/libraries/email-template/commentsemail_template.html');
	  
	  $body=str_replace('%first_name%', $first_name, $body);
	  $body=str_replace('%phone%', $phone, $body);
	  $body=str_replace('%place%', $place, $body);
	  $body=str_replace('%comments%', $comments, $body);
	  
	  $mail = new \PHPMailer();
	  $mail->CharSet = 'UTF-8';
		$mail->IsSMTP(); // enable SMTP
		//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = \Drupal::config('aljabr_custom.email_settings')->get('smtp_secure'); // secure transfer enabled REQUIRED for Gmail
		$mail->Host = \Drupal::config('aljabr_custom.email_settings')->get('host');
		$mail->Port = \Drupal::config('aljabr_custom.email_settings')->get('port'); // or 587
		$mail->IsHTML(true);
		$mail->Username = \Drupal::config('aljabr_custom.email_settings')->get('username');
		$mail->Password = \Drupal::config('aljabr_custom.email_settings')->get('pass');
		$mail->SetFrom(\Drupal::config('aljabr_custom.email_settings')->get('fromemail'));
		$mail->WordWrap = 50;
		$mail->Subject = '=?UTF-8?B?'.base64_encode($subject).'?=';
		$mail->Body = $body;
		//config to address on upcoming version
		//$mail->AddAddress(\Drupal::config('aljabr_custom.email_settings')->get('toemail'));
        $mail->AddAddress('Care@ajfc.com.sa');
		 if(!$mail->Send()) {
			return false;
		 } else {
			return true;
		 }
 
	  
  }
  
 }