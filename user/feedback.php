<?php

include './connecion.php';
session_start();
$id=$_SESSION['id'];
if(isset($_POST['submit'])){
  $rateing=$_POST['rateing'];
    $feedback= $_POST['feedback'];


    $sql=mysqli_query($conn,"INSERT INTO feedback (rateing,feedback,user_id)VALUES('$rateing','$feedback','$id')");

    if($sql){
        echo '<script>alert("feedbacksuccessfully")</script>';
        echo '<script>window.location.href="user_home.php";</script>';
    }
}








?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Groovin Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">ECOM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
  
            <ul>
              <li class="dropdown"><a href="#"><span>MY ACCOUNT</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
             <li class="dropdown"><a href="#">ORDER<!--<i class="bi bi-chevron-right"></i--></a>
             <li class="dropdown"><a href="address.php">ADDRESS</a></li>
             <li><a class="dropdown" href="../logout.php">LOGOUT</a></li>
            
              </li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>

            </ul>
           

            </ul>
        
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
       
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->   
 

  <section >
    <div class="container" style="margin-top:20px;">
  <h4 align="center" style="margin-top:10%;"><u>feedback</u></h4>
  <div class="contain" style="margin-left: 20%; margin-top:10px;">
  <div class="card" style="width: 47rem;margin-top:5rem; height:80% ;margin-top:10px;">
 <form action="" method="POST">
 <div class="card-body">
 <span>rateing</span>
        <select name="rateing" class="form-control">
            <option value="verygood "seleted>verygood</option>
            <option value="bad">bad</option>
            <option value="fantatic">fantatic</option>
        </select>
    <label>FEEDBACK:</label><br>
<textarea class="form-control" name="feedback" placeholder="FEEDBACK"></textarea>

<button name="submit" type="submit"  class="btn btn-success mt-2">submit</button>
</form>
 </div>
  </div>
  </div>
    </div>


  </section>





    
 <!-- Vendor JS Files -->
 <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>