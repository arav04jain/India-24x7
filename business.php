<?php
  include 'database_connection.php';
  $res = mysqli_query($mysqli,"Delete FROM articles where reports >= 1000");
  if(isset($_POST['button1'])) {
     $a=$_POST['button1'];

     
     $res = mysqli_query($mysqli,"SELECT reports FROM articles where id= ".$a);
     $x=intval(implode("",mysqli_fetch_assoc($res)));

     if($x!==""){
 
      $result=intval($x);
      $repla=$result+1;
      $res = mysqli_query($mysqli,"UPDATE `articles` SET `reports`=".$repla." WHERE id=".$a);
     }
     

  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Business News</title>
  <link rel="icon" type="image/x-icon" href="assets/imgs/favicon1.ico" sizes="64x64">
  <link rel="stylesheet" href="assets/css/bootstrap.css">


</head>
<style>
  .image_displayed {
    width: auto !important;
    height: "100px" !important;
    padding: 20px 25px 20px 25px;

  }
</style>

<body style="background-color: whitesmoke;">
  <!--Navbar-->
  <div style="background-color: whitesmoke;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">

        <img src="assets/imgs/favicon2.ico" alt="" height="60px" width="40px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">


            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                style="color: blue; font-weight: 500;">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                style="color: blue; font-weight: 500;">
                News
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="national.php">National News
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                  </a></li>
                <li><a class="dropdown-item" href="politics.php">Political News <span
                      class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span></a></li>
                <li><a class="dropdown-item" href="international.php">International News <span
                      class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span></a></li>
                <li><a class="dropdown-item" href="business.php">Business News <span
                      class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span></a></li>
                <li><a class="dropdown-item" href="sports.php">Sports News <span class="spinner-grow spinner-grow-sm"
                      role="status" aria-hidden="true"></span></a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="write_article.php" style="color: blue; font-weight: 500;">Write an Article</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="search_article.php" style="color: blue; font-weight: 500;">Search an
                Article</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
    <hr style=" border: 2.5px dashed red;">
    <hr style=" border: 2.5px dotted blue; ">
  </div>

  <!--content-->
  <h1 style="font-size: 75px; font-weight: 750; color: red; text-align: center;">Business News</h1>
  <br>
  <div style="background-color: blue;">
    <marquee width="100%" direction="left" height="25px" scrollamount="10">
      <p style="font-size: 20px; color: whitesmoke;">Get the best news on India 24x7</p>
    </marquee>
  </div>
  <br>
  <p id="countdown"
    style="text-align: center; color: blue; font-family: 'Times New Roman', Times, serif; font-weight: 500; font-size: 150%;">
  </p>
  <form action="" method="post">

  <?php
  
 
  echo "<div class=' justify-content-center ' style='display: flex; flex-wrap: wrap;'>";
  $res = mysqli_query($mysqli,"SELECT COUNT(*) FROM articles where subject='Business News';");
  $num=intval(implode(mysqli_fetch_assoc($res)));
  for($x=0;$x<$num;$x++){
    $u="select id from articles where subject= 'Business News' ORDER BY id DESC limit ".$x.",1;";
    $ressss = mysqli_query($mysqli,$u);
    $idts=intval(implode(mysqli_fetch_assoc($ressss)));


    echo "<div class='card' style='width: 25rem; margin: 20px 10px 20px 10px;' style='border-radius: 50px;'>";

    $res = mysqli_query($mysqli,"select image from articles where id=".$idts);
    $result=implode(mysqli_fetch_assoc($res));
    echo"<img
    src='".$result."'class='card-img-top image_displayed' alt='Image Unavailable' style='border-radius: 35px;'>";


    echo "<div class='card-body'>";


    $res = mysqli_query($mysqli,"select heading from articles where id=".$idts);
    $result=implode(mysqli_fetch_assoc($res));
    echo "<h3 class='card-title' style='text-align: center;'>".$result."</h3>";
    echo "<br>";

    $res = mysqli_query($mysqli,"select subject from articles where id=".$idts);
    $result=implode(mysqli_fetch_assoc($res));
    echo "<p class='card-text'>Category: ".$result."</p>";


    $res = mysqli_query($mysqli,"select date from articles where id=".$idts);
    $result=implode(mysqli_fetch_assoc($res));
    echo "<p class='card-text'>Date: ".$result."</p>";


    $res = mysqli_query($mysqli,"select reports from articles where id=".$idts);
    $result=implode(mysqli_fetch_assoc($res));
    echo "<p class='card-text'>Reports: ".$result."</p>";


    $res = mysqli_query($mysqli,"select preview from articles where id=".$idts);
    $result=implode(mysqli_fetch_assoc($res));
    echo "<p class='card-text'>Preview: ".$result."</p>";


    echo "<details>";
      echo "<summary>Read Article</summary>";
      $res = mysqli_query($mysqli,"select content from articles where id=".$idts);
      $result=implode(mysqli_fetch_assoc($res));
      echo "<p>".$result."</p>";
    echo "</details>";
    echo "<br>";
    $res = mysqli_query($mysqli,"select writer from articles where id=".$idts);
    $result=implode(mysqli_fetch_assoc($res));
    echo "<p class='card-text'>-".$result."</p>";
    echo "<br>";
    echo "<button type='submit' class='btn btn-outline-danger' name='button1' value='".$idts."'>Report</button>";
    echo "</div>";
    echo "</div>";
  }
    
  
  echo "</div>"; 

  
  




?>
</form>

  










  </div>
  <br><br>
  <!--Footer-->
  <div style="text-align: center;">
  <p style="text-align: center; font-size: 15px; font-family: sans-serif; font-weight: 300; color: blue;">Copyright © 2023 - All Rights Reserved <br>
    Created By Arav Jain | Phone:91+9953100018 | E-Mail:arav04jain@gmail.com</p>
    
    <img src="assets/imgs/icon_of_developer.jpg" style="text-align: center; border-radius: 500px; " width="64px" height="64px">
    <br><br>
  </div>



  <script src="assets/js/foreover_date.js"></script>
  <script src="assets/js/bootstrap.js"></script>
</body>

</html>