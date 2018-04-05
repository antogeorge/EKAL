<?php
/**
 * Provides a 'Language switcher' Block
 *
 * @Block(
 *   id = "lang_swtch",
 *   admin_label = @Translation("Switch the lang"),
 * )
 */

namespace Drupal\aljabr_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class SwitchLang extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $output='';
    $referer = '';
    $referer = $_SERVER['REQUEST_URI'];
    $brokenDownReferer_en = '';
    $brokenDownReferer_ar = '';
      if (stristr($referer, "/en/")) {
          $brokenDownReferer_ar = implode("/", explode("/en/", $_SERVER['REQUEST_URI'], 2));
          $brokenDownReferer_en = implode("/en/", explode("/en/", $_SERVER['REQUEST_URI'], 2));       
        
      } else if (stristr($referer, "/en")) {
        //$brokenDownReferer_ar = implode("/en", explode("/", $_SERVER['REQUEST_URI'], 2));
          $brokenDownReferer_ar = str_replace("/en", "/", $_SERVER['REQUEST_URI']);
          $brokenDownReferer_en = implode("/en", explode("/en", $_SERVER['REQUEST_URI'], 2));  
        
      } else {
          $brokenDownReferer_ar = implode("/", explode("/", $_SERVER['REQUEST_URI'], 2));
          $brokenDownReferer_en = implode("/en/", explode("/", $_SERVER['REQUEST_URI'], 2));

      }

    $page_language = \Drupal::languageManager()->getCurrentLanguage()->getId();
	
	  if ($page_language == 'en') {
		$output.='<div class="language"><a href="'.$brokenDownReferer_ar.'" data-lang-id="en_US">عربي</a></div>';
	  } else {
		$output.='<div class="language"><a href="'.$brokenDownReferer_en.'" data-lang-id="ar">English</a></div>';
	  }
	
   			
    return array(
      '#markup' => $output,
      '#cache' => array(
        'contexts' => array('url'),
      ),
    );
  }
}