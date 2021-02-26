<?php
  /** 
   * Script for login authentication.
   */
  include 'login_data.php';
  include 'classes/user.php';

  $u = new User();

  if (isset($_POST['username']) &&
      isset($_POST['password']) &&
      isset($_POST['email'])    &&
      isset($_POST['register'])) {
    $un    = $_POST['username']; 
    $email = $_POST['email'];
    $pw    = $_POST['password'];
    $role  = $_POST['role'];

    $u->insert_to_db($un, $email, $pw, $role);
  }
  
  // send the user to the login page to use the newly created account
  header("Location:login.php");
  $res->close();
  $conn->close();
?>
