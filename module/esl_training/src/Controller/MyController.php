<?php

namespace Drupal\esl_training\Controller;

use Drupal\Core\Controller\ControllerBase;

class MyController extends ControllerBase {
  public function sayHello($name) {
    return array("#markup" => $this->greetings(). " $name, how are you.");
  }

  private function greetings(){

     if(date("H") < 12){
       return "Good morning";
     } elseif(date("H") > 11 && date("H") < 18){
       return "Good afternoon";
     } elseif(date("H") > 17){
       return "Good evening";
     }

  }
}
