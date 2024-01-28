<?php
if(isset($_POST['submit']))
{
    $username =$_POST['username'];
    $password=$_POST['password'];
    $checkbox=$_POST['checkbox'];
    include_once 'dbh.php';
    include_once 'functions.php';
    if(emptyInputlogin($username,$password))
    {
        header("location: ../login.php?error=empty");
        exit();
    }
    if($_POST['checkbox'])
    {
        login_admin($conn,$username,$password);
    }
    else 
    {
    login_user($conn,$username,$password); 
    }
}
