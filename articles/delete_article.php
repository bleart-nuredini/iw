<?php
include '../classes/db_connector.php';

if (isset($_GET['id'])) {
  $dbc = new DBConnector();
  $conn = $dbc->get_connection();

  $res = $conn->query("DELETE FROM article WHERE article_id=". $_GET['id'] . "");
  if (!$res) die("Database could not be accessed");
}

header("Location: ../articles.php");
?>