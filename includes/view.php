<?php
include "../Classes/Travel.php";
include "../includes/dbh.php";
$t=new Travel();
if(isset($_GET['travel'])){
    $travelid=$_GET['travel'];
    $sql="SELECT * FROM ticket join travel on travel.travel_id=ticket.travel_id;";
    $result=mysqli_query($conn,$sql);
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .row:hover{
            background-color: grey;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <th>Ticket Id</th>
            <th>Class</th>
            <th>type</th>
            <th>Amount payed</th>
            <th>Customer Id</th>
            <th>Travel Id</th>
            <th>Date reserved</th>
        </thead>
       <tbody>
           <?php
           while($row=mysqli_fetch_assoc($result))
           {
               echo'
               <tr class="row">
               <td>'.$row['pnr'].'</td>
               <td>'.$row['class'].'</td>
               <td>'.$row['type'].'</td>
               <td>'.$row['payment'].'</td>
               <td>'.$row['cus_id'].'</td>
               <td>'.$row['travel_id'].'</td>
               <td>'.$row['tdate'].'</td>
               <td><button name="button" type="button "></button></td>
               
               </tr>';
           }
           ?>

       </tbody> 
    </table>
</body>
</html>