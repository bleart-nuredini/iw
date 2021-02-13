<?php
  session_start();
  $username = $_SESSION['un'];
  if (isset($username)) $greeting = "Welcome, " . $username;
  else $greeting = "";
?>

<nav>
  <ul class="nav-bar">
    <li><a href="index.php">Home</a></li>
    <li><a href="scroller.php">Scroller</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="register.php">Register</a></li>
    <li><a href="https://github.com/bleart-nuredini/iw">GitHub</a></li>
    <li><a href="./logout.php">Log out</a></li>
  </ul>
  <ul class="nav-side">
    <li>
      <span style="color: white;"><?php echo $greeting ?></span>
    </li>
  </ul>
</nav>
