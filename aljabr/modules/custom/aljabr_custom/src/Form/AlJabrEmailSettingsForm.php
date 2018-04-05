<?php

/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrEmailSettingsForm.
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
class AlJabrEmailSettingsForm extends ConfigFormBase {

  /**
   * The module manager service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * Constructs an AlJabrEmailSettingsForm object.
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
    return ['aljabr_custom.email_settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aljabr_email_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('aljabr_custom.email_settings');

	  
	$form['email_subscribe_form_subject']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Subscribe to our Email subject'),
      '#default_value' => $config->get('email_subscribe_form_subject'),
      '#size' => 40,
      '#description' => $this->t('Subscribe to our Email subject.'),
    );
	
	$form['home']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Home link'),
      '#default_value' => $config->get('home'),
      '#size' => 40,
      '#description' => $this->t('Home link'),
    );
	
	$form['career_form_subject']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Career form email subject'),
      '#default_value' => $config->get('career_form_subject'),
      '#size' => 40,
      '#description' => $this->t('Career form email subject'),
    );
	

	$form['comments_form_subject']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Comments form email subject'),
      '#default_value' => $config->get('comments_form_subject'),
      '#size' => 40,
      '#description' => $this->t('Comments form email subject'),
    );
	

	$form['finance_form_subject']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Finance form email subject'),
      '#default_value' => $config->get('finance_form_subject'),
      '#size' => 40,
      '#description' => $this->t('Finance form email subject'),
    );
	

	$form['smtp_secure']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('SMTP Secure'),
      '#default_value' => $config->get('smtp_secure'),
      '#size' => 40,
      '#description' => $this->t('SMTP Secure'),
    );
		
	$form['host']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Hostname'),
      '#default_value' => $config->get('host'),
      '#size' => 40,
      '#description' => $this->t('Hostname'),
    );
	
	$form['port']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Port'),
      '#default_value' => $config->get('port'),
      '#size' => 40,
      '#description' => $this->t('Port No'),
    );
	
	$form['username']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Username'),
      '#default_value' => $config->get('username'),
      '#size' => 40,
      '#description' => $this->t('Username'),
    );
	

	$form['pass']  = array(
      '#type' => 'password',
      '#title' => $this->t('Password'),
      '#default_value' => $config->get('pass'),
      '#size' => 40,
      '#description' => $this->t('Password'),
    );
	

	$form['fromemail']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('From Email ID'),
      '#default_value' => $config->get('fromemail'),
      '#size' => 40,
      '#description' => $this->t('From Email ID'),
    );
	

	$form['toemail']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('To Email ID'),
      '#default_value' => $config->get('toemail'),
      '#size' => 40,
      '#description' => $this->t('To Email ID'),
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
	
	$config = \Drupal::service('config.factory')->getEditable('aljabr_custom.email_settings');

	  
	// Set and save new message value.
	$config->set('email_subscribe_form_subject', $values['email_subscribe_form_subject'])
		   ->set('home', $values['home'])
		   ->set('career_form_subject', $values['career_form_subject'])
		   ->set('comments_form_subject', $values['comments_form_subject'])
		   ->set('finance_form_subject', $values['finance_form_subject'])
		   ->set('smtp_secure', $values['smtp_secure'])
		   ->set('host', $values['host'])
		   ->set('port', $values['port'])
		   ->set('username', $values['username'])
		   ->set('pass', $values['pass'])
		   ->set('fromemail', $values['fromemail'])
		   ->set('toemail', $values['toemail'])
		   ->save();

    parent::submitForm($form, $form_state);
  }

}
