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
</head>
<body>
  <?php include_once 'components/nav.php' ?>

  <div class="table-container">
    <?php
    // table of users
    $m = 5;   // number of columns
    echo "<table class='user-table'><th>id</th><th>username</th><th>email</th><th>password</th><th>role</th><th></th>";
    for ($i = 0; $i < $res->num_rows; $i++) {
      $row = $res->fetch_array(MYSQLI_NUM);

      echo "<tr>";
      for ($j = 0; $j < $m; $j++) {
        echo "<td>$row[$j]</td>";
      } ?>
        <td>
          <a href="<?php echo $root . "/delete_user.php?ui=$row[0]"; ?>">
            <img src="<?php echo $root . '/images/trash.png'; ?>" alt="delete user" class="article-container__trash-icon">
          </a>
        </td>
      <tr>
    <?php } ?>
      </table>

      <table class='info-table'><th>Number of users</th><th>Number of admins</th><th>Number of articles</th>
        <tr>
          <td><?php echo $users; ?></td>
          <td><?php echo $admins; ?></td>
          <td><?php echo $num_of_articles; ?></td>
        <tr>
      </table>
  </div><!-- End of table container -->

</body>
</html>

<?php $res->close(); ?>