<?php
  require_once '../etc/login_data.php';
  require_once '../classes/user.php';

  $u = new User();
  $res = $u->exec_query("SELECT * FROM article WHERE article_id=1");
  if (!$res) die("Could not access the database");

  $article = $res->fetch_array(MYSQLI_ASSOC);
  $title   = $article['title'];
  $content = $article['content'];
  $date    = $article['date'];
  $author  = $u->get_author($article['user_id']);
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
