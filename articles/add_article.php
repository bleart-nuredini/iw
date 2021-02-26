<?php
  require_once '../etc/login_data.php';
  
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal error");
  session_start();

  if (isset($_POST['title-fld'])    &&
      isset($_POST['content-fld'])  &&
      isset($_POST['keywords-fld']) &&
      isset($_POST['summary-fld'])  &&
      isset($_POST['post-btn'])     &&
      isset($_SESSION['ui'])) {
    $title    = $_POST['title-fld'];
    $content  = $_POST['content-fld'];
    $user_id  = $_SESSION['ui'];
    $keywords = $_POST['keywords-fld'];
    $date     = date('Y-m-d');
    $summary  = $_POST['summary-fld'];

    // query for insertion
    $q = "INSERT INTO article VALUES
          (NULL, '$title', '$content',$user_id,'$keywords','$date','$summary')";
    $res = $conn->query($q);
    $article_id = $conn->insert_id;
    if (!$res) die("Database could not be accessed");

    $tpl = file_get_contents("article_tpl.php");
    $new_article = str_replace("{article_id}", $article_id, $tpl);
    $new_article_name = $article_id.".php";
    
    $fp = fopen($new_article_name, "w");
    fwrite($fp, $new_article);
    fclose($fp);

    header("Location:../articles.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add an article</title>
  <link rel="stylesheet" type="text/css" href="../styles/style.css">
  <?php include '../components/fonts.php' ?>
</head>
<body>
  <?php include 'article-nav.php' ?>

  <div class="container">
    <h1 style="color:white;">Post an article</h1>
    <form action='add_article.php' method='POST' id="article-form">
      <input type="text" name="title-fld" placeholder="Title. . ."><br>
      <textarea name="content-fld" placeholder="Content. . ." rows="20" cols="100"></textarea><br>
      <textarea name="keywords-fld" placeholder="Keywords. . ." rows="5" cols="100"></textarea><br>
      <textarea name="summary-fld" placeholder="Summary. . ." rows="5" cols="100"></textarea><br>
      <input type="submit" name="post-btn" value="Post"><br>
    </form>
  </div>

  <?php include '../components/footer.php' ?>
</body>
</html>
