<?php
include_once 'dbh.php';
include_once 'functions.php';
if(isset($_POST["submit"])){
 $fname=$_POST["FName"];
 $lname=$_POST["LName"];
 $username=$_POST["userName"];
 $pass= $_POST["Password"];
 $email=$_POST["email"];
 $phone=$_POST["PhoneNum"];
 $dob=$_POST["DOB"];
 $credit=$_POST["credit"];

 if (emptyInputSignup($fname,$lname,$username,$pass,$email,$phone,$dob,$credit)!==false){
     header("location:../signup.php?error=empty");
     exit();
   }
 if (invalidUID($username)){
    header("location:../signup.php?error=invalid_username");
    exit();
 }  
 if (invalidEmail($email)){
    header("location:../signup.php?error=invalid_email");
    exit();
 }  
 if (duplicate_userName($conn,$username)){
   header("location:../signup.php?error=usernameExist");
   exit();
 }
 CreateUser($conn,$fname,$lname,$username,$pass,$email,$phone,$dob,$credit);
}else{
 header("Location:../signup.php");
 exit();
}