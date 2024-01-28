<?php
class ticket{

    function __construct()
    {

    }
public static function get_ticket_by_pnr($conn,$pnr){
        $sql="SELECT *from ticket join travel on ticket.travel_id=travel.travel_id join customer on ticket.cus_id=customer.cus_id where pnr='$pnr';";
        $result=mysqli_query($conn,$sql);
        return $result;
    }

    public static function get_ticket_by_customer($conn,$user_id){
        $sql="SELECT *from ticket join travel on ticket.travel_id=travel.travel_id join customer on ticket.cus_id=customer.cus_id where customer.cus_id='$user_id';";
        $result=mysqli_query($conn,$sql);
        return $result;
    }
}
?>