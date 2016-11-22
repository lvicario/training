<?php
class house {
  var $windows;
  var $doors;
  var $rooms;

  public function set_doors($num_door) {
    $this->doors =  $num_door;
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
$myhouse->set_doors(3);
$myhouse->set_windows(12);
$myhouse->show_house();

