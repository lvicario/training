<?php

namespace Drupal\esl_training\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
*
*
* @Block(
*   id="esl_custom_block",
*   admin_label = "ESL block"
* )
*
 */

class CustomBlock extends BlockBase {

  public function build() {
    return array("#markup" => "Block content");
  }

}
