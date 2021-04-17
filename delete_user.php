<?php
// init.php starts the session
require_once 'core/init.php';
require_once 'classes/db_connector.php';

if (isset($_GET['ui'])) {
  $dbc = new DBConnector();
  $conn = $dbc->get_connection();
  $res  = $conn->query("DELETE FROM user WHERE user_id=" . $_GET['ui']);
}

header("Location: dashboard.php");
?>