<?php

/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrFinanceSettingsForm.
 */

namespace Drupal\aljabr_custom\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Drupal\Core\Render\Element;

/**
 * Provides settings for aljabr_custom module.
 */
class AlJabrFinanceSettingsForm extends ConfigFormBase {

  /**
   * The module manager service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * Constructs an AlJabrSettingsForm object.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module manager service.
   */
  public function __construct(ConfigFactoryInterface $config_factory, ModuleHandlerInterface $module_handler) {
    parent::__construct($config_factory);
    $this->moduleHandler = $module_handler;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('module_handler')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getEditableConfigNames() {
    return ['aljabr_custom.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aljabr_finance_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('aljabr_custom.settings');
	
	$form['first_name']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#default_value' => $config->get('first_name'),
      '#size' => 40,
      '#description' => $this->t('First name'),
    );
	
	$form['personal_details']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Personal Details'),
      '#default_value' => $config->get('personal_details'),
      '#size' => 40,
      '#description' => $this->t('Personal Details'),
    );
	
 //residency card
    $form['residency_card'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('ID/Residency card'),
      '#default_value' => $config->get('residency_card'),
      '#size' => 40,
      '#description' => $this->t('ID/Residency card'),
    );

	//place of issue
    $form['place_issue'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Place of Issue'),
      '#default_value' => $config->get('place_issue'),
      '#size' => 40,
      '#description' => $this->t('Place of Issue'),
    );

	//date of issue
    $form['date_issue'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Date of Issue'),
      '#default_value' => $config->get('date_issue'),
      '#size' => 40,
      '#description' => $this->t('Date of Issue'),
    );
	
	//expiry date
    $form['expiry_date'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Expiry Date'),
      '#default_value' => $config->get('expiry_date'),
      '#size' => 40,
      '#description' => $this->t('Expiry Date'),
    );
	
	//sex label
    $form['sex_label'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Sex Label'),
      '#default_value' => $config->get('sex_label'),
      '#size' => 40,
      '#description' => $this->t('Sex Label'),
    );
	
	//male
    $form['male'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Male'),
      '#default_value' => $config->get('male'),
      '#size' => 40,
      '#description' => $this->t('Male'),
    );
	
	//female
    $form['female'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Female'),
      '#default_value' => $config->get('female'),
      '#size' => 40,
      '#description' => $this->t('Female'),
    );
	
	
	//nationality
    $form['nationality'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Nationality'),
      '#default_value' => $config->get('nationality'),
      '#size' => 40,
      '#description' => $this->t('Nationality'),
    );
	
	//mobile no
    $form['mobile_no'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Mobile No'),
      '#default_value' => $config->get('mobile_no'),
      '#size' => 40,
      '#description' => t('Mobile No'),
    );
	
	//Residence Tel. No.
    $form['residence_no'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Residence Tel. No.'),
      '#default_value' => $config->get('residence_no'),
      '#size' => 40,
      '#description' => t('Residence Tel. No.'),
    );
	
	//Marital Status
    $form['marital_status'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Marital Status'),
      '#default_value' => $config->get('marital_status'),
      '#size' => 40,
	  '#description' => t('Marital Status'),
    );
	
	
	//married
    $form['married'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Married'),
      '#default_value' => $config->get('married'),
      '#size' => 40,
      '#description' => $this->t('Married'),
    );
	
	//Single
    $form['single'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Single'),
      '#default_value' => $config->get('single'),
      '#size' => 40,
      '#description' => $this->t('Single'),
    );
	
	
	//address
    $form['address'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Address'),
      '#default_value' => $config->get('address'),
      '#size' => 40,
      '#description' => $this->t('Address'),
    );
	
	//Residence Details
    $form['residence_details'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Residence Details'),
      '#default_value' => $config->get('residence_details'),
      '#size' => 40,
      '#description' => $this->t('Residence Details'),
    );
	
	
	//P.B. No.
    $form['pbno'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('P.B. No.'),
      '#default_value' => $config->get('pbno'),
      '#size' => 40,
      '#description' => t('P.B. No.'),
    );
	
	//City
    $form['city'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('City'),
      '#default_value' => $config->get('city'),
      '#size' => 40,
      '#description' => t('City'),
    );
	
	//Postal Code
    $form['postal_code'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Postal Code'),
      '#default_value' => $config->get('postal_code'),
      '#size' => 40,
      '#description' => t('Postal Code'),
    );
	
	//District
    $form['district'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('District'),
      '#default_value' => $config->get('district'),
      '#size' => 40,
      '#description' => t('District'),
    );
	
	//Street
    $form['street'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Street'),
      '#default_value' => $config->get('street'),
      '#size' => 40,
      '#description' => t('Street'),
    );
	
	//Building No.
    $form['building_no'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Building No.'),
      '#default_value' => $config->get('building_no'),
      '#size' => 40,
      '#description' => t('Building No.'),
    );
	
	//Accommodation Type
    $form['accomodation_type'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Accommodation Type'),
      '#default_value' => $config->get('accomodation_type'),
      '#size' => 40,
      '#description' => t('Accommodation Type'),
    );
	
	//Annual Rent
    $form['annual_rent'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Annual Rent'),
      '#default_value' => $config->get('annual_rent'),
      '#size' => 40,
      '#description' => t('Annual Rent'),
    );
	
	//Employer
    $form['employer'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Job Details'),
      '#default_value' => $config->get('employer'),
      '#size' => 40,
      '#description' => t('Job Details'),
    );

	//Job Title
    $form['job_title'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Job Title'),
      '#default_value' => $config->get('job_title'),
      '#size' => 40,
      '#description' => t('Job Title'),
    );

	$form['job_details'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Job Details'),
      '#default_value' => $config->get('job_details'),
      '#size' => 40,
      '#description' => t('Job Details'),
    );
	
	//Date of Joining
    $form['doj'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Date of Joining'),
      '#default_value' => $config->get('doj'),
      '#size' => 40,
      '#description' => t('Date of Joining'),
    );
	
	//Office Address
    $form['office_address'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Office Address'),
      '#default_value' => $config->get('office_address'),
      '#size' => 40,
      '#description' => t('Office Address'),
    );
	
	//Post Box
    $form['post_box'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Post Box'),
      '#default_value' => $config->get('post_box'),
      '#size' => 40,
      '#description' => t('Post Box'),
    );
	
	//Income / Salary
    $form['income'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Income / Salary'),
      '#default_value' => $config->get('income'),
      '#size' => 40,
      '#description' => t('Income / Salary'),
    );
	
	//Net Income / Net Salary
    $form['net_salary'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Net Income / Net Salary'),
      '#default_value' => $config->get('net_salary'),
      '#size' => 40,
      '#description' => t('Net Income / Net Salary'),
    );
	
	//Value of Additional Income / Yearly Income
    $form['additional_income'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Value of Additional Income / Yearly Income'),
      '#default_value' => $config->get('additional_income'),
      '#size' => 40,
      '#description' => t('Value of Additional Income / Yearly Income'),
    );
	
	//Car Model
    $form['car_model'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Car Model'),
      '#default_value' => $config->get('car_model'),
      '#size' => 40,
      '#description' => t('Car Model'),
    );
	
	//Lease Details
    $form['lease_details'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Lease Details'),
      '#default_value' => $config->get('lease_details'),
      '#size' => 40,
      '#description' => t('Lease Details'),
    );
	
	//Brand
    $form['car_brand'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Brand'),
      '#default_value' => $config->get('car_brand'),
      '#size' => 40,
      '#description' => t('Brand'),
    );

	//Price
    $form['car_price'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Price'),
      '#default_value' => $config->get('car_price'),
      '#size' => 40,
      '#description' => t('Price'),
    );
	
	//Type
    $form['car_type'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Type'),
      '#default_value' => $config->get('car_type'),
      '#size' => 40,
      '#description' => t('Type'),
    );
	
	//Value of Down Payment
    $form['down_payment'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Value of Down Payment'),
      '#default_value' => $config->get('down_payment'),
      '#size' => 40,
      '#description' => t('Value of Down Payment'),
    );
	
	
	//Repayment Period
    $form['period'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Repayment Period'),
      '#default_value' => $config->get('period'),
      '#size' => 40,
      '#description' => t('Repayment Period'),
    );
	
	//Maximum Value of the monthly Premium
    $form['max_value_monthly'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Maximum Value of the monthly Premium'),
      '#default_value' => $config->get('max_value_monthly'),
      '#size' => 40,
      '#description' => t('Maximum Value of the monthly Premium'),
    );
	
	//Value of Last Payment
    $form['max_value_lastpayment'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Value of Last Payment'),
      '#default_value' => $config->get('max_value_lastpayment'),
      '#size' => 40,
      '#description' => t('Value of Last Payment'),
    );
	
    $form['submit_val'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Submit Value'),
      '#default_value' => $config->get('submit_val'),
      '#size' => 40,
      '#description' => t('Submit Value'),
    );
	
	
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $new_stack = [];

      //$form_state->setErrorByName('timeout', $this->t('The timeout value must be an integer 60 seconds or greater.'));


    // Validate redirect url.
    /*if (strpos($redirect_url, '/') !== 0) {
      $form_state->setErrorByName('redirect_url', $this->t("The user-entered string :redirect_url must begin with a '/'", array(':redirect_url' => $redirect_url)));
    }*/

    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
	
	$config = \Drupal::service('config.factory')->getEditable('aljabr_custom.settings');

	// Set and save new message value.
	$config->set('first_name', $values['first_name'])
		   ->set('personal_details', $values['personal_details'])
		   ->set('residency_card', $values['residency_card'])
		   ->set('place_issue', $values['place_issue'])
		   ->set('date_issue', $values['date_issue'])
		   ->set('expiry_date', $values['expiry_date'])
		   ->set('sex_label', $values['sex_label'])
		   ->set('male', $values['male'])
		   ->set('female', $values['female'])
		   ->set('nationality', $values['nationality'])
		   ->set('mobile_no', $values['mobile_no'])
		   ->set('residence_no', $values['residence_no'])
		   ->set('marital_status', $values['marital_status'])
		   ->set('married', $values['married'])
		   ->set('single', $values['single'])
		   ->set('address', $values['address'])
		   ->set('residence_details', $values['residence_details'])
		   ->set('pbno', $values['pbno'])
		   ->set('city', $values['city'])
		   ->set('postal_code', $values['postal_code'])
		   ->set('district', $values['district'])
		   ->set('street', $values['street'])
		   ->set('building_no', $values['building_no'])
		   ->set('accomodation_type', $values['accomodation_type'])
		   ->set('annual_rent', $values['annual_rent'])
		   ->set('employer', $values['employer'])
		   ->set('job_title', $values['job_title'])
		   ->set('job_details', $values['job_details'])
		   ->set('doj', $values['doj'])
		   ->set('office_address', $values['office_address'])
		   ->set('post_box', $values['post_box'])
		   ->set('income', $values['income'])
		   ->set('net_salary', $values['net_salary'])
		   ->set('additional_income', $values['additional_income'])
		   ->set('car_model', $values['car_model'])
		   ->set('lease_details', $values['lease_details'])
		   ->set('car_brand', $values['car_brand'])
		   ->set('car_price', $values['car_price'])
		   ->set('car_type', $values['car_type'])
		   ->set('down_payment', $values['down_payment'])
		   ->set('period', $values['period'])
		   ->set('max_value_monthly', $values['max_value_monthly'])
		   ->set('max_value_lastpayment', $values['max_value_lastpayment'])
		   ->set('submit_val', $values['submit_val'])
		   ->save();

    parent::submitForm($form, $form_state);
  }

}
