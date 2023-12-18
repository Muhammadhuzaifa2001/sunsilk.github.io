<?php
$con = mysqli_connect('localhost', 'root', '', 'crud');

if (!$con) {
  echo "connection is not succesfull" . "<br>";
} ?>
<html>

<head>
  <title>Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="homeweb.css">
 
  
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

  <script>
    $(document).ready(function () {
      $("#button1").click(function () {
        $("#div1").toggle(1000);
        $("#div2").toggle(1000);
        $("#div3").toggle(1000);
      });
    });
  </script>
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
      <li><a class="dropdown">
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



  <div class="cards">
    <?php $result = mysqli_query($con, "SELECT *FROM crud1");
    while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="card customize" style="width: 30rem;" >
        <img src="uploads/<?php echo $row['productprofile']; ?>" class="card-img" alt="..." style="width:100% height:350px">
        <div class="card-body">
          <p class="card-text">
          <?php echo $row['productname']; ?>
          <?php echo $row['productDetails']; ?>
          </p>
          <a href="productdetail.php?id=<?php echo $row['productid']; ?>" style="background:purple"
            class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
    <?php } ?>

  </div>






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