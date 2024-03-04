<?php 
include '../user/connecion.php';
session_start();
$id =$_GET['id'];
$data = mysqli_query($conn , "SELECT *FROM userregister WHERE id='$id'");

$row =mysqli_fetch_assoc($data);
if(isset($_POST['submit'])){
  $name= $_POST['name'];
  $mobile =$_POST['mobile'];
  $email =$_POST['email'];
  $address =$_POST['address'];

  $sql = mysqli_query($conn , "UPDATE `userregister` SET name='$name',mobile='$mobile',email='$email',address='$address' WHERE id='$id' ");

  if($sql){
    echo '<script>alert("successfully")</script>';
    echo '<script>window.location.href="user_home.php"</script>';
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
  ======================================================== -
  cdn-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    
    <div class="container" >
        <div class="row">
            <div class="col-3">

            </div>
          
            <div class="col-4"  style="margin-top:30px">
            
            <div class="card" style="width: 28rem;margin-top:30%">
    
 <div class="card-body" style="margin-left: 20px;">
               
                <form method="POST">
                <h1 >Edit profile</h1>
                    <label>name</label>
                    <input type="text" name="name"  class="from-control" value="<?php echo $row['name'];?>" ><br>
                    <label>email</label>
                    <input type="email" name="email"  class="from-control" value="<?php echo $row['email'];?>"><br>
                    <label>mobile</label>
                    <input type="mobile" name="mobile" class="from-control" value="<?php echo $row['mobile'];?>"><br>
                    <label>address</label>
                   <input type="text" name="address"  class="from-control" value="<?php echo $row['address'];?>"><br>
                   <button type="submit" name="submit" class="btn btn-success mt-2">Update</button>
                </form>
                
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
</html>
</body>
</html>