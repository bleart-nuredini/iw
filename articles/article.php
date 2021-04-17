<?php
require_once '../core/init.php';
require_once '../etc/login_data.php';
require_once '../classes/user.php';

$u = new User();
$id = $_GET['id'];
$res = $u->exec_query("SELECT * FROM article WHERE article_id=" . $id . "");

$article = $res->fetch_array(MYSQLI_ASSOC);
$title   = $article['title'];
$content = $article['content'];
$date    = $article['date'];
$author  = $u->get_author($article['user_id']);
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title ?></title>
  <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>
  <?php include_once '../components/nav.php'; ?>

  <div class="article-container">
    <div class="article-container__title">
      <h1 style='color:white;'><?php echo $title ?></h1>
      <?php if (isset($_SESSION['un'])) { ?>
        <a href="delete_article.php?id=<?php echo $id; ?>">
          <img src="<?php echo $root . '/images/trash.png'; ?>" class="article-container__trash-icon" alt="delete article">
        </a>
      <?php } ?>
    </div>
    <div class="article-info">
      <h4><?php echo $date   ?></h4>
      <h4><?php echo $author ?></h4>
    </div>
    <p style='color:white;'><?php echo $content ?></p>;
  </div>

  <?php include_once '../components/footer.php'; ?>
</body>  
</html>

