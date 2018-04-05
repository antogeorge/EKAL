<?php

/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrFinanceMailList.
 */

namespace Drupal\aljabr_custom\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

use Drupal\Core\Render\Element;

/**
 * Implements finance form.
 */
class AlJabrFinanceMailList extends FormBase {
 
  
 /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aljabr_mail';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
  

    $page_language = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $theme = \Drupal::theme()->getActiveTheme()->getName();
    $path = drupal_get_path('theme', $theme);
	
	$error_message = [];
	$error_message_config = \Drupal::config('aljabr_custom.subscribe_errormessage');
	//error message
	$error_message['first_name_mandatory'] = $error_message_config->get('first_name_mandatory');
	$error_message['email_mandatory'] = $error_message_config->get('email_mandatory');
	$error_message['email_validate'] = $error_message_config->get('email_validate');

    //name 
    $form['field_first_name'] = array(
      '#type' => 'textfield',
      '#id' => 'field_first_name',
      '#placeholder' => \Drupal::config('aljabr_custom.comments_settings')->get('first_name'),
      '#prefix' => '<div class="col-md-12">',
	  '#suffix' => '<div id="field_first_name_mand_errors"></div></div>',
    );
	
    $form['email'] = array(
      '#type' => 'textfield',
      '#id' => 'email',
      '#placeholder' => \Drupal::config('aljabr_custom.career_settings')->get('email'),
      '#prefix' => '<div class="col-md-12">',
	  '#suffix' => '<div id="email_mand_errors"></div></div>',
    );
	
	
	
    $form['actions']['#type'] = 'actions';

    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => \Drupal::config('aljabr_custom.settings')->get('submit_val'),
      '#button_type' => 'primary',
      '#prefix' => '<div class="col-md-12">',
      '#suffix' => '</div>',
      '#attributes' => array(
        'class' => array(
            'submit'
         )
        ),
    
    );
	
    /**
    * Attach js files
    **/
    //$form['#attached']['library'][] = 'aljabr/common-files';
    $form['#attached']['library'][] = 'aljabr_custom/mail';
    $form['#attached']['drupalSettings']['page_lang'] = $page_language;
	$form['#attached']['drupalSettings']['error_message'] = $error_message;
    
    /** You can even add the libraries of theme or other modules here. If a css or js is common across the website, add the library in template libraries and call in each module **/
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // if (strlen($form_state->getValue('phone_number')) < 3) {
    //   $form_state->setErrorByName('phone_number', $this->t('The phone number is too short. Please enter a full phone number.'));
    // }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // drupal_set_message($this->t('Your phone number is @number', array('@number' => $form_state->getValue('phone_number'))));
  }

}
