<?php
include_once 'dbh.php';
$train_id = $_POST['train_id'];
$no_of_seats = $_POST['no_of_seats'];
$sql = "SELECT * from train WHERE train_id='$train_id';";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);
if ($resultcheck > 0) {
    $sql = "UPDATE train SET no_of_seats= '$no_of_seats' WHERE train.train_id= $train_id;";
    mysqli_query($conn, $sql);
    header("location: ../view_train_admin.php?signup=success");
} else {
    echo 'the train id ' . $train_id . ' is not found';
}
