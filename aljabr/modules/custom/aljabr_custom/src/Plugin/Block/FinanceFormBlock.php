<?php
/**
 * Provides a 'Finance form' Block
 *
 * @Block(
 *   id = "finance_block",
 *   admin_label = @Translation("Finance form block"),
 * )
 */

namespace Drupal\aljabr_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class FinanceFormBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
      $output = \Drupal::formBuilder()->getForm('Drupal\aljabr_custom\Form\AlJabrFinanceForm');

   			
    return $output;
  }
}