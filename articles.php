<!DOCTYPE>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="styles/style.css"/>
  <title>Articles</title>
  <!-- For fonts -->
  <?php include 'components/fonts.php' ?>
<head>
<body>
  <?php 
    require_once 'login_data.php';
    include_once 'components/nav.php';

    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die("Fatal error");
    $res = $conn->query("SELECT * FROM article");
    if (!$res) die("Database could not be accessed");


    echo "<div class='article-wrapper'>
           <div class='article-summary'>
             <a href='articles/add_article.php'>
               <img id='plus-btn' src='images/plus-btn.png' height='50'>
             </a>
           </div>";
    for ($i = 0; $i < $res->num_rows; $i++) {
      $article = $res->fetch_array(MYSQLI_ASSOC);
      $id      = $article['article_id'];
      $title   = $article['title'];
      $summary = $article['summary'];

      echo "<div class='article-summary'>";
      echo "<a href='articles/$id.php'><h3>$title</h3>";
      echo "<p>$summary</p></h3></a>";
      echo "</div>";
    }

    echo "</div>";

    include_once './components/footer.php';
  ?>
</body>
</html>
