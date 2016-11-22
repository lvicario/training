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


class childExampleClass extends exampleClass {
  public function show($var) {
    echo "$var : " . $this->$var;
  }
}
$test = new childExampleClass();
$test->name ="Test";
$test->show('name');

$test->age = 12;
$test->qualification = "Ph. of D";
$test->show('qualification');
$test->show('age');
// echo $test->age;
