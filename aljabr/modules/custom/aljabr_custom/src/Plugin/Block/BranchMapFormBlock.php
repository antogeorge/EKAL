<?php
/**
 * Provides a 'Branch map form' Block
 *
 * @Block(
 *   id = "branch_map_block",
 *   admin_label = @Translation("Branch map form block"),
 * )
 */

namespace Drupal\aljabr_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class BranchMapFormBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
      $output = \Drupal::formBuilder()->getForm('Drupal\aljabr_custom\Form\AlJabrFinanceBranchMapForm');

   			
    return $output;
  }
}