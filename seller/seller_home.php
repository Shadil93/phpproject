<?php
include '../seller/connection.php';
session_start();


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
  ======================================================== --

  cdn bootstarp-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>

<?php
/*if(isset($message)){
  foreach($message as $message){
    echo '<div class="message"><span>'.$message.'</span><i class="fas fa-times" onclick="this.
    parentElement.style.display = `none`;"></i><div>';
  };
};*/
?>
      <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">ecom</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>

      <li class="dropdown"><a href="#"><span>MY ACCOUNT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
             <li class="dropdown"><a href="#">ORDER <!--<i class="bi bi-chevron-right"></i--></a>
             <li class="dropdown"><a href="sellerregister.php">PRODUCT REGISTER</a>
             <li><a class="dropdown ml-2" href="./productadd.php">PRODUCT ADD</a></li>
             <li><a class="drowpdown" href="./editproudent.php">PRODUCT EDIT</a></li>
             <li><a class="dropdown ml-2" href="../logout.php">LOGOUT</a></li>
                <ul>
                 
                 
                </ul>
              </li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>

            </ul>
          </li>
         <!-- <nav class="navbar bg-body-tertiary">-->
        
            <nav class="nav-link scrollto">
      <div class="nav-link scrollto">
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
     <?php
      //$id=$_GET['id'];
      //$row = mysqli_query($conn,"SELECT *FROM sellerregister where id='$id'");

      //$data = mysqli_fetch_assoc($row);

?>

<!--<input type="type" value="<?php //echo $data['name'];?>">-->
        
<?php 
$seller = $_SESSION['email'];
?>
<li class="dropdown" ><a href="#"><span style="margin-left:21%;margin-top:5px" ><?php echo $seller; ?></span><i class="bi bi-chevron-down"></i></a></li>
      <?php
      // $select_rows =mysqli_query($conn, "SELECT *FROM addcart ") or die('query failed');
      // $row_count = mysqli_num_rows($select_rows);
      ?>
      <ul>
      <li>

        <!--<a href="addcart2.php"value="add_to_cart" class="nav-link scrollto " style="padding-right:10px";>CART<span style="background-color: white; color:#000"><?php echo $row_count?></span></a></li>-->
      </ul>
        </form>
     
      
    
  </div>
</nav>
      <!--    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>-->
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio mt-5">
      <div class="container">
      <?php
      $id=$_SESSION['id'];
      $ro = mysqli_query($conn , "SELECT *FROM selladdproduct WHERE seller_id='$id'");
      while($data = mysqli_fetch_assoc($ro)){
  ?>
        <div class="section-title" style="display: flex;  padding-left:13%;;">
   
      <form method="POST" >
        <div class="card" style="width: 18rem; margin-right:10px; margin-bottom:9px;">
    
  <div class="card-body mb-1">
    <img src="../seller/images/<?php  echo $data['images'];?>" height="100px" width="100px" >
    <h4 class="portfolio-wrap portfolio-info"><?php echo $data['name'];?></h4>
    <div class="price"  name="product_price"> $<?php echo $data['product_price'];?></div>
   
    <input type="hidden" class="from-control" name="name" value="<?php echo $data['product_name'];?>">
    <input type="hidden" class="form-control" name="price" value="<?php echo $data['product_price'];?>">
   <!-- <input type="hidden" class="form-control" name="image" value="<?php //echo $data['images'];?>"> -->

    <button  type="submit" class="btn btn-success" value="add to cart" name="add_to_cart">add to cart</button>
   <!-- <button type="" class="btn btn-danger" value="edit" name="edit" >Edit</button>-->
     <!--<a href="addcart.php" name="addcart" class="btn btn-primary">Add Cart</a>-->
  
  </div>
        </div>
  </form>

<?php
      }
          ?>
         <!-- <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
        </div>
      </div>

   


    <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Groovin</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Groovin</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!--bootstarp js-->
  <script>
  ("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css")
        </script>
</body>
</html>
