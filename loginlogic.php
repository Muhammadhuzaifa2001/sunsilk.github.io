<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <!-- Add any necessary styles or scripts -->
    
</head>
<body>

<?php
$con = new mysqli('localhost', 'root', '', 'crud');

if (!$con) {
  echo "connection is not succesfull" . "<br>";
} ?>

<!-- process_login.php -->
<?php
session_start();

// Replace with your actual credentials or database authentication logic
$valid_username = 'admin';
$valid_password = 'password';

if (isset($_POST['submit'])) {
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    if ($entered_username === $valid_username && $entered_password === $valid_password) {
        $_SESSION['logged_in'] = true;
        header("Location: homelogin.php"); // Redirect to dashboard upon successful login
        exit;
    } else {
        $error = "Invalid username or password!";
        $_SESSION['error'] = $error;
        header("Location: login.php");
        exit;
    }
}
?>

</body>
</html>
