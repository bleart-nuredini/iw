<?php
  require_once '../etc/login_data.php';

  // connect to database
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal error");

  // get article with the specified id
  $res  = $conn->query("SELECT * FROM article WHERE article_id=2");
  if (!$res) die("Could not access the database");

  $article = $res->fetch_array(MYSQLI_ASSOC);
  $title   = $article['title'];
  $content = $article['content'];
  $date    = $article['date'];
  $author  = get_author($conn, $article['user_id']);

  // returns a username from a user_id
  function get_author($conn, $user_id) {
    $q = "SELECT username FROM user WHERE user_id = $user_id";
    $result = $conn->query($q);
    if (!$result) die("Could not access database");
    $row = $result->fetch_array(MYSQLI_ASSOC);

    return $row["username"];
  }
?>

<!DOCTYPE>
<html>
<head>
  <title><?php echo $title ?></title>
  <link rel="stylesheet" type="text/css" href="../styles/style.css">
  <?php include_once '../components/fonts.php'; ?>
</head>
<body>
  <?php include_once 'article-nav.php'; ?>

  <div class="article-container">
    <h1 style='color:white;'><?php echo $title ?></h1>
    <div class="article-info">
      <h4><?php echo $date   ?></h4>
      <h4><?php echo $author ?></h4>
    </div>
    <p style='color:white;'><?php echo $content ?></p>;
  </div>

  <?php include_once '../components/footer.php'; ?>
</body>  
</html>
