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
  ======================================================== -
  cdn-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
      <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">ecom</a></h1>


      <nav id="navbar" class="navbar" style="margin-right:1%;">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          
        
          <li class="dropdown"><a href="#"><span>categories</span><i class="bi bi-chevron-down"></i></a>
            <ul>
             <li class="dropdown"><a href="#">shoes<!--<i class="bi bi-chevron-right"></i--></a>
             <li class="dropdown"><a href="#">watch <!--<i class="bi bi-chevron-right"></i--></a>-
             
              </li>
            </ul>
          </li>

         <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li>-->
          <li class="dropdown"><a href="#"><span>MY ACCOUNT</span><i class="bi bi-chevron-down"></i></a>
            <ul>
             <li class="dropdown"><a href="#">ORDER<!--<i class="bi bi-chevron-right"></i--></a>
             <li class="dropdown"><a href="address.php">ADDRESS</a></li>
             <li><a class="dropdown" href="../feedback.php">FEEDBACK</a></li>
             <li><?php 




$username = $_SESSION['email'];
?>
<strong style="color:white; margin-right:0px;"><?php echo $username; ?> </strong></li>
            
              </li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>

            </ul>
          </li>
         <!-- <nav class="navbar bg-body-tertiary">-->

            <nav class="nav-link scrollto">
      <div class="nav-link scrollto">
        
        <form class="d-flex mb-2" role="search" method="POST">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <input  class="btn btn-outline-success"  name="serach_data_product" type="submit" placeholder="serach">Search

        </form>





</nav>
      <?php
   
      // $select_rows =mysqli_query($conn, "SELECT *FROM usercart ") or die('query failed');
       //$row_count = mysqli_num_rows($select_rows);
            ?>
      <!--<a href="./viewcart.php"><i class="bi bi-cart-fill" style="padding-right:32%; position:relative; font-size:29px;"><span><?php //echo $row_count?></span></i></a>-->
      </form>
      
      <?php 




//$username = $_SESSION['email'];
?>
<!--<li class="dropdown"><a href="#"><span><?php echo  $username; ?> </span><i class="bi bi-chevron-down"></i></a>-->
<!--<li><strong style="color:red; margin-left:3px;"> <?php // echo $username; ?> <i class="bi bi-chevron-down  dropdown"></i></strong></li>
 <ul>
             <li class="dropdown"><a href="../logout.php">logout</a>
             
                <ul>-->
  </div>
 

      <!--    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>-->
        
      </nav><!-- .navbar -->
   

    </div>
  </header><!-- End Header -->





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