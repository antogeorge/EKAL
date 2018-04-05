<?php
/**
* @file
* contains \Drupal\aljabr_custom\Controller\FinanceFormController
*/
 namespace Drupal\aljabr_custom\Controller;

 use Drupal\Core\Controller\ControllerBase;

 use Symfony\Component\HttpFoundation\JsonResponse;
 use Drupal\Core\Url;
 use Drupal\node\Entity\Node;
 use Symfony\Component\HttpFoundation\RedirectResponse;
 use Drupal\aljabr_custom\Controller\CommonFunctionsController;

 class FinanceFormController extends ControllerBase {
 	
  /**
   * Page callback for /finance-submit
   */
  public function financeSubmit() {
    $response = new \stdClass();
    global $base_url;

    $page_language = \Drupal::languageManager()->getCurrentLanguage()->getId();
	
    if(!empty($_POST['pslt']) && !empty($_POST['time'])) {
	  
      $first_name= filter_var($_POST['first_name']);
      $residency_card= filter_var($_POST['residency_card']);
      $place_issue= filter_var($_POST['place_issue']);
      $date_issue= filter_var($_POST['date_issue']);
      $expiry_date= filter_var($_POST['expiry_date']);
      $gender= filter_var($_POST['gender']);
      $nationality= filter_var($_POST['nationality']);
      $mobile_no= filter_var($_POST['mobile_no']);
      $residence_no= filter_var($_POST['residence_no']);
      $marrital_status= filter_var($_POST['marriage']);
      $address= filter_var($_POST['address']);
      $pbno= filter_var($_POST['pbno']);
      $city= filter_var($_POST['city']);
      $postal_code= filter_var($_POST['postal_code']);
      $district= filter_var($_POST['district']);
      $street= filter_var($_POST['street']);
	  $building_no= filter_var($_POST['building_no']);
	  $accomodation_type= filter_var($_POST['accomodation_type']);
	  $annual_rent= filter_var($_POST['annual_rent']);
	  $employer= filter_var($_POST['employer']);
	  $job_title= filter_var($_POST['job_title']);
	  $doj= filter_var($_POST['doj']);
	  $office_address= filter_var($_POST['office_address']);
	  $post_box= filter_var($_POST['post_box']);
	  $income= filter_var($_POST['income']);
	  $net_salary= filter_var($_POST['net_salary']);
	  $additional_income= filter_var($_POST['additional_income']);
	  $car_model= filter_var($_POST['car_model']);
	  $car_brand= filter_var($_POST['car_brand']);
	  $car_price= filter_var($_POST['car_price']);
	  $car_type= filter_var($_POST['car_type']);
	  $down_payment= filter_var($_POST['down_payment']);
	  $period= filter_var($_POST['period']);
	  $max_value_monthly= filter_var($_POST['max_value_monthly']);
	  $max_value_lastpayment= filter_var($_POST['max_value_lastpayment']);

      $time = filter_var($_POST['time']);
      $pslt = filter_var($_POST['pslt']);

      $pgkey = CommonFunctionsController::generateKey($first_name.$residency_card.$place_issue.$date_issue.$expiry_date.$gender.$nationality.$mobile_no.$residence_no.$marrital_status.$address.$pbno.$city.$postal_code.$district.$street.$building_no.$accomodation_type.$annual_rent.$employer.$job_title.$doj.$office_address.$post_box.$income.$net_salary.$additional_income.$car_model.$car_brand.$car_price.$car_type.$down_payment.$period.$max_value_monthly.$max_value_lastpayment.$time);

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
 *save values to entity  - finance
 */
  public static function sendValues($fieldpostvalues) {
	  
	$content_type = 'finance';
	
	# post values
	
      $first_name= filter_var($fieldpostvalues['first_name']);
      $residency_card= filter_var($fieldpostvalues['residency_card']);
      $place_issue= filter_var($fieldpostvalues['place_issue']);
      $date_issue= filter_var($fieldpostvalues['date_issue']);
      $expiry_date= filter_var($fieldpostvalues['expiry_date']);
	  $gender= filter_var($_POST['gender']);
      $nationality= filter_var($fieldpostvalues['nationality']);
      $mobile_no= filter_var($fieldpostvalues['mobile_no']);
      $residence_no= filter_var($fieldpostvalues['residence_no']);
	  $marrital_status= filter_var($_POST['marriage']);
      $address= filter_var($fieldpostvalues['address']);
      $pbno= filter_var($fieldpostvalues['pbno']);
      $city= filter_var($fieldpostvalues['city']);
      $postal_code= filter_var($fieldpostvalues['postal_code']);
      $district= filter_var($fieldpostvalues['district']);
      $street= filter_var($fieldpostvalues['street']);
	  $building_no= filter_var($fieldpostvalues['building_no']);
	  $accomodation_type= filter_var($fieldpostvalues['accomodation_type']);
	  $annual_rent= filter_var($fieldpostvalues['annual_rent']);
	  $employer= filter_var($fieldpostvalues['employer']);
	  $job_title= filter_var($fieldpostvalues['job_title']);
	  $doj= filter_var($fieldpostvalues['doj']);
	  $office_address= filter_var($fieldpostvalues['office_address']);
	  $post_box= filter_var($fieldpostvalues['post_box']);
	  $income= filter_var($fieldpostvalues['income']);
	  $net_salary= filter_var($fieldpostvalues['net_salary']);
	  $additional_income= filter_var($fieldpostvalues['additional_income']);
	  $car_model= filter_var($fieldpostvalues['car_model']);
	  $car_brand= filter_var($fieldpostvalues['car_brand']);
	  $car_price= filter_var($fieldpostvalues['car_price']);
	  $car_type= filter_var($fieldpostvalues['car_type']);
	  $down_payment= filter_var($fieldpostvalues['down_payment']);
	  $period= filter_var($fieldpostvalues['period']);
	  $max_value_monthly= filter_var($fieldpostvalues['max_value_monthly']);
	  $max_value_lastpayment= filter_var($fieldpostvalues['max_value_lastpayment']);

      $time = filter_var($fieldpostvalues['time']);
      $pslt = filter_var($fieldpostvalues['pslt']);
	  
		  
	$node = Node::create(
      array(
        'type' => $content_type,
        'title' => $first_name,
        'field_first_name' => [
          'value' => $first_name,
        ],
        'field_residency_card' => [
          'value' => $residency_card,
        ],
        'field_place_issue' => [
          'value' => $place_issue,
        ],
        'field_date_issue' => [
          'value' => $date_issue,
        ],
        'field_expiry_date' => [
          'value' => $expiry_date,
        ],
        'field_gender' => [
          'value' => $gender,
        ],
        'field_nationality' => [
          'value' => $nationality,
        ],
        'field_mobile_no' => [
          'value' => $mobile_no,
        ],
        'field_residence_no' => [
          'value' => $residence_no,
        ],
        'field_marital_status' => [
          'value' => $marrital_status,
        ],
        'field_address' => [
          'value' => $address,
        ],
        'field_pbno' => [
          'value' => $pbno,
        ],
        'field_city' => [
          'value' => $city,
        ],
		'field_postal_code' => [
          'value' => $postal_code,
        ],
		'field_district' => [
          'value' => $district,
        ],
		'field_street' => [
          'value' => $street,
        ],
		'field_building_no' => [
          'value' => $building_no,
        ],
		'field_accomodation_type' => [
          'value' => $accomodation_type,
        ],
		'field_annual_rent' => [
          'value' => $annual_rent,
        ],
		'field_employer' => [
          'value' => $employer,
        ],
		'field_job_title' => [
          'value' => $job_title,
        ],
		'field_doj' => [
          'value' => $doj,
        ],
		'field_office_address' => [
          'value' => $office_address,
        ],
		'field_post_box' => [
          'value' => $post_box,
        ],
		'field_income' => [
          'value' => $income,
        ],
		'field_net_salary' => [
          'value' => $net_salary,
        ],
		'field_additional_income' => [
          'value' => $additional_income,
        ],
		'field_car_model' => [
          'value' => $car_model,
        ],
		'field_car_brand' => [
          'value' => $car_brand,
        ],
        'field_car_price' => [
          'value' => $car_price,
        ],
		'field_car_type' => [
          'value' => $car_type,
        ],
		'field_down_payment' => [
          'value' => $down_payment,
        ],
		'field_period' => [
          'value' => $period,
        ],
		'field_max_value_monthly' => [
          'value' => $max_value_monthly,
        ],
		'field_max_value_lastpayment' => [
          'value' => $max_value_lastpayment,
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
		  $residency_card= filter_var($fieldpostvalues['residency_card']);
		  $place_issue= filter_var($fieldpostvalues['place_issue']);
		  $date_issue= filter_var($fieldpostvalues['date_issue']);
		  $expiry_date= filter_var($fieldpostvalues['expiry_date']);
		  $gender= filter_var($_POST['gender']);
		  $nationality= filter_var($fieldpostvalues['nationality']);
		  $mobile_no= filter_var($fieldpostvalues['mobile_no']);
		  $residence_no= filter_var($fieldpostvalues['residence_no']);
		  $marrital_status= filter_var($_POST['marriage']);
		  $address= filter_var($fieldpostvalues['address']);
		  $pbno= filter_var($fieldpostvalues['pbno']);
		  $city= filter_var($fieldpostvalues['city']);
		  $postal_code= filter_var($fieldpostvalues['postal_code']);
		  $district= filter_var($fieldpostvalues['district']);
		  $street= filter_var($fieldpostvalues['street']);
		  $building_no= filter_var($fieldpostvalues['building_no']);
		  $accomodation_type= filter_var($fieldpostvalues['accomodation_type']);
		  $annual_rent= filter_var($fieldpostvalues['annual_rent']);
		  $employer= filter_var($fieldpostvalues['employer']);
		  $job_title= filter_var($fieldpostvalues['job_title']);
		  $doj= filter_var($fieldpostvalues['doj']);
		  $office_address= filter_var($fieldpostvalues['office_address']);
		  $post_box= filter_var($fieldpostvalues['post_box']);
		  $income= filter_var($fieldpostvalues['income']);
		  $net_salary= filter_var($fieldpostvalues['net_salary']);
		  $additional_income= filter_var($fieldpostvalues['additional_income']);
		  $car_model= filter_var($fieldpostvalues['car_model']);
		  $car_brand= filter_var($fieldpostvalues['car_brand']);
		  $car_price= filter_var($fieldpostvalues['car_price']);
		  $car_type= filter_var($fieldpostvalues['car_type']);
		  $down_payment= filter_var($fieldpostvalues['down_payment']);
		  $period= filter_var($fieldpostvalues['period']);
		  $max_value_monthly= filter_var($fieldpostvalues['max_value_monthly']);
		  $max_value_lastpayment= filter_var($fieldpostvalues['max_value_lastpayment']);
	  
	  $modulepath = drupal_get_path('module', 'aljabr_custom');
	  
	  $subject=\Drupal::config('aljabr_custom.email_settings')->get('finance_form_subject');
      $home=\Drupal::config('aljabr_custom.email_settings')->get('home');
      $body = file_get_contents($modulepath . '/libraries/email-template/financeemail_template.html');
	  
	  
		  $body= str_replace('%first_name%', $first_name, $body);
		  $body= str_replace('%residency_card%', $residency_card, $body);
		  $body= str_replace('%place_issue%', $place_issue, $body);
		  $body= str_replace('%date_issue%', $date_issue, $body);
		  $body= str_replace('%expiry_date%', $expiry_date, $body);
		  $body= str_replace('%gender%', $gender, $body);
		  $body= str_replace('%nationality%', $nationality, $body);
		  $body= str_replace('%mobile_no%', $mobile_no, $body);
		  $body= str_replace('%residence_no%', $residence_no, $body);
		  $body= str_replace('%marriage%', $marriage, $body);
		  $body= str_replace('%address%', $address, $body);
		  $body= str_replace('%pbno%', $pbno, $body);
		  $body= str_replace('%city%', $city, $body);
		  $body= str_replace('%postal_code%', $postal_code, $body);
		  $body= str_replace('%district%', $district, $body);
		  $body= str_replace('%street%', $street, $body);
		  $body= str_replace('%building_no%', $building_no, $body);
		  $body= str_replace('%accomodation_type%', $accomodation_type, $body);
		  $body= str_replace('%annual_rent%', $annual_rent, $body);
		  $body= str_replace('%employer%', $employer, $body);
		  $body= str_replace('%job_title%', $job_title, $body);
		  $body= str_replace('%doj%', $doj, $body);
		  $body= str_replace('%office_address%', $office_address, $body);
		  $body= str_replace('%post_box%', $post_box, $body);
		  $body= str_replace('%income%', $income, $body);
		  $body= str_replace('%net_salary%', $net_salary, $body);
		  $body= str_replace('%additional_income%', $additional_income, $body);
		  $body= str_replace('%car_model%', $car_model, $body);
		  $body= str_replace('%car_brand%', $car_brand, $body);
		  $body= str_replace('%car_price%', $car_price, $body);
		  $body= str_replace('%car_type%', $car_type, $body);
		  $body= str_replace('%down_payment%', $down_payment, $body);
		  $body= str_replace('%period%', $period, $body);
		  $body= str_replace('%max_value_monthly%', $max_value_monthly, $body);
		  $body= str_replace('%max_value_lastpayment%', $max_value_lastpayment, $body);
		  
		  
	  
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
		//config to_email on upcoming versions
		//$mail->AddAddress(\Drupal::config('aljabr_custom.email_settings')->get('toemail'));
		$mail->AddAddress('sales@ajfc.com.sa');
		 if(!$mail->Send()) {
			return false;
		 } else {
			return true;
		 }
 
	  
  }
 }