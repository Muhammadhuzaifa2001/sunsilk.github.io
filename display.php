<?php
$con = new mysqli('localhost', 'root', '', 'crud');

if (!$con) {
  echo "connection is not succesfull" . "<br>";
} ?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Display</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="homelogin.css">
  <link rel="stylesheet" href="displayweb.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
  <div class="nav-top">
    <div class="logo">
      <img src="sunsilklogo.avif" alt="Sunsilk">
    </div>
    <div class="icons">
      <ul>
        <li><i class="ri-twitter-fill"></i></li>
        <li><i class="ri-google-fill"></i></li>
        <li><i class="ri-facebook-fill"></i></li>
        <li><i class="ri-instagram-fill"></i></li>
        <li><i class="ri-whatsapp-fill"></i></li>
      </ul>
    </div>
  </div>

  <div class="nav-bottom">
    <ul>
      <li><a href="homelogin.php">Home</a></li>
      <li><a href="crud.php">Add Products</a></li>
      <li><a href="display.php">Product List</a></li>
      <li><a href="login2.php">Log in</a></li>
    </ul>
  </div>

  <div class="container" my-5>
    <div class="form-item">
      <button class="my-5" style="font-weight: bold; background-color: purple; border-radius: 10px;"><a
      style="color: white; text-decoration: none; padding: 5px 10px;" href="http://localhost/php1/crud.php"> Add
          Product</a></button>
    </div>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Product Profile</th>
          <th scope="col">Product Id</th>
          <th scope="col">Product Name</th>
          <th scope="col">Product Price</th>
          <th scope="col">Product Code</th>
          <th scope="col">Product In Stock</th>
          <th scope="col">Product Discount</th>
          <th scope="col">Product Sizes</th>
          <th scope="col">Product Details</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "Select * from crud1";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_array($result)) {
            $productprofile = $row['productprofile'];
            $productid = $row['productid'];
            $productname = $row['productname'];
            $productprice = $row['productprice'];
            $productcode = $row['productcode'];
            $productInstock = $row['productInstock'];
            $productDiscount = $row['productDiscount'];
            $productSizes = $row['productSizes'];
            $productDetails = $row['productDetails'];
            echo '<tr>
    <td scope="row"><img style="width: 200px;" src="uploads/'.$productprofile.'"></td>
    <td>' . $productid . '</td>
    <td>' . $productname . '</td>
    <td>' . $productprice . '</td>
    <td>' . $productcode . '</td>
    <td>' . $productInstock . '</td>
    <td>' . $productDiscount . '</td>
    <td>' . $productSizes . '</td>
    <td>' . $productDetails . '</td>
    <td>
    <button class="btn btn-primary" ><a href="update.php?updateproductid=' . $productid . '" style="color:white">Update</a></button>
   </td>
  <td><button class="btn btn-danger"><a href="delete.php?deleteproductid=' . $productid . '" style="color:black">Delete</a></button>
    </td>
    </tr>';
          }
        }
        ?>
      </tbody>
    </table>
  </div>

  <div class="footer">
    <div class="myfooter">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Helpline-03229912823</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <ul>
    </div>
  </div>
</body>

</html>