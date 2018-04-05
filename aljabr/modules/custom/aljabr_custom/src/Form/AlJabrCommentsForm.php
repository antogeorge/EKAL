<?php

/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrCommentsForm.
 */

namespace Drupal\aljabr_custom\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

use Drupal\Core\Render\Element;

/**
 * Implements finance form.
 */
class AlJabrCommentsForm extends FormBase {
 
  
 /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aljabr_comments';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
  

    $page_language = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $theme = \Drupal::theme()->getActiveTheme()->getName();
    $path = drupal_get_path('theme', $theme);
	
	$error_message = [];
	$error_message_config = \Drupal::config('aljabr_custom.comments_errormessage');
	//error message
	$error_message['first_name_mandatory'] = $error_message_config->get('first_name_mandatory');
	$error_message['phone_mandatory'] = $error_message_config->get('phone_mandatory');
	$error_message['place_mandatory'] = $error_message_config->get('place_mandatory');
	$error_message['comments_mandatory'] = $error_message_config->get('comments_mandatory');

    //name 
    $form['first_name'] = array(
      '#type' => 'textfield',
      '#id' => 'first_name',
      '#placeholder' => \Drupal::config('aljabr_custom.comments_settings')->get('first_name'),
      '#prefix' => '<div class="col-md-12">',
	  '#suffix' => '<div id="first_name_mand_errors"></div></div>',
    );
	
    $form['phone'] = array(
      '#type' => 'textfield',
      '#id' => 'phone',
      '#placeholder' => \Drupal::config('aljabr_custom.comments_settings')->get('phone'),
      '#prefix' => '<div class="col-md-12">',
	  '#suffix' => '<div id="phone_mand_errors"></div></div>',
    );
	
    $form['place'] = array(
      '#type' => 'textfield',
      '#id' => 'place',
      '#placeholder' => \Drupal::config('aljabr_custom.comments_settings')->get('place'),
      '#prefix' => '<div class="col-md-12">',
	  '#suffix' => '<div id="place_mand_errors"></div></div>',
    );
	
    $form['comments'] = array(
      '#type' => 'textfield',
      '#id' => 'comments',
      '#placeholder' => \Drupal::config('aljabr_custom.comments_settings')->get('comments'),
      '#prefix' => '<div class="col-md-12">',
	  '#suffix' => '<div id="comments_mand_errors"></div></div>',
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
    $form['#attached']['library'][] = 'aljabr_custom/comments';
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
