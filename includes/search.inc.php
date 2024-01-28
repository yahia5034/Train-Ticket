<?php
use function PHPSTORM_META\type;
include_once '../Classes/User.php';
include_once '../Classes/Travel.php';
include_once 'dbh.php';

if(isset($_POST['search'])){
    session_start();
    $source = $_POST['Source'];
    $destination = $_POST['Destination'];
    $dateentered = $_POST['Date'];
    $datetoday = date("Y/m/d",time());
    if(  $datetoday > $dateentered )
    {
        $date=$datetoday;
    }
    else{
        $date=$dateentered;
    }
    $time = $_POST['Time'];         
    $type=$_POST['type'];
    $user = new User();
    $travel= new Travel();
        if($user->emptyInputSearch($source,$destination)){
            header('location:../search.php?error=emptyinputs');
            exit();
        }
     header("location: ../result.php");
}else{
    header('location:../index.php');
}?>
</body>
</html>
