<?php
  if (isset($_POST['input'])) {
    session_start();
    $_SESSION['input'] = $_POST['input'];
    echo "you entered " . $_SESSION['input'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form>
    <a href="./tmp2.php">next</a>
  </from>
</body>
</html>