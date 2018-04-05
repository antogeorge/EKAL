<?php

/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrCommentsSettingsForm.
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
class AlJabrCommentsSettingsForm extends ConfigFormBase {

  /**
   * The module manager service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * Constructs an AlJabrCommentsSettingsForm object.
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
    return ['aljabr_custom.comments_settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aljabr_comments_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('aljabr_custom.comments_settings');
	
	$form['first_name']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#default_value' => $config->get('first_name'),
      '#size' => 40,
      '#description' => $this->t('Name label'),
    );
	
	$form['phone']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Phone'),
      '#default_value' => $config->get('phone'),
      '#size' => 40,
      '#description' => $this->t('Phone label'),
    );

	$form['place']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Place'),
      '#default_value' => $config->get('place'),
      '#size' => 40,
      '#description' => $this->t('Place label'),
    );

	$form['comments']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Comments'),
      '#default_value' => $config->get('comments'),
      '#size' => 40,
      '#description' => $this->t('Comments label'),
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
	
	$config = \Drupal::service('config.factory')->getEditable('aljabr_custom.comments_settings');

	// Set and save new message value.
	$config->set('first_name', $values['first_name'])
		   ->set('phone', $values['phone'])
		   ->set('place', $values['place'])
		   ->set('comments', $values['comments'])
		   ->save();

    parent::submitForm($form, $form_state);
  }

}
