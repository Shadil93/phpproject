<?php
include '../admin/connection.php';

$id=$_GET['user_id'];
$row = mysqli_query($conn , "SELECT *FROM notmessgae WHERE id='$id'");

$data = mysqli_fetch_assoc($row);




?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<body>
    <h1 style="text-align:center;">Notification</h1>
    <div class="container">
        <div class="row">
            <div class="col-md--12">
                <div class="card">
                    <div class="card-header">
                    <a href="../user/user_home.php" class="btn btn-warning fload-end">back</a>
                 </div>
                 <div class="card-body">
                    <table class="table table-bordered table-striped">
                      <tr>
                     <th>message</th>
                      </tr>
                      <tr>
                        <td><?php echo $data['message'];?></td>
                      </tr>

                    </table>
                 </div>
                </div>
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
</body>

