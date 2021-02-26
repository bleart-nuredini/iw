<?php
  require_once 'classes/user.php';

  $u = new User();
  $res = $u->exec_query("SELECT * FROM user");
  if (!$res) die("Could not access DB");

  $admins = $u->get_num_of_admins();
  $users  = $u->get_num_of_users();
  $num_of_articles = $u->get_num_of_articles();
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

  <div class="table-container">
    <?php
      // table of users
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

      // table for extra information
      echo "<table class='info-table'><th>Number of users</th><th>Number of admins</th><th>Number of articles</th>
              <tr>
                <td>$users</td>
                <td>$admins</td>
                <td>$num_of_articles</td>
              <tr>
            </table>";     
    ?>
  </div>

</body>
</html>

<?php
  $res->close();
?>