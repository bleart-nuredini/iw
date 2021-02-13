<?php
  include 'login_data.php';

  $m = 4;   // number of columns
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal error");

  $res = $conn->query("SELECT * FROM user");
  if (!$res) die("Could not access the database");

  if (isset($_POST['username']) &&
      isset($_POST['password']) &&
      isset($_POST['login'])) { 
    session_start();
    $_SESSION['un'] = $_POST['username'];
    $_SESSION['pw'] = $_POST['username'];

    for ($i = 0; $i < $res->num_rows; $i++) {
      $row = $res->fetch_array(MYSQLI_NUM);

      if (isInDB($row)) {
        header("Location:index.php");
      }
    }
  }

  // returns true if the given parameter is in the database
  function isInDB($row) {
    if ($row[1] === $_POST['username'] && $row[3] === $_POST['password']) {
      return true;
    }

    return false;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/favicon.ico">
  <title>Kings of Leon - Login</title>
  <link rel="stylesheet" type="text/css" href="styles/login-style.css">
  <!-- <script defer src="js/login-page.js"></script> -->
</head>
<body>
  <main id="main-container">
    <a href="index.php"><img src="images/home-logo.png" alt="Go back to the main page"></a>
    <h1 id="login-header">Login</h1>

    <div id="login-error-msg-container">
      <p id="login-error-msg">Sorry, you entered an invalid username or passowrd.</p>
    </div>

    <form action="login.php" method="POST" id="login-form">
      <input type="text" name="username" id="username-fld" class="login-fld" placeholder="username">
      <input type="password" name="password" id="password-fld" class="login-fld" placeholder="password">
      <input type="submit" name="login" value="login" id="form-submit">
    </form>
  </main>
</body>
</html>
