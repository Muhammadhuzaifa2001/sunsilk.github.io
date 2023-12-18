<html>
<head>
  <title>Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="homeweb.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
  <div class="nav-top">
  <div class="logo">
      <img src="sunsilklogo.avif" alt="Sunsilk" >
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
  <div class="contact-section">
    <div class="address">
      <h3> Main Head Office</h3>
      <p> 460-D, Near Main Boulevard,Johar Town,Lahore,Pakistan<br>Opens 24 Hours </P>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54450.63806302908!2d74.23576215519697!3d31.464650317680587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919015f82b0b86f%3A0x2fcaf9fdeb3d02e6!2sJohar%20Town%2C%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1697264790659!5m2!1sen!2s"
          width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="contact-box">
      <form id="contact-form" action="" method="">
        <h3> Contact Us</h3>
        <div class="form-item">
          <label> First Name: </label>
          <input type="text" placeholder="Enter your first name" name="name">
        </div>
        <div class="form-item">
          <label> Last Name: </label>
          <input type="text" placeholder="Enter your Last name" name="name">
        </div>
        <div class="form-item">
          <label> Email: </label>
          <input type="email" placeholder="Enter your email" name="useremail">
        </div>
        <div class="form-item">
          <label> Contact No: </label>
          <input type="tel" placeholder="Enter your number">
        </div>
        <div class="form-item">
          <label> Date: </label>
          <input type="date">
        </div>
        <div class="form-item">
          <label> Gender: </label>
           <div class="gender-item">
            <input type="radio">
            <label>Male</label>
           </div>
           <div class="gender-item">
            <input type="radio">
            <label>Female</label>
           </div>
        </div>
        <div class="form-item">
          <label> City: </label>
          <input type="text" name="city" placeholder="Enter your city">
        </div>
        <div class="form-item">
          <button>Submit</button>
          <button>Clear</button>
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