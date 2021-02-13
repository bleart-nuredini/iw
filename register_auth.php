<?php
  include 'login_data.php';

  //start_session();
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal error");

  if (isset($_POST['username']) &&
      isset($_POST['password']) &&
      isset($_POST['email'])    &&
      isset($_POST['register'])) {
    $un    = htmlspecialchars($_POST['username']); 
    $pw    = htmlspecialchars($_POST['email']); 
    $email = htmlspecialchars($_POST['password']); 

    echo "$un<br>$pw<br>$email";
    $res = $conn->query("INSERT INTO user VALUES(NULL, '$un', '$pw', '$email')");
    if (!$res) die("Could not access the database");
    /*
    $stmt = $conn->prepare("INSERT INTO user VALUES(?,?,?,?)");
    $stmt->bind_param('ssss', NULL, $un, $email, $pw);
    $stmt->execute();
    $stmt->close();
    */
  }
  
  header("Location:index.php");
  $res->close();
  $conn->close();
?>
