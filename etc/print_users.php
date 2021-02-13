<?php
  include '../login_data.php';

  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal error");

  $res = $conn->query("SELECT * FROM user");
  if (!$res) die("Could not access the database");

  $m = 4;   // number of columns
  echo "<table><th>id</th><th>username</th><th>email</th><th>password</th>";
  for ($i = 0; $i < $res->num_rows; $i++) {
    $row = $res->fetch_array(MYSQLI_NUM);

    echo "<tr>";

    for ($j = 0; $j < $m; $j++) {
      echo "<td>$row[$j]</td>";
    }

    echo "<tr>";
  }
  echo "</table>";
?>
