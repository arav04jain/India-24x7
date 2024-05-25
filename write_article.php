<?php
include 'database_connection.php';
$texttd="";

try{
if(isset($_REQUEST['heading']) && isset($_REQUEST['content']) && isset($_REQUEST['preview']) && isset($_REQUEST['subject']) && isset($_REQUEST['writer']) && isset($_REQUEST['image']))
{





$res = mysqli_query($mysqli,"select id from articles ORDER BY id DESC LIMIT 1");
$result=implode(mysqli_fetch_assoc($res));
$idfa= intval($result+1);

//$xx="INSERT INTO `articles`(`id`, `heading`, `image`, `preview`, `content`, `subject`, `writer`, `date`, `reports`) VALUES ('".$idfa."','".$_REQUEST['heading']."','".$_REQUEST['image']."','".$_REQUEST['preview']."','".$_REQUEST['content']."','".$_REQUEST['subject']."','".$_REQUEST['writer']."','".date('Y/m/d')."',0)'";
$xx="INSERT INTO `articles`(`id`, `heading`, `image`, `preview`, `content`, `subject`, `writer`, `date`, `reports`) VALUES ('".$idfa."','".$_REQUEST['heading']."','".$_REQUEST['image']."','".$_REQUEST['preview']."','".$_REQUEST['content']."','".$_REQUEST['subject']."','".$_REQUEST['writer']."','".date('Y/m/d')."',0)'";

$ress = mysqli_query($mysqli,"INSERT INTO `articles`(`id`, `heading`, `image`, `preview`, `content`, `subject`, `writer`, `date`, `reports`) VALUES ('".$idfa."','".$_REQUEST['heading']."','".$_REQUEST['image']."','".$_REQUEST['preview']."','".$_REQUEST['content']."','".$_REQUEST['subject']."','".$_REQUEST['writer']."','".date('Y/m/d')."',0)");


$texttd="Article Successfully Added <br> In case of a common Image, Heading, Preview, or Content, the Article will not be added <br> In addition to that, if you use speech signs the article will not get added";
}
}catch (\Exception $some){
  $texttd="Some Error occured. This may be due to a common image, heading, preview or content already in the articles";
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Write an Article</title>
  <link rel="icon" type="image/x-icon" href="assets/imgs/favicon1.ico" sizes="64x64">
  <link rel="stylesheet" href="assets/css/bootstrap.css">


</head>


<body style="background-color: whitesmoke; text-align: center;">
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
  <h1 style="font-size: 60px; font-weight: 750; color: red; text-align: center;">Write an Article</h1>
  <br>
  <form action="" method="post">
  <div class="mb-3" style="margin-left: 32%; margin-right: 32%;">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Heading" maxlength="100" name="heading"><br>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Image Address (From Google)" maxlength="5000" name="image"><br>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Preview" maxlength="150" name="preview"><br>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Content" maxlength="10000" name="content"></textarea><br>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Writer" maxlength="100" name="writer"><br>
    <select class="form-select" aria-label="Default select example" name="subject">
        <option value="National News">National News</option>
        <option value="Political News">Political News</option>
        <option value="International News">International News</option>
        <option value="Business News">Business News</option>
        <option value="Sports News">Sports News</option>
      </select><br>
    <div style="text-align: center;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <br>
  <p style='color:blue; font-size: 22.5px'><?php echo $texttd; $texttd="" ?></p>
  <br><br> 
  
</form>
  <!--Footer-->
  <div style="text-align: center;">
  <p style="text-align: center; font-size: 15px; font-family: sans-serif; font-weight: 300; color: blue;">Copyright © 2023 - All Rights Reserved <br>
    Created By Arav Jain | Phone:91+9953100018 | E-Mail:arav04jain@gmail.com</p>
    
    <img src="assets/imgs/icon_of_developer.jpg" style="text-align: center; border-radius: 500px; " width="64px" height="64px">
    <br><br>
  </div>



  <script src="assets/js/bootstrap.js"></script>
</body>

</html>