<?php
/**
 * Provides a 'Comments form' Block
 *
 * @Block(
 *   id = "comments_form_block",
 *   admin_label = @Translation("Comments form block"),
 * )
 */

namespace Drupal\aljabr_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class CommentsFormBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
      $output = \Drupal::formBuilder()->getForm('Drupal\aljabr_custom\Form\AlJabrCommentsForm');

   			
    return $output;
  }
}