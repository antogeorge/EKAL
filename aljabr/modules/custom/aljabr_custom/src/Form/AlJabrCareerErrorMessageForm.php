<?php

/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrCareerErrorMessageForm.
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
class AlJabrCareerErrorMessageForm extends ConfigFormBase {

  /**
   * The module manager service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * Constructs an AlJabrCareerErrorMessageForm object.
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
    return ['aljabr_custom.career_errormessage'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aljabr_career_error_message';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('aljabr_custom.career_errormessage');
	
	$form['name_mandatory']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Name Mandatory Message'),
      '#default_value' => $config->get('first_name_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Name mandatory message'),
    );
	
    //residency card
    $form['email_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Email Mandatory Message'),
      '#default_value' => $config->get('email_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Email Mandatory Message'),
    );
	
    $form['email_validate'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Email Validation Message'),
      '#default_value' => $config->get('email_validate'),
      '#size' => 40,
      '#description' => $this->t('Email Validation Message'),
    );
	
	//date of issue
    $form['phone_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Phone No Mandatory Message'),
      '#default_value' => $config->get('phone_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Phone No Mandatory Message'),
    );
	
	//expiry date
    $form['place_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Place Mandatory Message'),
      '#default_value' => $config->get('place_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Place Mandatory Message'),
    );
	
	//mobile no
    $form['interest_mandatory'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Interest Mandatory Message'),
      '#default_value' => $config->get('interest_mandatory'),
      '#size' => 40,
      '#description' => $this->t('Interest Mandatory Message'),
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
	
	$config = \Drupal::service('config.factory')->getEditable('aljabr_custom.career_errormessage');

	// Set and save new message value.
	$config->set('first_name_mandatory', $values['name_mandatory'])
		   ->set('email_mandatory', $values['email_mandatory'])
		   ->set('email_validate', $values['email_validate'])
		   ->set('phone_mandatory', $values['phone_mandatory'])
		   ->set('place_mandatory', $values['place_mandatory'])
		   ->set('interest_mandatory', $values['interest_mandatory'])
		   ->save();

    parent::submitForm($form, $form_state);
  }

}
