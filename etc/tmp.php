

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form>
    <input type="submit" name="go-btn" value="go" id="go-btn">
  </form>
  <p style="opacity:0;" id="hey-text">heeeey</p>
  <!-- <script src="tmp.js"></script> -->

</body>
</html>
<?php
  require_once '../login_data.php';
  // session_start();
   
  echo "<script>
          const goBtn = document.getElementById('go-btn');
          const heyTxt = document.getElementById('hey-text');

          goBtn.addEventListener('click', (e) => {
              e.preventDefault();
              heyTxt.style.opacity = 1;
          });
        </script>";

 /*
  if (isset($_POST['go-btn'])) {
    echo "<script>
           // e.preventDefault();
            goBtn = document.getElementById('go-btn');
            goBtn.style.opacity = 1;
          </script>";
  }
  */
?>