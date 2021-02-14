<?php
  /**
   * Navigation bar for the article pages.
   * It operates exactly like the other nav
   * component, but contains links that redirect
   * the user to the previous directory, since
   * the articles are stored in the article
   * directory.
   */
  session_start();

  $username = $_SESSION['un'];
  if (isset($username)) {
    $greeting     = "Welcome, " . $username;
    $login_msg    = "";
    $register_msg = "";
    $logout_msg   = "Logout";
  } else {                    // if user is not logged in
    $greeting     = "";       // set greeting to the empty string
    $login_msg    = "Login";
    $register_msg = "Register";
    $logout_msg   = "";       // 
  }
?>

<nav>
  <ul class="nav-bar">
    <li><a href="../index.php">Home</a></li>
    <li><a href="../scroller.php">Scroller</a></li>
    <li><a href="../about.php">About</a></li>
    <li><a href="../articles.php">Articles</a></li>
    <li><a href="../https://github.com/bleart-nuredini/iw">GitHub</a></li>
    <li><a href="../login.php">   <?php echo $login_msg    ?></a></li>
    <li><a href="../register.php"><?php echo $register_msg ?></a></li>
  </ul>
  <ul class="nav-side">
    <li>
      <a href="../logout.php"><?php echo $logout_msg ?></a>
    </li>
    <li>
      <span style="color: white;"><?php echo $greeting ?></span>
    </li>
  </ul>
</nav>
