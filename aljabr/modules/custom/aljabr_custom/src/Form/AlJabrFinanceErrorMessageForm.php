<?php

/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrFinanceErrorMessageForm.
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
class AlJabrFinanceErrorMessageForm extends ConfigFormBase {

  /**
   * The module manager service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * Constructs an AlJabrFinanceErrorMessageForm object.
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
    return ['aljabr_custom.error_message'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aljabr_finance_error_message';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('aljabr_custom.error_message');
	
	$form['name_mandatory']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Name Mandatory Message'),
      '#default_value' => $config->get('name_mandatory'),
      '#size' => 40,
      '#description' => $this->t('First name mandatory message'),
    );
	
    //residency card
    $form['residency_card_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Residency card Mandatory Message'),
      '#default_value' => $config->get('residency_card_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Residency card mandatory message'),
    );
	
	//date of issue
    $form['date_issue_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Date of Issue Mandatory Message'),
      '#default_value' => $config->get('date_issue_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Date of Issue Mandatory Message'),
    );
	
	//expiry date
    $form['expiry_date_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Expiry Date Mandatory Message'),
      '#default_value' => $config->get('expiry_date_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Expiry Date Mandatory Message'),
    );
	
	//mobile no
    $form['mobile_no_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Mobile no Mandatory Message'),
      '#default_value' => $config->get('mobile_no_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Mobile no Mandatory Message'),
    );
	
	
	//Annual Rent
    $form['annual_rent_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Annual Rent Mandatory Message'),
      '#default_value' => $config->get('annual_rent_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Annual Rent Mandatory Message'),
    );
	
	//Income / Salary
    $form['income_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Income Mandatory Message'),
      '#default_value' => $config->get('income_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Income Mandatory Message'),
    );
	
	//Net Income / Net Salary
    $form['netsalary_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Net salary Message'),
      '#default_value' => $config->get('netsalary_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Net salary Message'),
    );
	
	//Car Model
    $form['car_model_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Car model mandatory message'),
      '#default_value' => $config->get('car_model_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Car model mandatory message'),
    );
	
	//Brand
    $form['car_brand_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Car brand mandatory message'),
      '#default_value' => $config->get('car_brand_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Car brand mandatory message'),
    );

	//Price
    $form['car_price_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Car price mandatory message'),
      '#default_value' => $config->get('car_price_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Car price mandatory message'),
    );
	
	//Type
    $form['car_type_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Car type mandatory message'),
      '#default_value' => $config->get('car_type_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Car type mandatory message'),
    );
	
	//Value of Down Payment
    $form['downpayment_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Down payment mandatory message'),
      '#default_value' => $config->get('downpayment_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Down payment mandatory message'),
    );
	
	
	//Repayment Period
    $form['period_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Period mandatory message'),
      '#default_value' => $config->get('period_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Period mandatory message'),
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
	
	$config = \Drupal::service('config.factory')->getEditable('aljabr_custom.error_message');

	// Set and save new message value.
	$config->set('name_mandatory', $values['name_mandatory'])
		   ->set('residency_card_mandatory', $values['residency_card_mandatory'])
		   ->set('date_issue_mandatory', $values['date_issue_mandatory'])
		   ->set('expiry_date_mandatory', $values['expiry_date_mandatory'])
		   ->set('mobile_no_mandatory', $values['mobile_no_mandatory'])
		   ->set('annual_rent_mandatory', $values['annual_rent_mandatory'])
		   ->set('income_mandatory', $values['income_mandatory'])
		   ->set('netsalary_mandatory', $values['netsalary_mandatory'])
		   ->set('car_model_mandatory', $values['car_model_mandatory'])
		   ->set('car_brand_mandatory', $values['car_brand_mandatory'])
		   ->set('car_price_mandatory', $values['car_price_mandatory'])
		   ->set('car_type_mandatory', $values['car_type_mandatory'])
		   ->set('downpayment_mandatory', $values['downpayment_mandatory'])
		   ->set('period_mandatory', $values['period_mandatory'])
		   ->save();

    parent::submitForm($form, $form_state);
  }

}
