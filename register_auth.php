<?php
  include 'login_data.php';
  include 'classes/user.php';

  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal error");

  if (isset($_POST['username']) &&
      isset($_POST['password']) &&
      isset($_POST['email'])    &&
      isset($_POST['register'])) {
    $un    = htmlspecialchars($_POST['username']); 
    $email = htmlspecialchars($_POST['email']); 
    $pw    = htmlspecialchars($_POST['password']);

    echo "$un<br>$pw<br>$email";
    $res = $conn->query("INSERT INTO user VALUES(NULL, '$un', '$email', '$pw', NULL)");
    if (!$res) die("Could not access the database");

    $user = new SimpleUser($conn->insert_id, '$un', '$email', '$pw', 'simple_user');

    /*
    $stmt = $conn->prepare("INSERT INTO user VALUES(?,?,?,?)");
    $stmt->bind_param('ssss', NULL, $un, $email, $pw);
    $stmt->execute();
    $stmt->close();
    */
  }
  
  // send the user to the login page to use the newly 
  // created account
  header("Location:login.php");
  $res->close();
  $conn->close();
?>
