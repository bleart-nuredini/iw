<?php
  /**
   * Navigation bar for every page except the 
   * article pages. If the user is logged in and 
   * his username is stored in $_SESSION, then 
   * show the greeting and the logout button at 
   * the right side of the navbar. If the user is not 
   * logged in and his username is not stored in 
   * $_SESSION, then don't show the greeting message
   * and don't show the logout button -- but show the 
   * buttons for loging in or for sigin up.
   */
  session_start();

  $user_id  = $_SESSION['ui'];
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
    $user_id       = "";
  }

  if (isset($username) && isset($role) && $role == 'admin') {
    $dashboard_msg = "Dashboard";
  } else {                // if the user is not an admin,
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
    <li><a href="login.php">     <?php echo $login_msg     ?></a></li>
    <li><a href="register.html"> <?php echo $register_msg  ?></a></li>
  </ul>
  <div class="nav-side">
    <span style="color: white;"><?php echo "$greeting" ?></span>

  <?php
  if (isset($username)) {
    echo "<div id='user-dropdown'>
            <img src='images/user.png' style='height: 50px'>
            <ul id='user-dropdown-content'>
              <li><a href='dashboard.php'>$dashboard_msg</a></li>
              <li><a href='logout.php'>$logout_msg</a></li>
            </ul>
          </div>";
    }
  ?>
  </div>
</nav>
