<?php
/**
 * Provides a 'Offer page side' Block
 *
 * @Block(
 *   id = "offer_side_bar",
 *   admin_label = @Translation("Offer page side block"),
 * )
 */

namespace Drupal\aljabr_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class OfferSideBar extends BlockBase {
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
	if($page_language == 'en') {
		$offer_page_side_banner1_heading = \Drupal::config('aljabr_custom.settings')->get('offer_page_side_banner1_heading_en');
		$offer_page_side_banner1_desc = \Drupal::config('aljabr_custom.settings')->get('offer_page_side_banner1_desc_en');
		$offer_page_side_banner1_button = \Drupal::config('aljabr_custom.settings')->get('offer_page_side_banner1_button_en');
		
		$offer_page_side_banner2_heading = \Drupal::config('aljabr_custom.settings')->get('offer_page_side_banner2_heading_en');
		$offer_page_side_banner2_desc = \Drupal::config('aljabr_custom.settings')->get('offer_page_side_banner2_desc_en');
		$offer_page_side_banner2_button = \Drupal::config('aljabr_custom.settings')->get('offer_page_side_banner2_button_en');
	} else {
		$offer_page_side_banner1_heading = \Drupal::config('aljabr_custom.settings')->get('offer_page_side_banner1_heading_ar');
		$offer_page_side_banner1_desc = \Drupal::config('aljabr_custom.settings')->get('offer_page_side_banner1_desc_ar');
		$offer_page_side_banner1_button = \Drupal::config('aljabr_custom.settings')->get('offer_page_side_banner1_button_ar');
		
		$offer_page_side_banner2_heading = \Drupal::config('aljabr_custom.settings')->get('offer_page_side_banner2_heading_ar');
		$offer_page_side_banner2_desc = \Drupal::config('aljabr_custom.settings')->get('offer_page_side_banner2_desc_ar');
		$offer_page_side_banner2_button = \Drupal::config('aljabr_custom.settings')->get('offer_page_side_banner2_button_ar');
		
	} 	
	
    $output.='<div class="col-md-4 col-sm-4 col-xs-12">
                <h3>' . $offer_page_side_banner1_heading . '</h3>
                <div class="career-box">
					<p>' . $offer_page_side_banner1_desc . '</p>
                    <a href="#">' . $offer_page_side_banner1_button . '</a>
                </div>
                <h3>' . $offer_page_side_banner2_heading . '</h3>
                <div class="career-box">
                    <p>' . $offer_page_side_banner2_desc . '</p>
                    <a href="#"> ' . $offer_page_side_banner2_button . '</a>
                </div>
            </div>';
   			
    return array(
      '#markup' => $output,
      '#cache' => array(
        'contexts' => array('url'),
      ),
    );
  }
}