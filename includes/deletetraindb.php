<?php
include_once 'dbh.php';
$train_id = $_GET['train_id'];
$sql = "SELECT * from train WHERE train_id='$train_id';";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);
if ($resultcheck > 0) {
    $sql = " DELETE  FROM  train WHERE train.train_id = '$train_id';";
    mysqli_query($conn, $sql);
    header("location: ../view_train_admin.php?signup=success");
} else {
    echo 'the train id ' . $train_id . ' is not found';
}
