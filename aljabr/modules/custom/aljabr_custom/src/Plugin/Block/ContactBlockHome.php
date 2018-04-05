<?php
/**
 * Provides a 'Contact Block Home' Block
 *
 * @Block(
 *   id = "contact_block",
 *   admin_label = @Translation("Contact Block Home"),
 * )
 */

namespace Drupal\aljabr_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class ContactBlockHome extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $output='';

    $page_language = \Drupal::languageManager()->getCurrentLanguage()->getId();
	$header = \Drupal::config('aljabr_custom.variable_settings')->get('branch_header');
	$url = \Drupal::config('aljabr_custom.variable_settings')->get('branch_url');
	$label = \Drupal::config('aljabr_custom.variable_settings')->get('branch_label');
	$contact_url = '';
	  if ($page_language == 'en') {
		$contact_url = '/en/' . $url;
		$output.= '<span>
					<h5>' . $header . '</h5>
					<a href="' . $contact_url . '">' . $label . '</a> 
				   </span>';
	  } else {
		$contact_url .= '/' . $url;
		$output.= '<span>
			<h5>' . $header . '</h5>
			<a href="' . $contact_url . '">' . $label . '</a> 
		   </span>';
	  }
	
   			
    return array(
      '#markup' => $output,
      '#cache' => array(
        'contexts' => array('url'),
      ),
    );
  }
}