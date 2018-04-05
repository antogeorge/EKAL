<?php

/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrVariableSettingsForm.
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
class AlJabrVariableSettingsForm extends ConfigFormBase {

  /**
   * The module manager service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * Constructs an AlJabrVariableSettingsForm object.
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
    return ['aljabr_custom.variable_settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aljabr_finance_variable_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('aljabr_custom.variable_settings');
	
	$form['branches_form_text_prefix']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Branches page form prefix text'),
      '#default_value' => $config->get('branches_form_text_prefix'),
      '#size' => 40,
      '#description' => $this->t('Text coming before branches map.'),
    );
	
	$form['comments_header']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Offer page comments header'),
      '#default_value' => $config->get('comments_header'),
      '#size' => 40,
      '#description' => $this->t('Offer page comments header'),
    );
	
	$form['comments_body']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Offer page comments body'),
      '#default_value' => $config->get('comments_body'),
      '#size' => 40,
      '#description' => $this->t('Offer page comments body'),
    );
	

	$form['comments_button']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Offer page comments button'),
      '#default_value' => $config->get('comments_button'),
      '#size' => 40,
      '#description' => $this->t('Offer page comments button'),
    );
	

	$form['comments_form_header']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Offer page comments form header'),
      '#default_value' => $config->get('comments_form_header'),
      '#size' => 40,
      '#description' => $this->t('Offer page comments form header'),
    );
	

	$form['comments_form_body']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Offer page comments form body'),
      '#default_value' => $config->get('comments_form_body'),
      '#size' => 40,
      '#description' => $this->t('Offer page comments form body'),
    );
		
	$form['career_form_header']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Career page form header'),
      '#default_value' => $config->get('career_form_header'),
      '#size' => 40,
      '#description' => $this->t('Career page form header'),
    );
	
	$form['subscribemail_header']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Offer page subscribe mail header'),
      '#default_value' => $config->get('subscribemail_header'),
      '#size' => 40,
      '#description' => $this->t('Offer page subscribe mail header'),
    );
	
	$form['subscribemail_body']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Offer page subscribe body'),
      '#default_value' => $config->get('subscribemail_body'),
      '#size' => 40,
      '#description' => $this->t('Offer page subscribe body'),
    );
	

	$form['subscribemail_button']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Offer page subscribe button'),
      '#default_value' => $config->get('subscribemail_button'),
      '#size' => 40,
      '#description' => $this->t('Offer page subscribe button'),
    );
	

	$form['subscribemail_form_header']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Offer page subscribe form header'),
      '#default_value' => $config->get('subscribemail_form_header'),
      '#size' => 40,
      '#description' => $this->t('Offer page subscribe form header'),
    );
	

	$form['subscribemail_form_body']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Offer page subscribe form body'),
      '#default_value' => $config->get('subscribemail_form_body'),
      '#size' => 40,
      '#description' => $this->t('Offer page subscribe form body'),
    );
	
	$form['job_title']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Job Title'),
      '#default_value' => $config->get('job_title'),
      '#size' => 40,
      '#description' => $this->t('Career Page Job Tile'),
    );
	
	$form['job_date']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Job Date'),
      '#default_value' => $config->get('job_date'),
      '#size' => 40,
      '#description' => $this->t('Career Page Job Date'),
    );
	
	$form['table_header']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Job Table Header'),
      '#default_value' => $config->get('table_header'),
      '#size' => 40,
      '#description' => $this->t('Career Page Job Table Header'),
    );
	
	$form['branch_header']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Branch Title'),
      '#default_value' => $config->get('branch_header'),
      '#size' => 40,
      '#description' => $this->t('Home page branch title'),
    );
	
	$form['branch_url']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Branch URL'),
      '#default_value' => $config->get('branch_url'),
      '#size' => 40,
      '#description' => $this->t('Home page branch URL'),
    );
	
	$form['branch_label']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Branch Label'),
      '#default_value' => $config->get('branch_label'),
      '#size' => 40,
      '#description' => $this->t('Home Page branch label'),
    );
	

	$form['headoffice_branch_lat']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Headoffice Latitude'),
      '#default_value' => $config->get('headoffice_branch_lat'),
      '#size' => 40,
      '#description' => $this->t('Headoffice Latitude'),
    );
	
	$form['headoffice_branch_long']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Headoffice Longitude'),
      '#default_value' => $config->get('headoffice_branch_long'),
      '#size' => 40,
      '#description' => $this->t('Headoffice Longitude'),
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
	
	$config = \Drupal::service('config.factory')->getEditable('aljabr_custom.variable_settings');

	// Set and save new message value.
	$config->set('branches_form_text_prefix', $values['branches_form_text_prefix'])
		   ->set('comments_header', $values['comments_header'])
		   ->set('comments_body', $values['comments_body'])
		   ->set('comments_button', $values['comments_button'])
		   ->set('comments_form_header', $values['comments_form_header'])
		   ->set('comments_form_body', $values['comments_form_body'])
		   ->set('career_form_header', $values['career_form_header'])
		   ->set('subscribemail_header', $values['subscribemail_header'])
		   ->set('subscribemail_body', $values['subscribemail_body'])
		   ->set('subscribemail_button', $values['subscribemail_button'])
		   ->set('subscribemail_form_header', $values['subscribemail_form_header'])
		   ->set('subscribemail_form_body', $values['subscribemail_form_body'])
		   ->set('job_title', $values['job_title'])
		   ->set('job_date', $values['job_date'])
		   ->set('table_header', $values['table_header'])
		   ->set('branch_header', $values['branch_header'])
		   ->set('branch_url', $values['branch_url'])
		   ->set('branch_label', $values['branch_label'])
		   ->set('headoffice_branch_lat', $values['headoffice_branch_lat'])
		   ->set('headoffice_branch_long', $values['headoffice_branch_long'])
		   ->save();

    parent::submitForm($form, $form_state);
  }

}
