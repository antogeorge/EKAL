<?php

/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrFinanceForm.
 */

namespace Drupal\aljabr_custom\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

use Drupal\Core\Render\Element;

/**
 * Implements finance form.
 */
class AlJabrFinanceForm extends FormBase {
 
  
 /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aljabr_finance';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
  

    $page_language = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $theme = \Drupal::theme()->getActiveTheme()->getName();
    $path = drupal_get_path('theme', $theme);
	
	$error_message = [];
	$error_message_config = \Drupal::config('aljabr_custom.error_message');
	//error message
	$error_message['name_mandatory'] = $error_message_config->get('name_mandatory');
	$error_message['residency_card_mandatory'] = $error_message_config->get('residency_card_mandatory');
	$error_message['date_issue_mandatory'] = $error_message_config->get('date_issue_mandatory');
	$error_message['expiry_date_mandatory'] = $error_message_config->get('expiry_date_mandatory');
	$error_message['mobile_no_mandatory'] = $error_message_config->get('mobile_no_mandatory');
	$error_message['annual_rent_mandatory'] = $error_message_config->get('annual_rent_mandatory');
	$error_message['income_mandatory'] = $error_message_config->get('income_mandatory');
	$error_message['netsalary_mandatory'] = $error_message_config->get('netsalary_mandatory');
	$error_message['car_model_mandatory'] = $error_message_config->get('car_model_mandatory');
	$error_message['car_brand_mandatory'] = $error_message_config->get('car_brand_mandatory');
	$error_message['car_price_mandatory'] = $error_message_config->get('car_price_mandatory');
	$error_message['car_type_mandatory'] = $error_message_config->get('car_type_mandatory');
	$error_message['downpayment_mandatory'] = $error_message_config->get('downpayment_mandatory');
	$error_message['period_mandatory'] = $error_message_config->get('period_mandatory');
	
    //name 
    $form['first_name'] = array(
      '#type' => 'textfield',
      '#id' => 'first_name',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('first_name'),
      '#prefix' => '<div class="row"><div class="col-md-2"></div><div class="col-md-4 col-sm-12 col-xs-12"><div class="finance-form" id="firstdiv"><h1>' . \Drupal::config('aljabr_custom.settings')->get('personal_details') . '</h1>',
	  '#suffix' => '<div id="first_name_mand_errors"></div>',
    );

    //residency card
    $form['residency_card'] = array(
      '#type' => 'textfield',
      '#id' => 'residency_card',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('residency_card'),
	  '#suffix' => '<div id="residency_card_mand_errors"></div>',
    );

	//place of issue
    $form['place_issue'] = array(
      '#type' => 'textfield',
      '#id' => 'place_issue',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('place_issue'),
    );

	//date of issue
    $form['date_issue'] = array(
      '#type' => 'textfield',
      '#id' => 'date_issue',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('date_issue'),
	  '#suffix' => '<div id="date_issue_mand_errors"></div>',
    );
	
	//expiry date
    $form['expiry_date'] = array(
      '#type' => 'textfield',
      '#id' => 'expiry_date',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('expiry_date'),
	  '#suffix' => '<div id="expiry_date_mand_errors"></div>',
    );
	
	//sex label
    $form['sex_label'] = array(
      '#type' => 'label',
      '#title' => \Drupal::config('aljabr_custom.settings')->get('sex_label'),
      '#id' => 'sex_label',
      '#prefix' => '<div class="row"><div class="col-md-6 col-xs-12">',
	  '#suffix' => '</div>',
    );
	
    $form['male'] = array(
      '#type' => 'radio',
      '#id' => 'male',
      '#options' => array('male' => t('Male')),
      '#prefix' => '<div class="col-md-6 col-xs-12"><div class="custom-controls-stacked"><label class="custom-control custom-radio">',
      '#suffix' => '<span class="custom-control-indicator"></span><span class="custom-control-description">' . \Drupal::config('aljabr_custom.settings')->get('male') . '</span></label>',
      '#attributes' => array(
        'class' => array(
            'custom-control-input'
         )
        ),
    );
	
    $form['female'] = array(
      '#type' => 'radio',
      '#id' => 'female',
      '#options' => array('female' => t('Female')),
      '#prefix' => '<label class="custom-control custom-radio">',
      '#suffix' => '<span class="custom-control-indicator"></span><span class="custom-control-description">' . \Drupal::config('aljabr_custom.settings')->get('female') . '</span></label></div></div></div>',
      '#attributes' => array(
        'class' => array(
            'custom-control-input'
         )
        ),
    );
	
	 $form['gender'] = array(
      '#type' => 'hidden',
      '#id' => 'gender',
	  '#value' => '',
    );
	
	//nationality
    $form['nationality'] = array(
      '#type' => 'textfield',
      '#id' => 'nationality',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('nationality'),
    );
	
	//mobile no
    $form['mobile_no'] = array(
      '#type' => 'textfield',
      '#id' => 'mobile_no',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('mobile_no'),
	  '#suffix' => '<div id="mobile_no_mand_errors"></div>',
    );
	
	//Residence Tel. No.
    $form['residence_no'] = array(
      '#type' => 'textfield',
      '#id' => 'residence_no',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('residence_no'),
    );
	
	//Marital Status
    $form['marital_status'] = array(
      '#type' => 'label',
      '#title' => \Drupal::config('aljabr_custom.settings')->get('marital_status'),
      '#id' => 'marital_status',
      '#prefix' => '<div class="row"><div class="col-md-6 col-xs-12">',
	  '#suffix' => '</div>',
    );
	
	
    $form['single'] = array(
      '#type' => 'radio',
      '#id' => 'single',
      '#options' => array('single' => t('Single')),
      '#prefix' => '<div class="col-md-6 col-xs-12"><div class="custom-controls-stacked"><label class="custom-control custom-radio">',
      '#suffix' => '<span class="custom-control-indicator"></span><span class="custom-control-description">' . \Drupal::config('aljabr_custom.settings')->get('single') . '</span></label>',
      '#attributes' => array(
        'class' => array(
            'custom-control-input'
         )
        ),
    );
	
    $form['married'] = array(
      '#type' => 'radio',
      '#id' => 'married',
      '#options' => array('married' => t('Married')),
      '#prefix' => '<label class="custom-control custom-radio">',
      '#suffix' => '<span class="custom-control-indicator"></span><span class="custom-control-description">' . \Drupal::config('aljabr_custom.settings')->get('married') . '</span></label></div></div></div></div></div>',
      '#attributes' => array(
        'class' => array(
            'custom-control-input'
         )
        ),
    );
	
	 $form['marriage'] = array(
      '#type' => 'hidden',
      '#id' => 'marriage',
	  '#value' => '',
    );
	
	//address
    $form['address'] = array(
      '#type' => 'textfield',
      '#id' => 'address',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('address'),
	  '#prefix' => '<div class="col-md-4 col-sm-12 col-xs-12"><div class="finance-form" id="seconddiv"><h1>' . \Drupal::config('aljabr_custom.settings')->get('residence_details') . '</h1>',
    );
	
	//P.B. No.
    $form['pbno'] = array(
      '#type' => 'textfield',
      '#id' => 'pbno',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('pbno'),
    );
	
	//City
    $form['city'] = array(
      '#type' => 'textfield',
      '#id' => 'city',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('city'),
    );
	
	//Postal Code
    $form['postal_code'] = array(
      '#type' => 'textfield',
      '#id' => 'postal_code',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('postal_code'),
    );
	
	//District
    $form['district'] = array(
      '#type' => 'textfield',
      '#id' => 'district',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('district'),
    );
	
	//Street
    $form['street'] = array(
      '#type' => 'textfield',
      '#id' => 'street',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('street'),
    );
	
	//Building No.
    $form['building_no'] = array(
      '#type' => 'textfield',
      '#id' => 'building_no',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('building_no'),
    );
	
	//Accommodation Type
    $form['accomodation_type'] = array(
      '#type' => 'textfield',
      '#id' => 'accomodation_type',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('accomodation_type'),
    );
	
	//Annual Rent
    $form['annual_rent'] = array(
      '#type' => 'textfield',
      '#id' => 'annual_rent',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('annual_rent'),
	  '#suffix' => '<div id="annual_rent_mand_errors"></div></div></div><div class="col-md-2"></div></div>',
    );
	
	//Employer
    $form['employer'] = array(
      '#type' => 'textfield',
      '#id' => 'employer',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('employer'),
	  '#prefix' => '<div class="row"><div class="col-md-2"></div><div class="col-md-4"><div class="finance-form" id="thirddiv"><h1>' . \Drupal::config('aljabr_custom.settings')->get('job_details') . '</h1>',
    );

	//Job Title
    $form['job_title'] = array(
      '#type' => 'textfield',
      '#id' => 'job_title',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('job_title'),
    );

	//Date of Joining
    $form['doj'] = array(
      '#type' => 'textfield',
      '#id' => 'doj',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('doj'),
    );
	
	//Office Address
    $form['office_address'] = array(
      '#type' => 'textfield',
      '#id' => 'office_address',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('office_address'),
    );
	
	//Post Box
    $form['post_box'] = array(
      '#type' => 'textfield',
      '#id' => 'post_box',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('post_box'),
    );
	
	//Income / Salary
    $form['income'] = array(
      '#type' => 'textfield',
      '#id' => 'income',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('income'),
	  '#suffix' => '<div id="income_mand_errors"></div>',
    );
	
	//Net Income / Net Salary
    $form['net_salary'] = array(
      '#type' => 'textfield',
      '#id' => 'net_salary',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('net_salary'),
	  '#suffix' => '<div id="net_salary_mand_errors"></div>',
    );
	
	//Value of Additional Income / Yearly Income
    $form['additional_income'] = array(
      '#type' => 'textfield',
      '#id' => 'additional_income',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('additional_income'),
	  '#suffix' => '</div></div>',
    );
	
	//Car Model
    $form['car_model'] = array(
      '#type' => 'textfield',
      '#id' => 'car_model',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('car_model'),
	  '#prefix' => '<div class="col-md-4"><div class="finance-form" id="fourthdiv"><h1>' . \Drupal::config('aljabr_custom.settings')->get('lease_details') . '</h1>',
	  '#suffix' => '<div id="car_model_mand_errors"></div>',
    );
	
	//Brand
    $form['car_brand'] = array(
      '#type' => 'textfield',
      '#id' => 'car_brand',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('car_brand'),
	  '#suffix' => '<div id="car_brand_mand_errors"></div>',
    );

	//Price
    $form['car_price'] = array(
      '#type' => 'textfield',
      '#id' => 'car_price',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('car_price'),
	  '#suffix' => '<div id="car_price_mand_errors"></div>',
    );
	
	//Type
    $form['car_type'] = array(
      '#type' => 'textfield',
      '#id' => 'car_type',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('car_type'),
	  '#suffix' => '<div id="car_type_mand_errors"></div>',
    );
	
	//Value of Down Payment
    $form['down_payment'] = array(
      '#type' => 'textfield',
      '#id' => 'down_payment',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('down_payment'),
	  '#suffix' => '<div id="down_payment_mand_errors"></div>',
    );
	
	
	//Repayment Period
    $form['period'] = array(
      '#type' => 'textfield',
      '#id' => 'period',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('period'),
	  '#suffix' => '<div id="period_mand_errors"></div>',
    );
	
	//Maximum Value of the monthly Premium
    $form['max_value_monthly'] = array(
      '#type' => 'textfield',
      '#id' => 'max_value_monthly',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('max_value_monthly'),
    );
	
	//Value of Last Payment
    $form['max_value_lastpayment'] = array(
      '#type' => 'textfield',
      '#id' => 'max_value_lastpayment',
      '#placeholder' => \Drupal::config('aljabr_custom.settings')->get('max_value_lastpayment'),
	  '#suffix' => '</div></div><div class="col-md-2"></div></div>',
    );
	
    $form['actions']['#type'] = 'actions';

    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => \Drupal::config('aljabr_custom.settings')->get('submit_val'),
      '#button_type' => 'primary',
      '#prefix' => '<div class="row"><div class="col-xs-12">',
      '#suffix' => '</div></div></div>',
      '#attributes' => array(
        'class' => array(
            'submit'
         )
        ),
    
    );
	
    /**
    * Attach js files
    **/
    //$form['#attached']['library'][] = 'aljabr/common-files';
    $form['#attached']['library'][] = 'aljabr_custom/finance';
    $form['#attached']['drupalSettings']['page_lang'] = $page_language;
	$form['#attached']['drupalSettings']['error_message'] = $error_message;
    
    /** You can even add the libraries of theme or other modules here. If a css or js is common across the website, add the library in template libraries and call in each module **/
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // if (strlen($form_state->getValue('phone_number')) < 3) {
    //   $form_state->setErrorByName('phone_number', $this->t('The phone number is too short. Please enter a full phone number.'));
    // }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // drupal_set_message($this->t('Your phone number is @number', array('@number' => $form_state->getValue('phone_number'))));
  }

}
