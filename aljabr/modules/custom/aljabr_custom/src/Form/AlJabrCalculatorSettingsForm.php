<?php

/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrCalculatorSettingsForm.
 */

namespace Drupal\aljabr_custom\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides settings for aljabr_custom module.
 */
class AlJabrCalculatorSettingsForm extends ConfigFormBase {

  /**
   * The module manager service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * Constructs an AlJabrCalculatorSettingsForm object.
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
    return ['aljabr_custom.calculator_settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aljabr_custom_calculator_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('aljabr_custom.calculator_settings');

	$form['period_funding']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Period of funding'),
      '#default_value' => $config->get('period_funding'),
      '#size' => 40,
      '#description' => $this->t('Period of Funding.'),
    );
	
	$form['finance_value']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Finance value'),
      '#default_value' => $config->get('finance_value'),
      '#size' => 40,
      '#description' => $this->t('Finance value'),
    );

	$form['car_price']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Car Price'),
      '#default_value' => $config->get('car_price'),
      '#size' => 40,
      '#description' => $this->t('Car Price'),
    );
	
	$form['car_price_val']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Car Price Value'),
      '#default_value' => $config->get('car_price_val'),
      '#size' => 40,
      '#description' => $this->t('Car Price Value'),
    );
	
	$form['insurance_value']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Insurance Amount'),
      '#default_value' => $config->get('insurance_value'),
      '#size' => 40,
      '#description' => $this->t('Insurance Amount'),
    );

	$form['emi']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Monthly Installment'),
      '#default_value' => $config->get('emi'),
      '#size' => 40,
      '#description' => $this->t('Monthly Installment'),
    );

	$form['downpayment']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Downpayment'),
      '#default_value' => $config->get('downpayment'),
      '#size' => 40,
      '#description' => $this->t('Downpayment'),
    );

	
	$form['downpayment_percent']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Downpayment Percent'),
      '#default_value' => $config->get('downpayment_percent'),
      '#size' => 40,
      '#description' => $this->t('Downpayment Percent'),
    );

	$form['downpayment_val']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Downpayment Val'),
      '#default_value' => $config->get('downpayment_val'),
      '#size' => 40,
      '#description' => $this->t('Downpayment Val'),
    );
	
	$form['intrest_rate_value']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Rental Margin'),
      '#default_value' => $config->get('intrest_rate_value'),
      '#size' => 40,
      '#description' => $this->t('Rental Margin'),
    );

	$form['lastpayment']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Last Payment'),
      '#default_value' => $config->get('lastpayment'),
      '#size' => 40,
      '#description' => $this->t('Last Payment'),
    );
	
	
	$form['lastpayment_percent']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Last Payment Percent'),
      '#default_value' => $config->get('lastpayment_percent'),
      '#size' => 40,
      '#description' => $this->t('Last Payment Percent'),
    );
	
	$form['lastpayment_val']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Last Payment Val'),
      '#default_value' => $config->get('lastpayment_val'),
      '#size' => 40,
      '#description' => $this->t('Last Payment Val'),
    );
	
	$form['total']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Total'),
      '#default_value' => $config->get('total'),
      '#size' => 40,
      '#description' => $this->t('Total'),
    );
	
	$form['duration']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Duration'),
      '#default_value' => $config->get('duration'),
      '#size' => 40,
      '#description' => $this->t('Duration'),
    );
	
	
	$form['net_price']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Net Price'),
      '#default_value' => $config->get('net_price'),
      '#size' => 40,
      '#description' => $this->t('Net Price'),
    );
	
	$form['insurance_ratio']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Insurance Ratio'),
      '#default_value' => $config->get('insurance_ratio'),
      '#size' => 40,
      '#description' => $this->t('Insurance Ratio'),
    );
	
	$form['interst_ratio']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Interest Ratio'),
      '#default_value' => $config->get('interst_ratio'),
      '#size' => 40,
      '#description' => $this->t('Interest Ratio'),
    );
	
	$form['rv']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('RV'),
      '#default_value' => $config->get('rv'),
      '#size' => 40,
      '#description' => $this->t('RV'),
    );
	
	$form['amount']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Duration Value'),
      '#default_value' => $config->get('amount'),
      '#size' => 40,
      '#description' => $this->t('Duration Value'),
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
    $aljabr_custom_settings = $this->config('aljabr_custom.calculator_settings');


    $aljabr_custom_settings->set('period_funding', $values['period_funding'])
	  ->set('finance_value', $values['finance_value'])
	  ->set('car_price', $values['car_price'])
	  ->set('car_price_val', $values['car_price_val'])
	  ->set('insurance_value', $values['insurance_value'])
	  ->set('emi', $values['emi'])
	  ->set('downpayment', $values['downpayment'])
	  ->set('downpayment_percent', $values['downpayment_percent'])
	  ->set('downpayment_val', $values['downpayment_val'])
	  ->set('intrest_rate_value', $values['intrest_rate_value'])
	  ->set('lastpayment', $values['lastpayment'])
	  ->set('lastpayment_percent', $values['lastpayment_percent'])
	  ->set('lastpayment_val', $values['lastpayment_val'])
	  ->set('total', $values['total'])
	  ->set('duration', $values['duration'])
	  ->set('net_price', $values['net_price'])
	  ->set('insurance_ratio', $values['insurance_ratio'])
	  ->set('interst_ratio', $values['interst_ratio'])
	  ->set('rv', $values['rv'])
	  ->set('amount', $values['amount'])
      ->save();

    parent::submitForm($form, $form_state);
  }

}
