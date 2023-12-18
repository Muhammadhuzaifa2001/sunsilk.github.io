<?php
$con = new mysqli('localhost', 'root', '', 'crud');

if (!$con) {
  echo "connection is not succesfull" . "<br>";
}
?>
<?php
$productid = $_GET['updateproductid'];
$sql = "Select * from crud1 where productid=$productid";
$result = mysqli_query($con, $sql);
if ($result) {
  ($row = mysqli_fetch_array($result));
  $productprofile = $row['productprofile'];
  $productid = $row['productid'];
  $productname = $row['productname'];
  $productprice = $row['productprice'];
  $productcode = $row['productcode'];
  $productInstock = $row['productInstock'];
  $productDiscount = $row['productDiscount'];
  $productSizes = $row['productSizes'];
  $productDetails = $row['productDetails'];
}
if (isset($_POST['submit'])) {
  $productprofile = $_POST['productprofile'];
  $productid = $_POST['productid'];
  $productname = $_POST['productname'];
  $productprice = $_POST['productprice'];
  $productcode = $_POST['productcode'];
  $productInstock = $_POST['productInstock'];
  $productDiscount = $_POST['productDiscount'];
  $productSizes = $_POST['productSizes'];
  $productDetails = $_POST['productDetails'];

  $sql = "UPDATE crud1 
        SET productprofile='$productprofile',
            productname='$productname',
            productprice='$productprice',
            productcode='$productcode',
            productInstock='$productInstock',
            productDiscount='$productDiscount',
            productSizes='$productSizes',
            productDetails='$productDetails'
        WHERE productid=$productid";
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

  <title>Update</title>
</head>

<body>
  <div class="container my-5">
    <form method="POST">
      <div class="form-group">
        <label>Product Image</label>
        <input type="file" class="form-control" placeholder="upload image" name="productprofile" value=<?php echo $productprofile; ?>>
      </div>
      <div class="form-group">
        <label>Product id</label>
        <input type="int" class="form-control" placeholder="Enter id" name="productid" value=<?php echo $productid; ?>>
      </div>
      <div class="form-group">
        <label>Product name</label>
        <input type="text" class="form-control" placeholder="Enter Product name" name="productname" value=<?php echo $productname; ?>>
      </div>
      <div class="form-group">
        <label>Product Price</label>
        <input type="int" class="form-control" placeholder="Enter Product Price" name="productprice" value=<?php echo $productprice; ?>>
      </div>
      <div class="form-group">
        <label>Product Code</label>
        <input type="int" class="form-control" placeholder="Enter Product code" name="productcode" value=<?php echo $productcode; ?>>
      </div>
      <div class="form-group">
        <label>Product In Stock</label>
        <input type="int" class="form-control" placeholder="Product In stock" name="productInstock" value=<?php echo $productInstock; ?>>
      </div>
      <div class="form-group">
        <label>Discount On Product</label>
        <input type="int" class="form-control" placeholder="Discount %" name="productDiscount" value=<?php echo $productDiscount; ?>>
      </div>
      <div class="form-group">
        <label>Sizes</label>
        <input type="text" class="form-control" placeholder="Enter Size" name="productSizes" value=<?php echo $productSizes; ?>>
      </div>
      <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" placeholder="Write detail of product" name="productDetails" value=<?php echo $productDetails; ?>>
      </div>


      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>

  </div>

</body>

</html>