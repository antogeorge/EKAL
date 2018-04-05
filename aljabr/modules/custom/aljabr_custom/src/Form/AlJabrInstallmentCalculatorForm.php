<?php
/**
 * @file
 * Contains \Drupal\aljabr_custom\Form\AlJabrInstallmentCalculatorForm.
 */
namespace Drupal\aljabr_custom\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements an installment calculator form.
 */
class AlJabrInstallmentCalculatorForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'installmentcalculator';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    
    $theme = \Drupal::theme()->getActiveTheme()->getName();
    $path = drupal_get_path('theme', $theme);
    $page_language = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $sliderclass = 'col-md-6 col-sm-6 col-xs-12 top right';
    if ($page_language == 'ar') {
      $sliderclass = 'col-md-6 col-sm-6 col-xs-12 top right slidercont';
    }
	$config = $this->config('aljabr_custom.calculator_settings');
	

    $form['period_funding'] = array(
      '#type' => 'textfield',
      '#title' => '<h4>' . $config->get('period_funding') . '</h4>',
      '#id' => 'period_funding',
      '#prefix' => '<div class="search-filter top"><div class="col-md-3 col-sm-3 col-xs-6 last top">',
      '#suffix' => '</div>',
	  '#default_value' => '18',
	  '#attributes' => array(
        'readonly' => array(
            'readonly',
          ),
		 'class' => array(
			'trans',
		 ),
        ),
    );
	
    $form['finance_value'] = array(
      '#type' => 'textfield',
      '#title' => '<h4>' . $config->get('finance_value') . '</h4>',
      '#id' => 'finance_value',
      '#prefix' => '<div class="col-md-3 col-sm-3 col-xs-6 top">',
      '#suffix' => '</div>',
	  '#attributes' => array(
        'readonly' => array(
            'readonly',
          ),
		 'class' => array(
			'trans',
		 ),
        ),
    );
	
    // // //car_price slider
    $form['car_price'] = array(
      '#type' => 'textfield',
      '#id' => 'car_price',
      '#prefix' => '<div class="' . $sliderclass . '"><h3>' . $config->get('car_price') . '</h3>',
      '#suffix' => '',
      '#default_value' => '0',
      '#attributes' => array(
        'data-slider' => array(
            'true'
         ),
        'data-slider-range' => array(
            '0,99999999'
          ),
        'data-slider-step' => array(
            '1'
          ),
        'data-slider-highlight' => array(
            'true'
          ),
        'class' => array(
          'slide-dragger'
          ),
        ),
    );

	
    $form['car_price_val'] = array(
      '#type' => 'textfield',
      '#title' => '<h4>' . $config->get('car_price_val') . '</h4>',
      '#id' => 'car_price_val',
      '#prefix' => '<span class="span-cls new-span-cls">',
      '#suffix' => '</span></div></div>',
    );
	
	
    $form['insurance_value'] = array(
      '#type' => 'textfield',
      '#title' => '<h4>' . $config->get('insurance_value') . '</h4>',
      '#id' => 'insurance_value',
      '#prefix' => '<div class="search-filter"><div class="col-md-3 col-sm-3 col-xs-6 last">',
      '#suffix' => '</div>',
	  '#attributes' => array(
        'readonly' => array(
            'readonly',
          ),
		 'class' => array(
			'trans',
		 ),
        ),
    );

	$form['emi'] = array(
      '#type' => 'textfield',
      '#title' => '<h4>' . $config->get('emi') . '</h4>',
      '#id' => 'emi',
      '#prefix' => '<div class="col-md-3 col-sm-3 col-xs-6">',
      '#suffix' => '</div>',
	  '#attributes' => array(
        'readonly' => array(
            'readonly',
          ),
		 'class' => array(
			'trans',
		 ),
        ),
    );
	
    // // //downpayment slider
    $form['downpayment'] = array(
      '#type' => 'textfield',
      '#id' => 'downpayment',
      '#prefix' => '<div class="' . $sliderclass . '"><h3>' . $config->get('downpayment') . '</h3>',
      '#suffix' => '',
      '#default_value' => '0',
      '#attributes' => array(
        'data-slider' => array(
            'true'
         ),
        'data-slider-range' => array(
            '0,80'
          ),
        'data-slider-step' => array(
            '1'
          ),
        'data-slider-highlight' => array(
            'true'
          ),
        'class' => array(
          'slide-dragger'
          ),
        ),
    );

    $form['downpayment_percent'] = array(
      '#type' => 'textfield',
      '#id' => 'downpayment_percent',
      '#prefix' => '<span class="span-cls new-span-cls">',
      '#suffix' => '</span>',
	  '#attributes' => array(
        'readonly' => array(
            'readonly',
          ),
		 'class' => array(
			'trans',
		 ),
        ),
    );
	
	// $config->get('downpayment_val')
    $form['downpayment_val'] = array(
      '#type' => 'textfield',
      '#title' => '<h4></h4>',
      '#id' => 'downpayment_val',
      '#prefix' => '<span class="span-cls new-span-cls">',
      '#suffix' => '</span></div></div>',
    );
	
	
    $form['intrest_rate_value'] = array(
      '#type' => 'textfield',
      '#title' => '<h4>' . $config->get('intrest_rate_value') . '</h4>',
      '#id' => 'intrest_rate_value',
      '#prefix' => '<div class="search-filter"><div class="col-md-3 col-sm-3 col-xs-6 last">',
      '#suffix' => '</div>',
	  '#attributes' => array(
        'readonly' => array(
            'readonly',
          ),
		 'class' => array(
			'trans',
		 ),
        ),
    );

	$form['downp_val'] = array(
      '#type' => 'textfield',
      '#title' => '<h4>' . $config->get('downpayment_val') . '</h4>',
      '#id' => 'downp_val',
      '#prefix' => '<div class="col-md-3 col-sm-3 col-xs-6">',
      '#suffix' => '</div>',
	  '#attributes' => array(
        'readonly' => array(
            'readonly',
          ),
		 'class' => array(
			'trans',
		 ),
        ),
    );
	
    // // //lastpayment slider
    $form['lastpayment'] = array(
      '#type' => 'textfield',
      '#id' => 'lastpayment',
      '#prefix' => '<div class="' . $sliderclass . '"><h3>' . $config->get('lastpayment') . '</h3>',
      '#suffix' => '',
      '#default_value' => '0',
      '#attributes' => array(
        'data-slider' => array(
            'true'
         ),
        'data-slider-range' => array(
            '0,25'
          ),
        'data-slider-step' => array(
            '1'
          ),
        'data-slider-highlight' => array(
            'true'
          ),
        'class' => array(
          'slide-dragger'
          ),
        ),
    );

    $form['lastpayment_percent'] = array(
      '#type' => 'textfield',
      '#id' => 'lastpayment_percent',
      '#prefix' => '<span class="span-cls new-span-cls">',
      '#suffix' => '</span>',
	  '#attributes' => array(
        'readonly' => array(
            'readonly',
          ),
		 'class' => array(
			'trans',
		 ),
        ),
    );
	
	//$config->get('lastpayment_val')
    $form['lastpayment_val'] = array(
      '#type' => 'textfield',
      '#title' => '<h4></h4>',
      '#id' => 'lastpayment_val',
      '#prefix' => '<span class="span-cls new-span-cls">',
      '#suffix' => '</span></div></div>',
    );
	
    $form['total'] = array(
      '#type' => 'textfield',
      '#title' => '<h4>' . $config->get('total') . '</h4>',
      '#id' => 'total',
      '#prefix' => '<div class="search-filter"><div class="col-md-3 col-sm-3 col-xs-6 last bottom">',
      '#suffix' => '</div>',
	  '#attributes' => array(
        'readonly' => array(
            'readonly',
          ),
		 'class' => array(
			'trans',
		 ),
        ),
    );

	$form['lastp_val'] = array(
      '#type' => 'textfield',
      '#title' => '<h4>' . $config->get('lastpayment_val') . '</h4>',
      '#id' => 'lastp_val',
      '#prefix' => '<div class="col-md-3 col-sm-3 col-xs-6 bottom">',
      '#suffix' => '</div><div class="col-md-6 col-sm-6 col-xs-12 right no-padding" style="padding:0;"><h3 style="padding-right: 15px;">' . $config->get('duration') . '</h3><div class="listing"><ul><li><a  class="dur" href="#">60</a></li><li><a class="dur"  href="#">54</a></li><li><a class="dur" href="#">48</a></li><li><a class="dur" href="#">36</a></li><li><a class="dur" href="#">30</a></li><li><a class="dur" href="#">24</a></li><li><a class="dur active" href="#">18</a></li></ul></div></div></div>',
	  '#attributes' => array(
        'readonly' => array(
            'readonly',
          ),
		 'class' => array(
			'trans',
		 ),
        ),
    );
	


    //net_price
    $form['net_price'] = array(
      '#type' => 'hidden',
      '#id' => 'net_price',
      '#default_value' => $config->get('net_price'),
    );

    $form['insurance_ratio'] = array(
      '#type' => 'hidden',
      '#id' => 'insurance_ratio',
      '#default_value' => $config->get('insurance_ratio'),
    );

    $form['interst_ratio'] = array(
      '#type' => 'hidden',
      '#id' => 'interst_ratio',
      '#default_value' => $config->get('interst_ratio'),
    );

    $form['rv'] = array(
      '#type' => 'hidden',
      '#id' => 'rv',
      '#default_value' => $config->get('rv'),
    );   
   
    $form['amount'] = array(
      '#type' => 'hidden',
      '#id' => 'amount',
      '#default_value' => $config->get('amount'),
    ); 
	

    $form['actions']['#type'] = 'actions';

    // $form['actions']['submit'] = array(
    //   '#type' => 'submit',
    //   '#value' => $this->t('Send e-mail'),
    //   '#button_type' => 'primary',
    //   '#prefix' => '<div class="row"><div align="center"><br>',
    //   '#suffix' => '</div></div></div></div>',
    //   '#attributes' => array(
    //     'class' => array(
    //         'form-control'
    //      )
    //     ),
    
    // );


    /**
    * Attach js files
    **/
    $form['#attached']['library'][] = 'aljabr_custom/installment-calculator';
    
    
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
   * car make drop down
  */
  function _installment_calculator_carmakes() {
    $db = \Drupal::database();
    $makes = $db -> select('car_makes_models','c') -> distinct('car_make') -> fields('c') -> orderBy('c.car_make', 'ASC') -> execute();
    $options[''] = t('- Select -');
    foreach ($makes as $make) {
      $options[$make -> car_make] = t($make -> car_make);
    }

    return $options;
  }


  /**
  * car_model_dropdown_options
  */
  function _installment_calculator_car_model_dropdown_options($key = '') {
     if(!empty($key)) {
       $db = \Drupal::database();
       $models = $db -> select('car_makes_models', 'c') -> fields('c', array('car_model')) -> condition('car_make', $key, '=') -> orderBy('c.car_model', 'ASC') -> execute();
       foreach ($models as $model) {
        $options[$model -> car_model] = t($model -> car_model);
       }
 
     }else {
      $options[''] = t('- Select -');
     }
     
     return $options;
  }