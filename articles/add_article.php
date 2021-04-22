<?php
require_once '../etc/login_data.php';
include '../classes/db_connector.php';
include '../core/init.php';

session_start();
$dbc  = new DBConnector();
$conn = $dbc->get_connection();

if (isset($_POST['article-title'])    &&
    isset($_POST['article-content'])  &&
    isset($_POST['article-keywords']) &&
    isset($_POST['article-summary'])  &&
    isset($_POST['article-submit'])     &&
    isset($_SESSION['ui'])) {
  $title    = $_POST['article-title'];
  $content  = $_POST['article-content'];
  $user_id  = $_SESSION['ui'];
  $keywords = $_POST['article-keywords'];
  $date     = date('Y-m-d');
  $summary  = $_POST['article-summary'];
  // $image    = ;
  // echo $image;
    
  // query for insertion
  $q = "INSERT INTO article VALUES
        (NULL, '$title', '$content',$user_id,'$keywords','$date','$summary')";
  $res = $conn->query($q);
  $article_id = $conn->insert_id;
  if (!$res) die("Database could not be accessed");

  // upload image to article/uploads
  $img_ext = explode('.', $_FILES['article-image']['name'])[1];
  move_uploaded_file($_FILES['article-image']['tmp_name'], '/var/www/html/iw/articles/uploads/article-img' . $article_id . '.' . $img_ext);

  header("Location:../articles.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add an article</title>
  <link rel="stylesheet" href="../styles/style.css"/>
</head>
<body>
  <?php include '../components/nav.php'; ?>

  <div class="container">
    <h1 style="color:white;">Post an article</h1>
    <form action='add_article.php' method='POST' id="article-form" enctype="multipart/form-data">
      <input type="text" name="article-title" placeholder="Title. . ."><br>
      <textarea name="article-content" placeholder="Content. . ." rows="20" cols="100"></textarea><br>
      <textarea name="article-keywords" placeholder="Keywords. . ." rows="5" cols="100"></textarea><br>
      <textarea name="article-summary" placeholder="Summary. . ." rows="5" cols="100"></textarea><br>
      <input type="file" name="article-image"><br>
      <input type="submit" name="article-submit" id="submit-fld" value="Post"><br>
    </form>
  </div>

  <?php include '../components/footer.php' ?>
</body>
</html>
