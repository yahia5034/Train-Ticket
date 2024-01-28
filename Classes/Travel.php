<?php

class Travel{
  function __construct()
  {
  }
  public function Search($conn){
    $sql="SELECT * FROM travel ;";
    $result = mysqli_query($conn,$sql);
    $num_of_rows=mysqli_num_rows($result);
    if($num_of_rows==0)
    {
     header("location: ../search.php?error=NoTravelsFound");
     exit();
    }
    else{    
      return $result;
    }
  }
  public function Search2($conn,$source,$destination,$date){
    $sql="SELECT * FROM travel WHERE travel_source='$source' AND travel_destination='$destination'and travel_date >= '$date';";
    $result = mysqli_query($conn,$sql);
    return $result;
  }
  public function get_data($conn,$id)
  {
    $sql="SELECT * FROM travel WHERE travel_id='$id';";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
  }
  public function updateseats($conn,$no_of_seats,$id){
    $sql="UPDATE travel SET no_of_seats_available=no_of_seats_available-'$no_of_seats' where travel_id='$id'";
    mysqli_query($conn,$sql);
  }
}