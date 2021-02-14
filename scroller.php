<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroller</title>
    <link rel="stylesheet" type="text/css" href="styles/slider-style.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- For fonts -->
    <?php include 'components/fonts.php' ?>
  </head>
  <body>

    <?php include 'components/nav.php' ?>

    <div class="main">
      <div class="album-description">
        <div class="album-desc-item visible">
          <h2 class="album-title">Youth & Young Manhood</h2>
          <p>The album was recorded between Sound City Studios in Van Nuys, Shangri-La Studios in Malibu and Ocean Way Nashville.[1] "Molly's Chambers," "Wasted Time" and "California Waiting" were all released as singles. "Spiral Staircase" featured on the PS3 game MotorStorm. "Red Morning Light" was also featured on a Ford Focus commercial, and as the opening song in FIFA 2004 by EA Sports. "Holy Roller Novocaine" was featured in the film Talladega Nights: The Ballad of Ricky Bobby as well as on the soundtrack.</p>
        </div>
        <div class="album-desc-item invisible">
          <h2 class="album-title">Only by the Night</h2>
          <p>Only by the Night (stylized as >ONLY_BY_THE_NIGHT>) is the fourth studio album by American alternative rock band Kings of Leon, released worldwide in September 2008. Writing for the band's fourth album commenced just days after the release of their third, Because of the Times. The album was recorded by producers Jacquire King and Angelo Petraglia in April 2008 at Nashville's Blackbird Studios.</p>
        </div>
        <div class="album-desc-item invisible">
          <h2 class="album-title">Come Around Sundown</h2>
          <p>Come Around Sundown is the fifth studio album by American rock band Kings of Leon, released in Ireland, Australia and Germany on October 15, 2010, followed by releases in the UK on October 18 and North America on October 19.[1][2] The official album covers and track list were revealed on September 3. The lead single, "Radioactive", along with its accompanying music video, premiered on September 8, on the Kings' official website. The following day, it received its official radio premiere on Australian radio.</p>
        </div>
      </div>

      <div class="scroller">
        <img id="back-btn" src="images/back-logo.png" width="50" alt="Back">
        <img id="next-btn" src="images/next-logo.png" width="50" alt="Next">
        <div class="scroller-item visible"> 
          <img src="images/youth-and-young-manhood.jpg" alt="Youth and Young Manhood">
        </div>
        <div class="scroller-item invisible">
          <img src="images/only-by-the-night.jpg" alt="Only by the Night">
        </div>
        <div class="scroller-item invisible">
          <img src="images/come-around-sundown.jpg" alt="Come around the Sundown">
        </div>
      </div>
    </div>

    <?php include 'components/footer.php' ?>

    <!-- Script for the scroller -->
    <script>
      var scrollerElements = document.getElementsByClassName('scroller-item');
      var textElements = document.getElementsByClassName('album-desc-item');
      var numOfImages = 3; // number of images to be displayed in the scroller
      var i = 0;

      // next button
      document.getElementById('next-btn').addEventListener('click', function (event) {
        makeInvisible(i);
        if (++i % numOfImages === 0) i = 0;
        makeVisible(i);
      });
      
      // back button
      document.getElementById('back-btn').addEventListener('click', function (event) {
        makeInvisible(i);
        if (--i < 0) i = numOfImages - 1;
        makeVisible(i);
      });

      function makeInvisible(number) {
        // change the image
        scrollerElements[i].classList.remove('visible');
        scrollerElements[i].classList.add('invisible');
        // change the text
        textElements[i].classList.remove('visible');
        textElements[i].classList.add('invisible');
      }

      function makeVisible(i) {
        scrollerElements[i].classList.remove('invisible');
        scrollerElements[i].classList.add('visible');
        textElements[i].classList.remove('invisible');
        textElements[i].classList.add('visible');
      }
    </script>
  </body>
</html>
