<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="styles/style.css"/>
  <style>
    body {
      margin: 0 0;
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6) ), url('images/bg-img2.jpg');
      background-color: black;
    }

    main {
      margin: 10vw 25vw;
      color: white;
    }

    main h1 {
      font-size: 250%;    
    }

    main p {
      font-size: 125%;
    }

    @media (max-width: 576px) {
      .nav-bar {
        display: flex;
        flex-direction: column;
        margin: 0 auto;
      }

      p {
        width: 200px;
        size: 10px;
      }

      footer {
        opacity: 0;
      }
    }
  </style>

  <!-- For fonts -->
  <?php include 'components/fonts.php' ?>
</head>
<body>
  
  <?php include 'components/nav.php' ?>

  <main>
    <h1 id="about">About</h1>
    <p>Kings of Leon is an American rock band that formed in Nashville, 
    Tennessee, in 1999.<br> The band is composed of brothers Caleb, Nathan and 
    Jared Followill with their cousin<br> Matthew Followill.
    The band's early music was a blend of Southern rock and blues<br> influences, 
    but it has gradually evolved throughout the years to include a variety of<br> 
    genres and a more alternative, arena rock sound. Kings of Leon achieved 
    initial success<br> in the United Kingdom with nine Top 40 singles, two BRIT Awards 
    in 2008, and all three of<br> the band's albums at the time peaked in the top five 
    of the UK Albums Chart.<br> Their third album, Because of the Times, also reached 
    the number one spot.<br>
    After the release of Only by the Night in September 2008, the band achieved 
    chart<br> success in the United States. The singles "Sex on Fire", "Use Somebody", 
    and "Notion"<br> all peaked at number one on the Hot Modern Rock Tracks chart. The 
    album was their first Platinum-selling album in the United States, and was also 
    the best-selling album of 2008 in Australia, being certified platinum nine times.<br>
    The band's fifth album, Come Around Sundown, was released on October 18, 2010. <br>
    Their sixth album, Mechanical Bull, was released on September 24, 2013.<br> The 
    seventh studio album, Walls, was released on October 14, 2016. The group has <br>
    12 Grammy Award nominations, including 4 wins.</p>
  </main>

  <?php include 'components/footer.php' ?>

</body>
</html>
