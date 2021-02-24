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
    require_once 'etc/login_data.php';
    include_once 'components/nav.php';
    include_once 'classes/user.php';

    session_start();

    // create database connection and execute query
    $u = new User();
    $res = $u->exec_query("SELECT * FROM article");

    // output result
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
