<?php
include_once 'dbh.php';
$cus_id = $_POST['cus_id'];
$sql = "SELECT * from customer WHERE cus_id='$cus_id';";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);
if ($resultcheck > 0) {
    $sql = " DELETE  FROM  customer WHERE customer.cus_id = '$cus_id';";
    mysqli_query($conn, $sql);
    header("location: ../index.php?status=deleted");
} else {
    header("location: admin_del_cus.php ?action=failed");
}
