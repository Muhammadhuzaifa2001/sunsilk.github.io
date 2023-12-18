<?php
$con = new mysqli('localhost', 'root', '', 'crud');

if (!$con) {
    echo "connection is not succesfull" . "<br>";
}
?>

<?php
if (isset($_GET['deleteproductid'])) {
    $productid = $_GET['deleteproductid'];

    $sql = "delete from crud1 where productid=$productid";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        echo "not deleted";
    }
}
?>