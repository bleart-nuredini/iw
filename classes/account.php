<?php

   class Account {
      
    public $user_id;
    public $username;
    public $password;
    public $email;
    public $role;

    public function __construct($ui, $un, $pw, $email, $role) {
      $this->user_id = $ui;
      $this->username = $un;
      $this->password = $pw;
      $this->email = $email;
      $this->role = $role;
    }
    public function getUserID() {
      echo $this->user_id;
    }
    
    public function getUsername() {
      return $this->username;
    }
    
    public function getEmail() {
      return $this->email;
    }
      // public abstract function getRole();
  }
?>