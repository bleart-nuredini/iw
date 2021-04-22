<?php
  /** 
   * Script for login authentication.
   */
  include 'classes/user.php';

  session_start();

  $u = new User();

  if (isset($_POST['login'])) {
    $un = $_POST['username'];
    $pw = $_POST['password'];

    // if login valdiation fails, set the error message
    if (!$u->validate_login($un, $pw)) {
      $_SESSION['login_error_message'] = 1;
      header("Location:login.php");
    } else {                    // otherwise
      $_SESSION['un']   = $un;  // set the session username
      $_SESSION['pw']   = $pw;  // and session password, id, and role
      $_SESSION['ui']   = $u->get_id($un, $pw);
      $_SESSION['role'] = $u->get_role($_SESSION['ui']);
      header("Location:index.php");
    }
  }
?>
