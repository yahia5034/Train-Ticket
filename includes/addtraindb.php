<?php
include 'dbh.php';
$no_of_seats = $_GET['no_of_seats'];
$sql = "INSERT INTO train( no_of_seats) VALUES (  '$no_of_seats');";
mysqli_query($conn, $sql);
header("Location: ../view_train_admin.php?signup=success");
