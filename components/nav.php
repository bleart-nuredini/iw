<?php
  /**
   * Navigation bar for every page except the 
   * article pages. If the user is logged in and 
   * his username is storen in $_SESSION, then 
   * show the greeting and the logout button at 
   * the right side of the navbar. If the is not 
   * logged in and his username is not stored in 
   * $_SESSION, then don't show the greeting message,
   * don't show the logout button -- but show the 
   * buttons for loging in or for sigin up.
   */
  session_start();

  $username = $_SESSION['un'];
  $role     = $_SESSION['role'];
  if (isset($username)) {
    $greeting      = "Welcome, " . $username;
    $login_msg     = "";
    $register_msg  = "";
    $logout_msg    = "Logout";
  } else {                       // if user is not logged in
    $greeting      = "";         // set greeting to the empty string
    $login_msg     = "Login";    // show the login button
    $register_msg  = "Register"; // show the register button
    $logout_msg    = "";         // don't show the logout button
  }

  if (isset($username) && isset($role) && $role == 'admin') {
    $dashboard_msg = "Dashboard";
  } else {                // if the user is not an admin 
    $dashboard_msg = "";  // don't show the dashboard button
  }
?>

<nav>
  <ul class="nav-bar">
    <li><a href="index.php">Home</a></li>
    <li><a href="scroller.php">Scroller</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="articles.php">Articles</a></li>
    <li><a href="https://github.com/bleart-nuredini/iw">GitHub</a></li>
    <li><a href="login.php">    <?php echo $login_msg     ?></a></li>
    <li><a href="register.php"> <?php echo $register_msg  ?></a></li>
  </ul>
  <ul class="nav-side">
    <li>
      <a href="dashboard.php"><?php echo $dashboard_msg ?></a>
    </li>
    <li>
      <a href="logout.php"><?php echo $logout_msg ?></a>
    </li>
    <li>
      <span style="color: white;"><?php echo "$greeting $user_id" ?></span>
    </li>
  </ul>
</nav>
