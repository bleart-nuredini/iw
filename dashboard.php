<?php
  require_once 'login_data.php';

  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal error");

  $res = $conn->query("SELECT * FROM user");
  if (!$res) die("Could not access the database");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <?php include_once 'components/fonts.php' ?>
</head>
<body>
  <?php include_once 'components/nav.php' ?>
  <div class="container">
    <?php
      $m = 5;   // number of columns
      echo "<table class='user-table'><th>id</th><th>username</th><th>email</th><th>password</th><th>role</th>";
      for ($i = 0; $i < $res->num_rows; $i++) {
        $row = $res->fetch_array(MYSQLI_NUM);

        echo "<tr>";

        for ($j = 0; $j < $m; $j++) {
          echo "<td><p>$row[$j]</p></td>";
        }

        echo "<tr>";
      }
      echo "</table>";
    ?>
  </div>
</body>
</html>

<?php
  $conn->close();
  $res->close();
?>
