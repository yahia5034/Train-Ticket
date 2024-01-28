<?php
include_once "dbh.php";
$id = $_GET['travel_id'];
$query = "DELETE FROM travel WHERE travel_id = '$id';";
mysqli_query($conn, $query);
header("location:../view_travel_admin.php?delete=success");
