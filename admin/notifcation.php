<?php
include '../admin/connection.php';
session_start();
$id=$_SESSION['id'];
$row = mysqli_query($conn,"SELECT userregister.name,userregister.mobile,orderaddress.product_name,orderaddress.payment,orderaddress.mobile,orderaddress.price,orderaddress.status FROM  orderaddress INNER JOIN userregister ON userregister.id = orderaddress.id "); 


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
    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <h1 style="text-align: center;">Notifcation</h1>
                <a href="index.php" class="btn btn-warning fload-end">back</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>name</th>
                        <th>mobile</th>
                        <th>product_name</th>
                        <th>product_price</th>
                        
                        <th>status</th>
                        <th>action</th>
                    </tr>
                    <?php
                      while($data = mysqli_fetch_assoc($row))
                      {
                    ?>
                    <tr>
                        <td><?php echo $data['name'];?></td>
                        <th><?php echo $data ['mobile'];?></th>
                        <td><?php echo $data['product_name'];?></td>
                        <td><?php echo $data['price'];?></td>
                        <td><?php echo $data['status'];?></td>
                       <th><a href="sendnotification.php" class="btn btn-danger">send</a></th>
                    </tr>
                    <?php
                      }
                      ?>
                </table>
            </div>
        </div>
    </div>




  
</body>
</html>