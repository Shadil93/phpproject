<?php
include '../seller/connection.php';
session_start();
$id=$_SESSION['id'];
$row = mysqli_query($conn , "SELECT *FROM selladdproduct WHERE seller_id='$id'");


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
    <div class="conatiner">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <h2 style="text-align: center;" ><u>Product Edit<u></h2>
                <table class="table table-bordered ">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>ProductName</th>
                        <th>Product Price</th>
                        <th>Photo</th>
                        <th colspan="2">Action</th>

                    </tr>
                    <?php
                    while($data = mysqli_fetch_assoc($row)){
            
                        ?>
                    <tr>
                        <td><?php echo $data['name'];?></td>
                        <td><?php echo $data['email'];?></td>
                        <td><?php echo $data['product_name'];?></td>
                        <td><?php echo $data['product_price'];?></td>
                        <td><img src="../seller/images/<?php echo $data['images']; ?>" height="100px" width="100px"></td>
                        <td><button><a href="edit.php<?php echo $data['id'];?>" class="form-control btn btn-danger">edit</a></button></td>-->
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>








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
