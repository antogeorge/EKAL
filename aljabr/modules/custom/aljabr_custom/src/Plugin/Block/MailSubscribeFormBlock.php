<?php
/**
 * Provides a 'Mail Subscribe form' Block
 *
 * @Block(
 *   id = "mailsubscribe_form_block",
 *   admin_label = @Translation("Mail subscribe form block"),
 * )
 */

namespace Drupal\aljabr_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class MailSubscribeFormBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
      $output = \Drupal::formBuilder()->getForm('Drupal\aljabr_custom\Form\AlJabrFinanceMailList');

   			
    return $output;
  }
}