<?php
/**
 * Provides a 'Career form' Block
 *
 * @Block(
 *   id = "career_form_block",
 *   admin_label = @Translation("Career form block"),
 * )
 */

namespace Drupal\aljabr_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class CareerFormBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
      $output = \Drupal::formBuilder()->getForm('Drupal\aljabr_custom\Form\AlJabrCareerForm');

   			
    return $output;
  }
}