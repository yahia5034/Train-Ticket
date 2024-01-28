<?php
include "nav.php";
include "Classes/Travel.php";
include "includes/dbh.php";
    if(isset($_GET['travel']))
    {
        $travel=$_GET['travel'];
    }
    else{
        die("PLEASE GO BACK");
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>booking_details</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<?php
if(!isset($_POST['book'])){

echo'
<body style="background: #d6b881;height: 600px;">
    <div style="width: 100%;"></div>
    <div class="container" style="margin-top: 43px;margin-right: 0px;margin-left: 140px;padding-right: 0px;height: 500px;width: 77%;padding-left: 50px;border-radius: 3px;border: 5px double #633a1a ;">
        <div class="row">
            
            <div class="col" style="margin-right: 0px;background: #d6b881;margin-top: 0px;width: 518px;height: 485px;margin-left: 8px;">
            <form method="post" action="">  
                <h1 style="margin-top: 26px;margin-bottom: 31px;font-weight: bold;color: #633a1a;">Booking Details</h1>
                <hr style="border-width: 0px;height: 2px;">
                <div class="row" style="margin-right: 1px;margin-left: 12px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                        <label class="col-form-label" style="font-size: 21px;font-weight: bold;color: #633a1a;border-color: #633a1a;">Travel ID</label>
                    </div>
                    <div class="col">
                    <input type="text" name="travel" value="'.$travel.'" readonly ></div>
                </div>
                <div class="row" style="margin-right: 1px;margin-left: 12px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                        <label class="col-form-label" style="color: #633a1a;">No. Of Seats</label>
                    </div>      
                    <div class="col">
                    <input type="Number" name="no_of_seats" min="1" max="20" style="width:188.2px;" required></div>
                </div>
                <div class="row" style="margin-right: 1px;margin-left: 12px;">
                    <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                        <label class="col-form-label" style="color: #633a1a;">Class&nbsp;</label>
                    </div>
                    <div class="col">
                        <select name="class" id="" style="width:188.2px;">
                        <option value="firstclass">firstclass</option>
                        <option value="secondclass">second class</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col"><button class="btn btn-primary" type="submit" name="book" style="margin-left: 76px;margin-top: 32px;border-color: #734c21;background: #633a1a;width: 160px;height: 40px;padding-left: 0px;padding-right: 4px;margin-right: 60px;">Confirm&nbsp;</button></div>
                </div>
                </form>
            </div>
            <div class="col" style="background: #d6b881;width: 200px;margin-right: 21px;margin-top: 6px;border-width: 0px;height: 485px;"><img src="assets/img/The%20Ultimate%20FREE%20Harry%20Potter%20Streets%20of%20London%20Walking%20Tour%20_%20The%20Creative%20Adventurer.jpg" style="margin-right: 0px;margin-left: 91px;padding-left: 0px;height: 460px;margin-top: 12px;"></div>
        </div>
    </div>
</body>
';}
?>
</html>

<?php
    if(isset($_POST['book']))
    {
        $travel_id=$_POST['travel'];
        $no_of_seats=$_POST['no_of_seats'];
        $class=$_POST['class'];
        $tr=new Travel();
        include 'confirmbook.php';
    }
?>
