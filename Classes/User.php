<?php 
class User {
    function __construct()
    {}
public  static function emptyInputSearch($source,$destination){

    if(empty($source)||empty($destination)){
            $result=true;
        }else{
            $result= false;
        }return $result;
   }
public static function get_cus_data($conn,$id){
    $sql="SELECT * FROM customer WHERE cus_id='$id';";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
public static function updatebalance($conn,$id,$amount){
    $sql="UPDATE customer SET balance = balance - '$amount' WHERE cus_id = '$id';";
    mysqli_query($conn,$sql);

}
public static function generateticket($conn,$class,$type,$payment,$userid,$travel_id,$date){
    $sql="INSERT INTO ticket (pnr, class, type, payment, cus_id, travel_id,tdate) VALUES (NULL, '$class', '$type', '$payment', '$userid', '$travel_id','$date');";
    mysqli_query($conn,$sql);  
}
public static function getticket($conn,$class,$type,$payment,$userid,$travel_id,$date){
    $sql="SELECT *from ticket where cus_id ='$userid' and tdate='$date'";
    $result=mysqli_query($conn,$sql);
    return $result;
}

}






