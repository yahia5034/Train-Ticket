<?php
include_once 'dbh.php';
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$username = $_POST['user_name'];
$id = $_POST['cus_id'];
$password = $_POST['cus_password'];
$email = $_POST['email'];
$phone = $_POST['phone_num'];
$birth = $_POST['birth_date'];
$credit = $_POST['credit_num'];
$sql = "UPDATE admin SET fname= '$first',lname='$last',username='$username',
admin_id='$id',password='$password',email='$email',phone='$phone',dob='$birth',
credit_num='$credit' WHERE admin.admin_id=$id";
mysqli_query($conn, $sql);
header("location: ../index.php?signup=success");
