<?php
include './connection.php';

$query = mysqli_query($conn , "SELECT *FROM orderaddress ");


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
            <div class="col-md--12">
                <div class="card">
                    <div class="card-header">
                    <h1 style="text-align: center;">Order details</h1>
                    <a href="index.php" class="btn btn-warning fload-end">back</a>
                 </div>
                 <div class="card-body">
                    <table class="table table-bordered table-striped">
                       
                            <tr>
                            <th>reg_id</th>
                                <th>productname</th>
                                <th>payment</th>
                                <th>address</th>
                                <th>mobile</th>
                                <th>price</th>
                                <th>status</th>
                            </tr>

                        
                        <?php
                       while($data=mysqli_fetch_assoc($query)){
                        
                        ?>
                        
                            <tr>
                            <td><?php echo $data['reg_id'];?></td>
                                <td><?php echo $data['product_name'];?></td>
                                <td><?php echo $data['payment'];?></td>
                                <td><?php echo $data['address'];?></td>
                                <td><?php echo $data['mobile'];?></td>
                                <td><?php echo $data['price'];?></td>
                                <td>
                                   
                                    <?php 
                                    if($data['status']==0){
                                        echo "under process";
                                    }else if($data['status']==1){
                                        echo "completed";
                                    }else if($data['status']==2){
                                        echo "cancelled";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                       }      
                        ?>
                    </table>
                   
                 </div>
            </div>
            </div>
        </div>
     </div>

  </body>
</html>