<?php
class User {
  public $user;
  public function __construct($objUser) {
    $this->user = $objUser;
  }
}
class DependencyClass {
  public $uname;
  public function __construct(User $user) {
    $this->uname = $user->user;
  }
  public function getUser() {
    return $this->uname;
  }
}

class B {
  public $uname;
  public function __construct(DependencyClass $user) {
    $this->uname = $user->getUser();
  }

  public function showuser() {
    echo "<pre>", var_dump($this->uname),"</pre>";
    // echo  "$this->uname found!";
  }
}
$user = new stdClass();
$user->name= 'Test';
$user->age = 21;
$_user = new User($user);
$a_class = new DependencyClass($_user);
$dp = new B($a_class);
$dp->showuser();

