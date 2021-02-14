
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
    <h1 id="login-header">Login</h1>

    <div id="login-error-msg-container">
      <p id="login-error-msg">Sorry, you entered an invalid username or passowrd.</p>
    </div>

    <form action="login_auth.php" method="POST" id="login-form">
      <input type="text" name="username" id="username-fld" class="login-fld" placeholder="username">
      <input type="password" name="password" id="password-fld" class="login-fld" placeholder="password">
      <input type="submit" name="login" value="login" id="form-submit">
    </form>
  </main>
  <script defer src="js/login-auth.js"></script>
</body>
</html>