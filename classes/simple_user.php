<?php
  include 'account.php';
  
  // echo "123<br>";
  // $bleart = new SimpleUser(1, 1, 1, 1, 1);
  // echo $bleart->getUsername();

  $a = new A(2);
  $b = new B();
  echo $a->username;
  echo $a->get_username();

  class A {
    public $username;

    public function __construct($un) {
      $this->username = $un;
    }

    public function get_username() {
      return $this->username;
    }
  }

  class B extends A {
    public function foo() {
      return $this->var;
    }
  }

  class SimpleUser extends Account {

    // public function __construct($ui, $un, $pw, $email, $role) {
    //   parent::__construct($ui, $un, $pw, $email, $role);
    //   // $this->user_id = $ui;
    //   // $this->username = $un;
    //   // $this->password = $pw;
    //   // $this->email = $email;
    //   // $this->role = 'simple_user';
    // }

    public function getRole() {
      $this->user_id = 1;
      return 'simple_user';
    }
  }
?>
