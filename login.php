<?php
  session_start();
  if (isset($_SESSION['ui'])) header("Location:index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/favicon.ico">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="styles/login-style.css">
</head>
<body>
  <main id="main-container">
    <a href="index.php"><img src="images/home-logo.png" alt="Go back to the main page"></a>
    
    <?php
      if ($_SESSION['login_error_message']) {
    ?>
        <div id="login-error-msg-container">
          <p id="login-error-msg">Sorry, your username/password is not correct.</p>
        </div>
    <?php    
        unset($_SESSION['login_error_message']);
      }
    ?>

    <form action="login_auth.php" method="POST" id="login-form">
      <input type="text" name="username" id="username-fld" class="login-fld" placeholder="username">
      <input type="password" name="password" id="password-fld" class="login-fld" placeholder="password">
      <input type="submit" name="login" value="login" id="form-submit">
    </form>
  </main>
</body>
</html>
