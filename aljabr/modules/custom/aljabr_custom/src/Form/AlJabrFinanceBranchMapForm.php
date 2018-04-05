<?php

/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrFinanceBranchMapForm.
 */

namespace Drupal\aljabr_custom\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

use Drupal\Core\Render\Element;

/**
 * Implements branch map form.
 */
class AlJabrFinanceBranchMapForm extends FormBase {
 
  
 /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'aljabr_branch_map';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
  

    $page_language = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $theme = \Drupal::theme()->getActiveTheme()->getName();
    $path = drupal_get_path('theme', $theme);
	
	$headoffice = [];
	$headoffice_config = \Drupal::config('aljabr_custom.variable_settings');
	
	$headoffice['latitude'] = $headoffice_config->get('headoffice_branch_lat');
	$headoffice['longitude'] = $headoffice_config->get('headoffice_branch_long');
	
    $coordinates = _branch_coordinates();
    $form['branch'] = [
      '#type' => 'select',
      '#options' => $coordinates,
      '#id' => 'branch',
      '#attributes' => array(
        'class' => array(
            'form-select',
			'map-dropdown'
         )
        ),
    ];
	
    $form['actions']['#type'] = 'actions';


	
    /**
    * Attach js files
    **/
    //$form['#attached']['library'][] = 'aljabr/common-files';
    $form['#attached']['library'][] = 'aljabr_custom/branch';
    $form['#attached']['drupalSettings']['page_lang'] = $page_language;
	$form['#attached']['drupalSettings']['headoffice'] = $headoffice;
    
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

/**
  * _branch_coordinates options
  */
  function _branch_coordinates() {
	
	$nids = \Drupal::entityQuery('node')->condition('type','aljabr_branches')->execute();
	$nid = array_values($nids);
	$options[''] = t('- Select -');
	foreach ($nid as $nd) {

		
		$node = \Drupal::entityTypeManager()->getStorage('node')->load($nd);

		$title = \Drupal::entityManager()->getTranslationFromContext($node)->title->value;
		$latitude = \Drupal::entityManager()->getTranslationFromContext($node)->field_latitude->value;
		$longitude = \Drupal::entityManager()->getTranslationFromContext($node)->field_longitude->value;
		//echo $title . ' ' . $latitude . ' ' . $longitude . "/n";
		$options[$latitude . ',' . $longitude] = $title;

	}
	return $options;
  }
