<?php //to show error in red
    session_start();
    if (isset($_SESSION['error'])) {
        echo '<p class="error">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
    }
    ?>

<!-- login.php -->
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="homelogin.css">
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Login Page</title>

    <style>
        .error {
            color: red;
        }
    </style> 
    
</head>
<body>
    <!--Header-->
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
    <li><a href="homelogin.php">Home</a></li>
      <li><a href="crud.php">Add Products</a></li>
      <li><a href="display.php">Product List</a></li>
      <li><a href="login2.php">Log in</a></li>
    </ul>
  </div>

        <!--Log In-->
        <div class="conatiner" my-6>
    <div class="loginbox">
        <h3 style="font-weight:bolder;color:white">Login</h3>
        
    <form id="loginbox-form" method="post" action="loginlogic.php">
       <div class=""form-group>
    <label class="login-input" for="username">Username:</label>
        <input  type="text" id="username" name="username" required><br><br>
      </div>
        <label class="login-input" for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input class="login-button" type="submit" name="submit" value="Login">
        <input class="login-button" type="reset" value="Reset">
    </form>
      </div>
    </div>
      </div>
    <!--footer-->
    <div>
        <div class="myfooter">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Helpline-03229912823</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <ul>
        
      </div>
</body>
</html>