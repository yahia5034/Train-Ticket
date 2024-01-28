<?php
include "includes/dbh.php";

$select = "SELECT * FROM travel";
$query2 = mysqli_query($conn, $select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>viewTravels</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Pricing-Table-Style-68A-1.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Pricing-Table-Style-68A-2.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Pricing-Table-Style-68A-3.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Pricing-Table-Style-68A.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .add {
            position: relative;
            right: 40%;
        }

        .add:hover {
            background-color: #522b00;
        }
    </style>
</head>

<body style="background: #bfa25e; ">
    <?php
    include "nav.php";
    ?>
    <script>
        function del() {
            alert("Are you sure you want to delete this travel?");
        }
    </script>
    <div class="add"><a href="add travel/add_travel.php" class="add-a" style="margin-top: 30px;">+ Add new travel</a></div>
    <div class="container" style="margin-left: 70px;width: 1400px;">
        <div class="row" style="margin-top: 80px;background: #bfa25e;width: 1600px !important;height: 622px;margin-left: 25px;">
            <?php

            $num = mysqli_num_rows($query2);
            if ($num > 0) {
                while ($result = mysqli_fetch_assoc($query2)) {
                    $x = $result['travel_id'];
                    echo '
            <div class="col-sm-6 col-md-4" style="margin-top: 10px;background: #734c21;height: 700px;width: 500px;margin-bottom: 31px; margin-right:70px;padding-top: 0px;margin-left: 10px;padding-bottom: 0px;">
                <div class="pricingTable" style="background: url(&quot;assets/img/17000073.jpg&quot;) center / contain no-repeat;height:700px;border: 1px #500f10 solid;margin-top: 8px;width:  489px;">
                    <div class="price-value"><span></span><span class="month"></span></div>
                    <ul class="list-unstyled">
                        <li style="font-size: 18px;margin-top: 64px;color: #734c21;"><strong>Travel ID</strong></li>
                        <li style="color: #53321f;">' . $result['travel_id'] . '</li>
                        <li style="font-size: 18px;font-weight: bold;color: #734c21;">Train ID</li>
                        <li style="color: #53321f;">' . $result['train_id'] . '</li>
                        <li style="font-size: 18px;font-weight: bold;color: #734c21;">Source</li>
                        <li style="color: #53321f;">' . $result['travel_source'] . '</li>
                        <li style="font-size: 18px;font-weight: bold;color: #734c21;">Destination</li>
                        <li style="color: #53321f;">' . $result['travel_destination'] . '</li>
                        <li style="font-size: 18px;font-weight: bold;color: #734c21;">Date</li>
                        <li style="color: #53321f;">' . $result['travel_date'] . '</li>
                        <li style="font-size: 18px;font-weight: bold;color: #734c21;">Time</li>
                        <li style="color: #53321f;">' . $result['travel_time'] . '</li>
                        <li style="font-size: 18px;font-weight: bold;color: #734c21;">Available seats</li>
                        <li style="color: #53321f;">' . $result['no_of_seats_available'] . '</li>
                        <li style="font-size: 18px;font-weight: bold;color: #734c21;">First Class price</li>
                        <li style="color: #53321f;">' . $result['1st_price'] . '</li>
                        <li style="font-size: 18px;font-weight: bold;color: #734c21;">Second Class price</li>
                        <li style="color: #53321f;">' . $result['2nd_price'] . '</li>
                    </ul><a class="pricingTable-signup-edit" href="edit travel/edit_travel.php?travel_id=' . $x . '">Edit</a>
                    <a class="pricingTable-signup-del"href="includes/delete.inc.php?travel_id=' . $x . '" onclick="del()"">Delete</a>
                </div>
            </div>';
                }
            } ?>
        </div>
    </div>

</body>

</html>