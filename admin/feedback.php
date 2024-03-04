<?php 
include './connection.php';
session_start();
$id = $_SESSION['id'];
$row = mysqli_query($conn , "SELECT *FROM feedback ");








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
    <h1 style="margin-left:40% ;color:red;" >feedback</h1>
    <a href="index.php" class="btn btn-danger">admin</a>
    <div class="container">
        <div class="row">  
            <div class="col-4">

            </div>
            <div class="col-4">
           
            <table class="table table-bordered table-striped">
                <tr>
                  <TH>ID</TH>
                <th>feedback</th>
                <th>rateing</th>
                <th colspan="2">ACTION</th>
                </tr>
                <?php 
                while($data = mysqli_fetch_assoc($row))
                {
                ?>
                <tr>
                  <td><?php echo $data['user_id'];?></td>
                    <td><?php echo $data['rateing'];?></td>
                    <td><?php echo $data['feedback'];?></td>
                    <td><a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-success">DELETE</a></td>

                </tr>
                <?php
                }
                ?>
            </table>
            
            </div>

        </div>
    </div>
   
    


  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
</body>

</html>