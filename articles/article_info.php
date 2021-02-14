<?php

  class Article {
    $id;
    $title;
    $content;
    $user_id;
    $keywords;
    $date;
    $summary;
    $conn;

    public __construct($id, $t, $con, $ui, $kw, $d, $summ) {
      $this->id      = $id;
      $this->title   = $t;
      $this->content = $con;
      $this->user_id = $ui;
      $this->date    = $d;
      $this->summary = $smm;
    }
    
    // connect to database
    public get_connection() {
      $this->conn = new mysqli($hn, $un, $pw, $db);
      if ($this->conn->connect_error) die("Fatal error");
    }
  }

  // get article id from path
  $path       = $_SERVER['PHP_SELF'];
  $article_id = basename($path, ".php");

  // get article with the specified id
  $res  = $conn->query("SELECT * FROM article WHERE article_id=$article_id");
  if (!$res) die("Could not access the database");

  $article = $res->fetch_array(MYSQLI_ASSOC);
  $title   = $article['title'];
  $content = $article['content'];
?>
