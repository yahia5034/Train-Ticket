<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ticket</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<?php
if(isset($_GET['submit']))
{
    include "nav.php";
    include "includes/dbh.php";
    include "Classes/ticket.php";
    $pnr=$_GET['pnr'];
    $ticket=new ticket();
    $result=$ticket->get_ticket_by_pnr($conn,$pnr);
    $row=mysqli_fetch_assoc($result);
    $pay=$_GET['pay'];
}
?>
<body style="background: #d6b881;height: 600px;">
    <div style="width: 100%;"></div>
    <div class="container" style="margin-top: 43px;margin-right: 0px;margin-left: 175px;padding-right: 0px;height: 619px;width: 77%;padding-left: 50px;border-radius: 3px;border: 5px double #734c21;">
        <div class="row">
            <div class="col" style="margin-right: 0px;background: #d6b881;margin-top: 0px;width: 518px;height: 485px;margin-left: 8px;">
                <h1 style="margin-top: 26px;margin-bottom: 23px;font-weight: bold;color: #734c21;">Ticket</h1>
                <hr style="border-width: 0px;height: 2px;margin-top: 8px;">
                <div class="row" style="margin-right: 1px;margin-left: 12px;margin-bottom: -7px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                  <label class="col-form-label" style="font-size: 21px;font-weight: bold;color: #734c21;">PNR</label></div>
                        <div class="col">
                        <input type="text" value="<?php echo $pnr; ?> " readonly>
                        </div>
                </div>
                <div class="row" style="margin-right: 1px;margin-left: 12px;margin-bottom: -7px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                  <label class="col-form-label" style="font-size: 21px;font-weight: bold;color: #734c21;">Name</label></div>
                    <div class="col">
               <input type="text" value="<?php echo $row['fname'].' '.$row['lname']; ?> " readonly>
                </div>
                </div>
                <div class="row" style="margin-right: 1px;margin-left: 12px;margin-bottom: -7px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                  <label class="col-form-label" style="font-size: 21px;font-weight: bold;color: #734c21;">Travel ID</label></div>
                    <div class="col">
                <input type="text" value="<?php echo $row['travel_id'] ; ?> " readonly>
                </div>
                </div>
                <div class="row" style="margin-right: 1px;margin-left: 12px;margin-bottom: -7px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                  <label class="col-form-label" style="font-size: 21px;font-weight: bold;color: #734c21;">Source</label></div>
                    <div class="col">
               <input type="text" value="<?php echo $row['travel_source'] ; ?> " readonly>
                </div>
                </div>
                <div class="row" style="margin-right: 1px;margin-left: 12px;margin-bottom: -7px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                  <label class="col-form-label" style="font-size: 21px;font-weight: bold;color: #734c21;">Destination</label></div>
                    <div class="col">
               <input type="text" value="<?php echo $row['travel_destination'] ; ?> " readonly>
                </div>
                </div>
                <div class="row" style="margin-right: 1px;margin-left: 12px;margin-bottom: -7px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                  <label class="col-form-label" style="font-size: 21px;font-weight: bold;color: #734c21;">Date</label></div>
                    <div class="col">
               <input type="text" value="<?php echo $row['travel_date']; ?> " readonly>
                </div>
                </div>
                <div class="row" style="margin-right: 1px;margin-left: 12px;margin-bottom: -7px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                  <label class="col-form-label">Time</label></div>
                    <div class="col">
               <input type="text" value="<?php echo $row['travel_time'] ; ?> " readonly>
                </div>
                </div>
                <div class="row" style="margin-right: 1px;margin-left: 12px;margin-bottom: -7px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                  <label class="col-form-label">Class</label></div>
                    <div class="col">
               <input type="text" value="<?php echo $row['class'] ; ?> " readonly>
                </div>
                </div>
                <div class="row" style="margin-right: 1px;margin-left: 12px;margin-bottom: -7px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                  <label class="col-form-label">Seat&nbsp;</label></div>
                    <div class="col">
               <input type="text" value="<?php echo 1 ; ?> " readonly>
                </div>
                </div>
                <div class="row" style="margin-right: 1px;margin-left: 12px;margin-bottom: -7px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                  <label class="col-form-label">Price</label></div>
                    <div class="col">
               <input type="text" value="<?php echo $row['payment']; ?> " readonly>
                </div>
                </div>
                <div class="row" style="margin-right: 1px;margin-left: 12px;margin-bottom: -7px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                  <label class="col-form-label">Payment Status</label></div>
                    <div class="col">
               <input type="text" value="<?php if($pay=='cash'){echo 'Pending';}else{echo 'Done';} ?> " readonly>
                </div>
                </div>
                <div class="row">
                    <div class="col">
                        </div>
                    <div class="col">
<button class="btn btn-primary" type="button" onclick="window.print()"style="margin-left: 76px;margin-top: 32px;border-color: #734c21;background: #734c21;width: 160px;height: 40px;padding-left: 0px;padding-right: 4px;margin-right: 60px;font-weight: bold;color: rgb(223,201,173);">Print</button></div>
                </div>
            </div>
            <div class="col" style="background: #d6b881;width: 200px;margin-right: 21px;margin-top: 6px;border-width: 0px;height: 485px;"><img src="assets/img/toppng.com-harry-potter-ticket-to-platform-9-3-4-520x433.png" style="margin-right: 0px;margin-left: -38px;padding-left: 0px;height: 382px;margin-top: 50px;width: 465.4px;"></div>
        </div>
    </div>
     
</body>

</html>