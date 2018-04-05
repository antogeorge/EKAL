<?php

/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrAjaxMessageForm.
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
class AlJabrAjaxMessageForm extends ConfigFormBase {

  /**
   * The module manager service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * Constructs an AlJabrAjaxMessageForm object.
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
    return ['aljabr_custom.ajax_message'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aljabr_finance_ajax_message';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('aljabr_custom.ajax_message');
	
	$form['invalid_message']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Invalid input Message'),
      '#default_value' => $config->get('invalid_message'),
      '#size' => 40,
      '#description' => $this->t('Invalid input Message'),
    );
	

    $form['failure_message'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Error/ Danger/ Failure Message'),
      '#default_value' => $config->get('failure_message'),
      '#size' => 40,
      '#description' => $this->t('Error/ Danger/ Failure Message'),
    );
	

    $form['success_message'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Success Message'),
      '#default_value' => $config->get('success_message'),
      '#size' => 40,
      '#description' => $this->t('Success Message'),
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
	
	$config = \Drupal::service('config.factory')->getEditable('aljabr_custom.ajax_message');

	// Set and save new message value.
	$config->set('invalid_message', $values['invalid_message'])
		   ->set('failure_message', $values['failure_message'])
		   ->set('success_message', $values['success_message'])
		   ->save();

    parent::submitForm($form, $form_state);
  }

}
