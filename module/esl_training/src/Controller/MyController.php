<?php

namespace Drupal\esl_training\Controller;

use Drupal\Core\Controller\ControllerBase;

class MyController extends ControllerBase {
  public function sayHello($name) {
    return array("#markup" => "Hi $name, how are you.");
  }
}
