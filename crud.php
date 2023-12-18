<?php
$con = new mysqli('localhost', 'root', '', 'crud');

if (!$con) {
  echo "connection is not succesfull" . "<br>";
}

if (isset($_POST['submit'])) {
  $folder = 'uploads/';
  $productprofile_file = $_FILES['productprofile']['name'];
  $file = $_FILES['productprofile']['tmp_name'];
  $path = $folder . $productprofile_file;
  $target_file = $folder . basename($productprofile_file);
  $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
  if ($imagefiletype != "jpg" && $imagefiletype != "jpeg" && $imagefiletype != "PNG" && $imagefiletype != "gif") {
    $error[] = 'sorry wrong extension';
  }
  move_uploaded_file($file, $target_file);

  $productid = $_POST['productid'];
  $productprofile = $productprofile_file;
  $productname = $_POST['productname'];
  $productprice = $_POST['productprice'];
  $productcode = $_POST['productcode'];
  $productInstock = $_POST['productInstock'];
  $productDiscount = $_POST['productDiscount'];
  $productSizes = $_POST['productSizes'];
  $productDetails = $_POST['productDetails'];

  $sql = "insert into crud1(productprofile,productid,productname,productprice,productcode,productInstock,productDiscount,productSizes,productDetails)
    values('$productprofile','$productid','$productname','$productprice','$productcode','$productInstock','$productDiscount','$productSizes','$productDetails')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location:display.php');
  } else {
    echo "data is not inserted" . "<br>";
  }

}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="homelogin.css">
  <link rel="stylesheet" href="cruudweb.css">
 
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <title>Crud</title>
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

  <div class="conatiner">
    <div class="contact-box">
      <div class="form-item">
        <button><a style="color:Black" href="http://localhost/php1/crud.php"> Add Product</a></button>
      </div>
      <form id="contact-form" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label>Product Image</label>
          <input type="file" class="form-control" placeholder="upload image" name="productprofile">
        </div>
        <div class="form-group">
          <label>Product id</label>
          <input type="int" class="form-control" placeholder="Enter id" name="productid">
        </div>
        <div class="form-group">
          <label>Product name</label>
          <input type="text" class="form-control" placeholder="Enter Product name" name="productname">
        </div>
        <div class="form-group">
          <label>Product Price</label>
          <input type="int" class="form-control" placeholder="Enter Product Price" name="productprice">
        </div>
        <div class="form-group">
          <label>Product Code</label>
          <input type="int" class="form-control" placeholder="Enter Product code" name="productcode">
        </div>
        <div class="form-group">
          <label>Product In Stock</label>
          <input type="int" class="form-control" placeholder="Product In stock" name="productInstock">
        </div>
        <div class="form-group">
          <label>Discount On Product</label>
          <input type="int" class="form-control" placeholder="Discount %" name="productDiscount">
        </div>
        <div class="form-group">
          <label>Sizes</label>
          <input type="text" class="form-control" placeholder="Enter Size" name="productSizes">
        </div>
        <div class="form-group">
          <label>Description</label>
          <input type="text" class="form-control" placeholder="Write detail of product" name="productDetails">
        </div>
        <div class="form-item">
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
      </form>
    </div>
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