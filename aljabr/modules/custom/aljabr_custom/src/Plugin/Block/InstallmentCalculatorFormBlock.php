<?php
/**
 * Provides a 'Installment calculator form' Block
 *
 * @Block(
 *   id = "installment_calculator",
 *   admin_label = @Translation("Installment calculator form block"),
 * )
 */

namespace Drupal\aljabr_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class InstallmentCalculatorFormBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
      $output = \Drupal::formBuilder()->getForm('Drupal\aljabr_custom\Form\AlJabrInstallmentCalculatorForm');

   			
    return $output;
  }
}