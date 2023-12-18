<!-- dashboard.php -->
<?php
$con = mysqli_connect('localhost', 'root', '', 'crud');

if (!$con) {
  echo "connection is not succesfull" . "<br>";
} ?>


<html>

<head>
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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


  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="spurple.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Sunsilk Think & Long</h5>
          <p>Get Super Thick Hair With New Super Mix</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="spink.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Sunsilk Perfect Straight</h5>
          <p>Get Perfect Straight Hairs</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="sblack.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Sunsilk Stunning Black Shine</h5>
          <p>Amla Pearl Complex</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="cards">
    <?php $result = mysqli_query($con, "SELECT *FROM crud1");
    while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="card customize" style="width: 30rem;">
        <img src="uploads/<?php echo $row['productprofile']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">
            <?php echo $row['productDetails']; ?>
          </p>
          <a href="productdetail.php?id=<?php echo $row['productid']; ?>" style="background:purple"
            class="btn btn-primary">Add to cart </a>
        </div>
      </div>
    <?php } ?>

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