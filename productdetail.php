<?php
$con = new mysqli('localhost', 'root', '', 'crud');

if (!$con) {
  echo "connection is not succesfull" . "<br>";
}
?>

<html>

<head>
  <title>Shampoo 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="productsdetail.css">
  <link rel="stylesheet" href="homeweb.css">
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
      <li><a href="homeweb.php">Home</a></li>
      <li><a href="product.php" class="dropdown">
          <span>Products</span>
          <div class="dropdown-content">
            <p>Shampoo</p>
            <p>Conditioner</p>
          </div>
        </a></li>
      <li><a href="aboutus.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="login.php">Log in</a></li>
    </ul>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 second-part">
        <?php $id = $_REQUEST['id'];
        $result = mysqli_query($con, "SELECT *FROM crud1 WHERE productid = '$id'");
        $row = mysqli_fetch_assoc($result);
        ?>
        <img class="myimg" src="uploads/<?php echo $row['productprofile']; ?>" alt="">
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 ">
        <div class="product-detail-content">
          <p class="p-name">
            <?php echo $row['productname']; ?>
          </p>
          <div class="p-price-box">
            <div class="p-list">

              <span class="price">RS:
                <?php echo $row['productprice']; ?>
              </span>
            </div>
            <div class="_p-add-cart">
              <div class="p-qty">
                <span class="p-add"> Add Quantity:</span>

                <input type="number" name="qty" id="number" value="1" />

              </div>
            </div>
            <div class="p-features">
              <span> Description About this product:- </span>
              <p class="text">
                <?php echo $row['productDetails']; ?>
              </p>
            </div>
            <div class="button">

              <button class="buy btn ">
                Buy Now
              </button>
              <button class="cart btn ">
                Add to Cart
              </button>


            </div>
          </div>
        </div>

      </div>
    </div>

  </div>


  <div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>