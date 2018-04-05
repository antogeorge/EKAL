<?php

/**
 * @file
 * Contains \Drupal\samplewil\Form\AlJabrFinanceSettingsForm.
 */

namespace Drupal\samplewil\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Drupal\Core\Render\Element;

/**
 * Provides settings for samplewil module.
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
    return ['samplewil.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aljabr_finance_settings1';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('samplewil.settings');
	
	$form['wil']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Apply for funding heading English'),
      '#default_value' => $config->get('wil'),
      '#size' => 40,
      '#description' => $this->t('Apply for funding heading in English. Add the value for heading here.'),
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
	
	$config = \Drupal::service('config.factory')->getEditable('samplewil.settings');

// Set and save new message value.
$config->set('wil', $values['wil'])->save();

   // $aljabr_custom_settings = $this->config('samplewil.settings');

    //$aljabr_custom_settings->set('message', $values['message'])
      //->save();

    parent::submitForm($form, $form_state);
  }

}
