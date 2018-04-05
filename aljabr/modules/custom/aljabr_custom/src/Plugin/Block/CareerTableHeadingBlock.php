<?php
/**
 * Provides a 'Career table heading' Block
 *
 * @Block(
 *   id = "career_table",
 *   admin_label = @Translation("Career Table Heading"),
 * )
 */

namespace Drupal\aljabr_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class CareerTableHeadingBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $output='';
    $referer = '';
    $referer = $_SERVER['REQUEST_URI'];
    $header = \Drupal::config('aljabr_custom.variable_settings')->get('table_header');
	$job_title = \Drupal::config('aljabr_custom.variable_settings')->get('job_title');
	$job_date = \Drupal::config('aljabr_custom.variable_settings')->get('job_date');
	$output .= '<h2>' . $header . '</h2>
                    <ul>
                        <li><span>' . $job_title . '</span></li>
                        <li><span>' . $job_date . '</span></li>
                    </ul>';
	
   			
    return array(
      '#markup' => $output,
      '#cache' => array(
        'contexts' => array('url'),
      ),
    );
  }
}