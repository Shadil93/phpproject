 <?php
include '../admin/connection.php';
session_start();
$id=$_GET['id'];
$row = mysqli_query($conn , "DELETE FROM feedback WHERE id='$id'");

if($row){
    echo '<script>alert("delete successfully")</script>';
    echo '<script>window.location.href="feedback.php";</script>';
 }

?> 