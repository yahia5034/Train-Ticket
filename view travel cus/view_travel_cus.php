 <?php
    include "../includes/dbh.php";
    include "../nav2.php";
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
     <link rel="stylesheet" href="assets/css/styles.css">
     <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
     <link rel="stylesheet" href="assets/css/Bold-BS4-Pricing-Table-Style-68A-1.css">
     <link rel="stylesheet" href="assets/css/Bold-BS4-Pricing-Table-Style-68A-2.css">
     <link rel="stylesheet" href="assets/css/Bold-BS4-Pricing-Table-Style-68A-3.css">
     <link rel="stylesheet" href="assets/css/Bold-BS4-Pricing-Table-Style-68A.css">
     <link rel="stylesheet" href="assets/css/styles.css">
     <style>
         .pricingTable:hover {
             transform: scale(1);
             transform: scale(1) rotate(5deg);
         }

         .nav-item {
             margin-left: 15px;
         }

         .nav-link {
             margin-left: 15px;
         }

         .nav-link:hover {
             border-bottom: 3px #753000 solid;
         }

         .nav-link:focus {
             border-bottom: 3px #753000 solid;
         }
     </style>
 </head>

 <body style="background: #bfa25e;">
     <div>

         <div class="container" style="margin-left: 70px;width: 1400px;">
             <div class="row" style="margin-top: 100px;background: #bfa25e;width: 1600px !important;height: 622px;margin-left: 25px;">
                 <?php
                    $num = mysqli_num_rows($query2);
                    if ($num > 0) {
                        while ($result = mysqli_fetch_assoc($query2)) {
                            $x = $result['travel_id'];
                            echo '
            <div class="col-sm-6 col-md-4" style="margin-top: 10px;background: #734c21;height: 595px;width: 428px;margin-bottom: 31px; margin-right:80px;padding-top: 0px;margin-left: 10px;padding-bottom: 0px;">
                <div class="pricingTable" style="background: url(&quot;assets/img/17000073.jpg&quot;) center / contain no-repeat;height: 576px;border: 1px #500f10 solid;margin-top: 8px;width: 409px;">
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
                </div>
            </div>';
                        }
                    } ?>
             </div>
         </div>

                    
 </body>

 </html>