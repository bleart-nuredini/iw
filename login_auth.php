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

    for ($i = 0; $i < $res->num_rows; $i++) {
      $row = $res->fetch_array(MYSQLI_ASSOC);

      if (isInDB($row)) {
        $_SESSION['un'] = $_POST['username'];
        $_SESSION['pw'] = $_POST['password'];
        // get user ID from the given row of data
        $_SESSION['ui']   = $row['user_id'];
        $_SESSION['role'] = $row['role'];
        header("Location:index.php");
        break;
      }

      header("Location:login.php");
    }
/*
    echo "<script>
            const loginButton = document.getElementById('form-submit');
            const loginErrorMsg = document.getElementById('login-error-msg');

            alert('Wrong combination');
            
            loginButton.addEventListener('click', (e) => {
              //setTimeout(donothing, 0);
              alert('Wrong info');
              loginErrorMsg.style.opacity = 1;
            });
            
          </script>";

    */
  }

  // returns true if the given parameter is in the database
  function isInDB($row) {
    if ($row['username'] === $_POST['username'] && 
        $row['password'] === $_POST['password']) {
      return true;
    }

    return false;
  }
?>
