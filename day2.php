<?php
class house {
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

$myhouse = new house();
// $myhouse->show_house();
$myhouse->doors = 3;
$myhouse->windows = 14;
$myhouse->show_house();

