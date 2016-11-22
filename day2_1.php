<?php

interface house {
  public function show_house();
}
class base_house implements house {
  var $windows;
  var $doors;
  // var $rooms;

  // public function set_doors($num_door) {

  //   $this->doors =  $num_door;
  // }
  public function __set($property, $value) {
    if ( property_exists($this, $property)){
      $this->$property = $value;
    }
  }

  public function __get($property) {
    if ( property_exists($this, $property)){
      return $this->$property;
    }
  }

  public function set_windows($num_windows) {
    $this->windows =  $num_windows;
  }

  public function show_house() {
    echo "This house has " . $this->doors . " doors and " . $this->windows . " windows.";
  }
}

class luxury_house extends base_house {
  public function show_house() {
    echo "This is a luxury house which has " . $this->doors . " doors and " . $this->windows . " windows.";
  }
}

class budget_house extends base_house {
  public function show_house() {
    echo "This is a budget house which has " . $this->doors . " doors and " . $this->windows . " windows.";
  }
}

$myhouse = new luxury_house();
// $myhouse->show_house();
$myhouse->doors = 3;
$myhouse->windows = 14;
$myhouse->show_house();

