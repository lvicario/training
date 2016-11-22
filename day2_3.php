<?php
class exampleClass{
  public $name;
  private $age;
  protected $qualification;
  public function __set($property, $value) {
    if ( property_exists($this, $property)){
      $this->$property = $value;
    }
  }

  // public function __get($property) {
  //   if ( property_exists($this, $property)){
  //     return $this->$property;
  //   }
  // }
    public function showName() {
      echo "Name : " .$this->name;
    }

    private function showAge() {
      return $this->age;
    }
}

$test = new exampleClass();
$test->name ="Test";
$test->age = 12;
$test->qualificaion = "Ph. of D";
// echo $test->age;
