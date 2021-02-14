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
    $un    = htmlspecialchars($_POST['username']);
    $pw    = htmlspecialchars($_POST['email']); 
        echo "<script>
                const loginErrorMsg = document.getElementById('login-error-msg');
                loginErrorMsg.style.opacity = 1;
              </script>";
    for ($i = 0; $i < $res->num_rows; $i++) {
      $row = $res->fetch_array(MYSQLI_NUM);



      if (isInDB($row)) {
        header("Location:index.php");
      } else {
      }
    }
  }

  function isInDB($row) {
    if ($row[1] === $_POST['username'] && $row[3] === $_POST['password']) {
      return true;
    }

    return false;
  }
?>
