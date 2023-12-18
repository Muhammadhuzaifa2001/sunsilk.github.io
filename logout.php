<?php
$con = new mysqli('localhost', 'root', '', 'crud');

if (!$con) {
  echo "connection is not succesfull" . "<br>";
} ?>
<!-- process_logout.php -->
<?php
session_start();
session_unset();
session_destroy();
header("Location: homeweb.php");
exit;
?>