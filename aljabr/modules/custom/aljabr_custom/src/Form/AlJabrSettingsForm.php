<?php

/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrSettingsForm.
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
class AlJabrSettingsForm extends ConfigFormBase {

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
    return 'aljabr_custom_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('aljabr_custom.settings');
	
	$form['apply_funding_headline_en']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Apply for funding heading English'),
      '#default_value' => $config->get('apply_funding_headline_en'),
      '#size' => 40,
      '#description' => $this->t('Apply for funding heading in English. Add the value for heading here.'),
    );
	
	$form['apply_funding_description_en']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Apply for funding description in English'),
      '#default_value' => $config->get('apply_funding_description_en'),
      '#size' => 40,
      '#description' => $this->t('Apply for funding description in English. Add the value for description here.'),
    );

	$form['apply_funding_headline_ar']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Apply for funding heading Arabic'),
      '#default_value' => $config->get('apply_funding_headline_ar'),
      '#size' => 40,
      '#description' => $this->t('Apply for funding heading in Arabic. Add the value for heading here.'),
    );
	
	$form['apply_funding_description_ar']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Apply for funding description in Arabic'),
      '#default_value' => $config->get('apply_funding_description_ar'),
      '#size' => 40,
      '#description' => $this->t('Apply for funding description in Arabic. Add the value for description here.'),
    );
	
	$form['apply_funding_button_en']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Apply for funding button English'),
      '#default_value' => $config->get('apply_funding_button_en'),
      '#size' => 40,
      '#description' => $this->t('Apply for funding button value in English.'),
    );

	$form['apply_funding_button_ar']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Apply for funding button Arabic'),
      '#default_value' => $config->get('apply_funding_button_ar'),
      '#size' => 40,
      '#description' => $this->t('Apply for funding button value in Arabic.'),
    );

	$form['apply_funding_button_url']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Apply for funding button URL'),
      '#default_value' => $config->get('apply_funding_button_url'),
      '#size' => 40,
      '#description' => $this->t('Apply for funding button URL.'),
    );

	
	$form['required_documents_headline_en']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Required documents heading English'),
      '#default_value' => $config->get('required_documents_headline_en'),
      '#size' => 40,
      '#description' => $this->t('Required documents heading English. Add the value for heading here.'),
    );

	$form['required_documents_headline_ar']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Required documents heading Arabic'),
      '#default_value' => $config->get('required_documents_headline_ar'),
      '#size' => 40,
      '#description' => $this->t('Required documents heading Arabic. Add the value for heading here.'),
    );
	
	$form['required_documents_description_en']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Required documents description in English'),
      '#default_value' => $config->get('required_documents_description_en'),
      '#size' => 40,
      '#description' => $this->t('Required documents description in English. Add the value for description here.'),
    );

	$form['required_documents_description_ar']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Required documents description in Arabic'),
      '#default_value' => $config->get('required_documents_description_ar'),
      '#size' => 40,
      '#description' => $this->t('Required documents description in Arabic. Add the value for description here.'),
    );
	
	
	$form['aljabr_branches_heading_en']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Al Jabr Branches Heading English'),
      '#default_value' => $config->get('aljabr_branches_heading_en'),
      '#size' => 40,
      '#description' => $this->t('Al Jabr branches heading in English. Add the value for heading here.'),
    );
	
	$form['aljabr_branches_description_en']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Al Jabr branches description in English'),
      '#default_value' => $config->get('aljabr_branches_description_en'),
      '#size' => 40,
      '#description' => $this->t('Al Jabr branches description in English. Add the value for description here.'),
    );
	
	$form['aljabr_branches_heading_ar']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Al Jabr Branches Heading Arabic'),
      '#default_value' => $config->get('aljabr_branches_heading_ar'),
      '#size' => 40,
      '#description' => $this->t('Al Jabr branches heading in Arabic. Add the value for heading here.'),
    );
	
	$form['aljabr_branches_description_ar']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Al Jabr branches description in Arabic'),
      '#default_value' => $config->get('aljabr_branches_description_ar'),
      '#size' => 40,
      '#description' => $this->t('Al Jabr branches description in Arabic. Add the value for description here.'),
    );
	
	
	$form['finance_calculator_heading_en']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Finance calculator Heading English'),
      '#default_value' => $config->get('finance_calculator_heading_en'),
      '#size' => 40,
      '#description' => $this->t('Finance calculator heading in English. Add the value for heading here.'),
    );
	
	$form['finance_calculator_description_en']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Finance calculator description in English'),
      '#default_value' => $config->get('finance_calculator_description_en'),
      '#size' => 40,
      '#description' => $this->t('Finance calculator description in English. Add the value for description here.'),
    );
	
	$form['finance_calculator_heading_ar']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Finance calculator Heading Arabic'),
      '#default_value' => $config->get('finance_calculator_heading_ar'),
      '#size' => 40,
      '#description' => $this->t('Finance calculator heading in Arabic. Add the value for heading here.'),
    );
	
	$form['finance_calculator_description_ar']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Finance calculator description in Arabic'),
      '#default_value' => $config->get('finance_calculator_description_ar'),
      '#size' => 40,
      '#description' => $this->t('Finance calculator description in Arabic. Add the value for description here.'),
    );
	
	$form['offer_page_side_banner1_heading_en']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Offer page side banner 1 heading english'),
      '#default_value' => $config->get('offer_page_side_banner1_heading_en'),
      '#size' => 40,
      '#description' => $this->t('Offer page side banner 1 heading english. Add the value for heading here.'),
    );
	
	$form['offer_page_side_banner1_heading_ar']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Offer page side banner 1 heading arabic'),
      '#default_value' => $config->get('offer_page_side_banner1_heading_ar'),
      '#size' => 40,
      '#description' => $this->t('Offer page side banner 1 heading arabic. Add the value for heading here.'),
    );
	
	$form['offer_page_side_banner1_desc_en']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Offer page side banner 1 description english'),
      '#default_value' => $config->get('offer_page_side_banner1_desc_en'),
      '#size' => 40,
      '#description' => $this->t('Offer page side banner 1 description english. Add the value for description here.'),
    );
	
    $form['offer_page_side_banner1_desc_ar']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Finance calculator description in Arabic'),
      '#default_value' => $config->get('offer_page_side_banner1_desc_ar'),
      '#size' => 40,
      '#description' => $this->t('Offer page side banner 1 description arabic. Add the value for description here.'),
    );
	
	$form['offer_page_side_banner1_button_en']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Offer page side banner 1 button english'),
      '#default_value' => $config->get('offer_page_side_banner1_button_en'),
      '#size' => 40,
      '#description' => $this->t('Offer page side banner 1 button english. Add the value for button here.'),
    );
	
	$form['offer_page_side_banner1_button_ar']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Offer page side banner 1 button arabic'),
      '#default_value' => $config->get('offer_page_side_banner1_button_ar'),
      '#size' => 40,
      '#description' => $this->t('Offer page side banner 1 button arabic. Add the value for button here.'),
    );
	
	$form['offer_page_side_banner2_heading_en']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Offer page side banner 2 heading english'),
      '#default_value' => $config->get('offer_page_side_banner2_heading_en'),
      '#size' => 40,
      '#description' => $this->t('Offer page side banner 2 heading english. Add the value for heading here.'),
    );
	
	$form['offer_page_side_banner2_heading_ar']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Offer page side banner 2 heading arabic'),
      '#default_value' => $config->get('offer_page_side_banner2_heading_ar'),
      '#size' => 40,
      '#description' => $this->t('Offer page side banner 2 heading arabic. Add the value for heading here.'),
    );
	
	$form['offer_page_side_banner2_desc_en']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Offer page side banner 2 description english'),
      '#default_value' => $config->get('offer_page_side_banner2_desc_en'),
      '#size' => 40,
      '#description' => $this->t('Offer page side banner 2 description english. Add the value for description here.'),
    );
	
	$form['offer_page_side_banner2_desc_ar']  = array(
      '#type' => 'textarea',
      '#title' => $this->t('Offer page side banner 2 description arabic'),
      '#default_value' => $config->get('offer_page_side_banner2_desc_ar'),
      '#size' => 40,
      '#description' => $this->t('Offer page side banner 2 description arabic. Add the value for description here.'),
    );
	
	$form['offer_page_side_banner2_button_en']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Offer page side banner 2 button english'),
      '#default_value' => $config->get('offer_page_side_banner2_button_en'),
      '#size' => 40,
      '#description' => $this->t('Offer page side banner 2 button english. Add the value for button here.'),
    );
	
	$form['offer_page_side_banner2_button_ar']  = array(
      '#type' => 'textfield',
      '#title' => $this->t('Offer page side banner 2 button arabic'),
      '#default_value' => $config->get('offer_page_side_banner2_button_ar'),
      '#size' => 40,
      '#description' => $this->t('Offer page side banner 2 button arabic. Add the value for button here.'),
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
    $aljabr_custom_settings = $this->config('aljabr_custom.settings');

    $aljabr_custom_settings->set('apply_funding_headline_en', $values['apply_funding_headline_en'])
	  ->set('apply_funding_description_en', $values['apply_funding_description_en'])
	  ->set('apply_funding_headline_ar', $values['apply_funding_headline_ar'])
	  ->set('apply_funding_description_ar', $values['apply_funding_description_ar'])
	  ->set('apply_funding_button_en', $values['apply_funding_button_en'])
	  ->set('apply_funding_button_ar', $values['apply_funding_button_ar'])
	  ->set('apply_funding_button_url', $values['apply_funding_button_url'])
	  ->set('required_documents_headline_en', $values['required_documents_headline_en'])
	  ->set('required_documents_headline_ar', $values['required_documents_headline_ar'])
	  ->set('required_documents_description_en', $values['required_documents_description_en'])
	  ->set('required_documents_description_ar', $values['required_documents_description_ar'])
	  ->set('aljabr_branches_heading_en', $values['aljabr_branches_heading_en'])
	  ->set('aljabr_branches_description_en', $values['aljabr_branches_description_en'])
	  ->set('aljabr_branches_heading_ar', $values['aljabr_branches_heading_ar'])
	  ->set('aljabr_branches_description_ar', $values['aljabr_branches_description_ar'])
	  ->set('finance_calculator_heading_en', $values['finance_calculator_heading_en'])
	  ->set('finance_calculator_description_en', $values['finance_calculator_description_en'])
	  ->set('finance_calculator_heading_ar', $values['finance_calculator_heading_ar'])
	  ->set('finance_calculator_description_ar', $values['finance_calculator_description_ar'])
	  ->set('offer_page_side_banner1_heading_en', $values['offer_page_side_banner1_heading_en'])
	  ->set('offer_page_side_banner1_heading_ar', $values['offer_page_side_banner1_heading_ar'])
	  ->set('offer_page_side_banner1_desc_en', $values['offer_page_side_banner1_desc_en'])
	  ->set('offer_page_side_banner1_desc_ar', $values['offer_page_side_banner1_desc_ar'])
	  ->set('offer_page_side_banner1_button_en', $values['offer_page_side_banner1_button_en'])
	  ->set('offer_page_side_banner1_button_ar', $values['offer_page_side_banner1_button_ar'])
	  ->set('offer_page_side_banner2_heading_en', $values['offer_page_side_banner2_heading_en'])
	  ->set('offer_page_side_banner2_heading_ar', $values['offer_page_side_banner2_heading_ar'])
	  ->set('offer_page_side_banner2_desc_en', $values['offer_page_side_banner2_desc_en'])
	  ->set('offer_page_side_banner2_desc_ar', $values['offer_page_side_banner2_desc_ar'])
	  ->set('offer_page_side_banner2_button_en', $values['offer_page_side_banner2_button_en'])
	  ->set('offer_page_side_banner2_button_ar', $values['offer_page_side_banner2_button_ar'])
      ->save();

    parent::submitForm($form, $form_state);
  }

}
