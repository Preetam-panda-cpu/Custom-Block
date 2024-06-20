<?php
/**
 * @file
 * Contains \Drupal\wellcome\Plugin\Block\XaiBlock.
 */

namespace Drupal\wellcome\Plugin\Block;

use Drupal\Core\Block\BlockBase;


/**
 * Provides a 'wellcome' block.
 *
 * @Block(
 *   id = "wellcome_block",
 *   admin_label = @Translation("wellcome block"),
 *   category = @Translation("Custom wellcome block example")
 * )
 */
class WellcomeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => 'Wellcome to D10.',
    );
  }
}
