

<?php
include '../user/connecion.php';
session_start();
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT *FROM usercart WHERE id='$id'");
$row = mysqli_fetch_assoc($sql);

// if(isset($_POST['submit'])){

// } 





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
<style>
  input 
  {
    border:none;
  } 


  </style>
  <!-- =======================================================
  * Template Name: Groovin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

<script>
  /*
function myFunctionplus(inputField) {
    let currentValue = parseInt(inputField.previousElementSibling.value);
    if (!isNaN(currentValue)) {
      inputField.previousElementSibling.value = currentValue + 1;
    }
    calculateTotal();
    console.log("hai");
  }

  function myFunctionminus(inputField) {
    let currentValue = parseInt(inputField.nextElementSibling.value);
    if (!isNaN(currentValue) && currentValue > 1) {
      inputField.nextElementSibling.value = currentValue - 1;
    }
    calculateTotal();
    console.log("hello");
  }

  const quantity = document.getElementById("qty");
  const price = document.getElementById("price"); // Corrected ID
  const total = document.getElementById("total");

  function calculateTotal() {
    const qty = parseFloat(quantity.value);
    const pr = parseFloat(price.value);
    const tot = qty * pr;
    total.value = tot.toFixed(2);
  }

  quantity.addEventListener('input', calculateTotal);
  calculateTotal();*/
</script>
  
</head>
<body>
<h1 align="center" style="background-color: black; width:100%;color:white;">VIEW CART</h1>
    <td><a href="user_home.php" class="btn btn-success">shopping</a></td>
 
<div class="container" style="margin-left: 30px;">
    <div class="row">
        <div class="col-3">

        </div>

        <div class="col-4">
          <table class="table table-bordered">
            <tr>
              <th>NAME</th>
              <th>PRICE</th>
              <th>IMAGE</th>
              <th>TOTAL</th>
              <th>QTY</th>
              <th>ACTION</th>
              
            </tr>

          
                <tr>
                  <form method="POST">
                    <td><input type="text" value="<?php echo $row['name'];?>" style="border:hidden;"></td><br>
                    <td><input type="text" id="price"  value="<?php echo $row['price'];?>"></td><br>
                    <td><img src="../seller/images/<?php echo $row['image'];?>"style="margin-right:77px;" height="100px" width="100px"></td><br>
                    <td><input type="text" id="total"  value="<?php echo $row['price'];?>"></td>
                         <td><button class="input-group-text decrement-btn"  onclick="addEventLister(this)">-</button>
                         <input type="text" class="form-control input-qty bg-white" id="qty" value="1">
                         <button class="input-group-text increment-btn" onclick="addEventListener(this)">+</button>
                     </td>
                   <td><a href="payment.php?id=<?php echo $row['id'];?>"class="btn btn-primary">order now</a></td>
</form>
                  
                    </tr>

        
        
  
</table>
        </div>
    </div>
</div>












 
  <script src="./user/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="./user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./user/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./user/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./user/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  
  <script src="./user/assets/js/main.js"></script>
  <script>
document.addEventListener("DOMContentLoaded", function() {
    // Get the elements
    let priceInput = document.getElementById("price");
    let quantityInput = document.getElementById("qty");
    let totalInput = document.getElementById("total");

    // Add an event listener to the quantity input
    quantityInput.addEventListener("input", function() {
        // Get the values of price and quantity
        let price = parseFloat(priceInput.value);
        let quantity = parseFloat(quantityInput.value);

        // Check if both price and quantity are valid numbers
        if (!isNaN(price) && !isNaN(quantity)) {
            // Calculate the total and set it to the "total" input field
            totalInput.value = (price * quantity).toFixed(2); // ToFixed(2) limits the decimal places to 2
        } else {
            // If either price or quantity is not a valid number, set total to an empty string
            totalInput.value = "";
        }
    });
});
</script>

</body>

</html>