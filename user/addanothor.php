<?php
include '../user/connecion.php';
session_start();


$id =$_SESSION['id'];

$row = mysqli_query($conn ,"SELECT *FROM userregister WHERE id='$id'"); 
$data = mysqli_fetch_assoc($row); 
if(isset($_POST['submit'])){
    $address = $_POST['address'];
     $number =$_POST['mobile'];
    $sql = mysqli_query($conn , "UPDATE userregister SET address='$address',mobile='$number' WHERE id='$id'");

    if($sql){
        echo '<script>alert("successfully")</script>';
        echo '<script>window.location.href="payment.php"</script>';
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Favicons -->
  
  <link rel="icon" href="./user/assets/img/favicon.png">
  <link rel="apple-touch-icon" href="./user/assets/img/apple-touch-icon.png">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link rel="stylesheet" href="./user/assets/vendor/animate.css/animate.min.css">
  <link href="./user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./user/assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="./user/assets/vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" href="./user/assets/vendor/glightbox/css/glightbox.min.css">
  <link rel="stylesheet" href="./user/assets/vendor/swiper/swiper-bundle.min.css">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="./user/assets/css/style.css">

  <!-- =======================================================
  * Template Name: Groovin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
            <div class="card" style="width: 37rem;margin-top:5rem;">
 
 <div class="card-body">
                 <H1>ANOTHOR ADDRESS</H1>
                <form method="POST">
                    <lABEL style="width: auto;">ADDRESS</lABEL>
                    <textarea type="text" name="address" class="form-control" placeholder="address" required ></textarea>
                    <label>NUMBER</label>
                    <input type="text" name="mobile" class="form-control" placeholder="mobile" required>
                    <!--<label>LOCALITY</label>
                    <input type="text" name="locality/town"  class="form-control" placeholder="pincode" required>-->
                    <button type="submit" name="submit" class="btn btn-success mt-2" >submit</button> 
                </form>
 </div>
            </div>
            </div>
        </div>
    </div>
    

<script src="./user/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="./user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./user/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./user/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./user/assets/vendor/php-email-form/validate.js"></script>
</body>
</html>