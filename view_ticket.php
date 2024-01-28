<?php
if(isset($_GET['view_own_tickets'])){
 include "nav.php";
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>view_tickets</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/view_tickets.css">
</head>

<body style="background: #d6b881;height: 600px;">
    <div style="width: 100%;">
    </div>
    <div class="container" style="margin-top: 110px;margin-right: 0px;margin-left: 140px;padding-right: 0px;width: 77%;padding-left: 50px;border-radius: 3px;border: 5px double #734c21 ;">
    <table class="table">
                <thead>
                    <tr>
                        <th>PNR</th>
                        <th>Source</th>
                        <th>Destination</th>
                        <th>Class</th>
                        <th style="font-weight: bold;"><br>Seat No.</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_GET['view_own_tickets'])){
                    include "Classes/ticket.php";
                    include "Classes/travel.php";
                    $t=new travel();
                    include "includes/dbh.php";
                    
                    $ticket=new ticket();
                    $userid=$_SESSION['userid'];
                    $result = $ticket->get_ticket_by_customer($conn,$userid);
                    $pay="done";
                }else{
                $result=$u->getticket($conn,$class,$type,$amount,$userid,$travel_id,$date);}
                while($row=mysqli_fetch_assoc($result))
                {
                    $travelresult=$t-> get_data($conn,$row['travel_id']);
                    echo'
                            <tr>
                                <td>'.$row['pnr'].'</td>
                                <td>'.$travelresult['travel_source'].'</td>
                                <td>'.$travelresult['travel_destination'].'</td>
                                <td>'.$row['class'].'</td>
                                <td>Cell 2</td>
                                <td style="height: 55px;">
                                <form action ="ticket.php">
                                <input type="hidden" name="pnr" value=" '.$row['pnr'].' ">
                                <input type="hidden" name="pay" value="'.$pay.'">
                                <input class="btn btn-primary" type="submit" value="Show Ticket" name ="submit" style="background: #633a1a;width: 117.5px;padding-right: 0px;margin-right: -50px;text-align: center;font-weight: bold;padding-left: 2px;" ></form>
                                </td>
                            </tr>
                        ';
                    }
                ?>
                </tbody>
            </table>
        <div class="" style="width: 875px;height:100%;margin-right: 0px;padding-left: 0px;padding-right: 5px;margin-left: -23px;border-width: 0px;">
            
        </div>
    </div>
     
</body>

</html>