<?php
/**
* @file
* contains \Drupal\aljabr_custom\Controller\CareerFormController
*/
 namespace Drupal\aljabr_custom\Controller;

 use Drupal\Core\Controller\ControllerBase;

 use Symfony\Component\HttpFoundation\JsonResponse;
 use Drupal\Core\Url;
 use Drupal\node\Entity\Node;
 use Symfony\Component\HttpFoundation\RedirectResponse;
 use Drupal\aljabr_custom\Controller\CommonFunctionsController;

 class CareerFormController extends ControllerBase {
 	
  /**
   * Page callback for /career-submit
   */
  public function careerSubmit() {
    $response = new \stdClass();
    global $base_url;

    $page_language = \Drupal::languageManager()->getCurrentLanguage()->getId();
    if(!empty($_POST['pslt']) && !empty($_POST['time'])) {
	  
      $first_name= filter_var($_POST['first_name']);
      $email= filter_var($_POST['email']);
      $phone= filter_var($_POST['phone']);
      $place= filter_var($_POST['place']);
      $interest= filter_var($_POST['interest']);
      

      $time = filter_var($_POST['time']);
      $pslt = filter_var($_POST['pslt']);

      $pgkey = CommonFunctionsController::generateKey($first_name.$email.$phone.$place.$interest.$time);

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
 *save values to entity  - career
 */
  public static function sendValues($fieldpostvalues) {

	$content_type = 'career';
	
	# post values
	
      $first_name= filter_var($fieldpostvalues['first_name']);
      $email= filter_var($fieldpostvalues['email']);
      $phone= filter_var($fieldpostvalues['phone']);
      $place= filter_var($fieldpostvalues['place']);
      $interest= filter_var($fieldpostvalues['interest']);

      $time = filter_var($fieldpostvalues['time']);
      $pslt = filter_var($fieldpostvalues['pslt']);
	  
		  
	$node = Node::create(
      array(
        'type' => $content_type,
        'title' => $first_name,
        'field_first_name' => [
          'value' => $first_name,
        ],
        'field_email' => [
          'value' => $email,
        ],
        'field_mobile_no' => [
          'value' => $phone,
        ],
        'field_address' => [
          'value' => $place,
        ],
        'field_interest' => [
          'value' => $interest,
        ],
      )
    );

    if($node->save()) {
      //$node_id = Node::load($node->nid->value);
    $pictarget_id = $fieldpostvalues['resume']['fids'];
    $db = \Drupal::database();
    $file_managedfetch = $db -> select('file_managed','fm') -> fields('fm', array('uri')) -> condition('fid', $pictarget_id, '=') -> execute();
    $picfetch = $file_managedfetch -> fetchAssoc();
    $uri = $picfetch['uri'];
    // $image_name = end(split('/', $uri));
    // $year = date('Y');
    // $month = date('m');
    $url = file_create_url($uri);
	  $send_email = self::sendEmail($fieldpostvalues, $url);
	  if($send_email == true) {
		return true;  
	  } else {
		  return 'email_failed';
	  }
    } else {
      return false;
    }
	
	  
  }
  
  function sendEmail($fieldpostvalues, $url) {
	  
	  $first_name= filter_var($fieldpostvalues['first_name']);
      $email= filter_var($fieldpostvalues['email']);
      $phone= filter_var($fieldpostvalues['phone']);
      $place= filter_var($fieldpostvalues['place']);
      $interest= filter_var($fieldpostvalues['interest']);
	  
	  $modulepath = drupal_get_path('module', 'aljabr_custom');
	  
	  $subject=\Drupal::config('aljabr_custom.email_settings')->get('career_form_subject');
      $home=\Drupal::config('aljabr_custom.email_settings')->get('home');
      $body = file_get_contents($modulepath . '/libraries/email-template/careeremail_template.html');
	  
	  $body=str_replace('%first_name%', $first_name, $body);
	  $body=str_replace('%email%', $email, $body);
	  $body=str_replace('%phone%', $phone, $body);
	  $body=str_replace('%place%', $place, $body);
	  $body=str_replace('%interest%', $interest, $body);
	  
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
    
    $file_name = explode('cv/', $url);

    if(!empty($file_name[1])) {
      $mail->AddAttachment($_SERVER['DOCUMENT_ROOT'] . '/sites/default/files/cv/' . urldecode($file_name[1]));         // add attachments
    }
    
		$mail->Subject = '=?UTF-8?B?'.base64_encode($subject).'?=';
		$mail->Body = $body;
		$mail->AddAddress(\Drupal::config('aljabr_custom.email_settings')->get('toemail'));

		 if(!$mail->Send()) {
			return false;
		 } else {
			return true;
		 }
 
	  
  }
  
 }