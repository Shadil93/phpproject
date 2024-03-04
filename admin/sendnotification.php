<?php
include '../admin/connection.php';
session_start();
$id=$_SESSION['id'];
if(isset($_POST['submit'])){
  $message = $_POST['message'];


  $sql= mysqli_query($conn , "INSERT INTO notmessgae(user_id,message) VALUES('$id','$message') ");

  if($sql){
    echo '<script>alert("successfully")</script>';
    echo '<script>window.location.href="notifcation.php"</script>';
  }
}
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
  <h1 style="text-align:center;">enter message</h1>
  
  <a href="index.php" class="btn btn-warning fload-end">back</a>
    <div class="container">
    
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">
                <form method="POST">
                    <LABEL>enter a message</LABEL><br>
                    <textarea name="message" class="form-controll"></textarea><br>
                    <input type="submit" name="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>



  </body>
</html>