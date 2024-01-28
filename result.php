<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Booking_result</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/result.css">
</head>

<body style="background: #bfa25e;">
    <?php
    include "nav.php";
    include_once 'Classes/User.php';
    include_once 'Classes/Travel.php';
    include_once 'includes/dbh.php';

    if (isset($_POST['search'])) {
        $source = $_POST['Source'];
        $destination = $_POST['Destination'];
        $dateentered = $_POST['Date'];
        $datetoday = date("Y/m/d", time());
        if ($datetoday > $dateentered) {
            $date = $datetoday;
        } else {
            $date = $dateentered;
        }
        $time = $_POST['Time'];
        $type = $_POST['type'];
        $user = new User();
        $travel = new Travel();
        if ($user->emptyInputSearch($source, $destination)) {
            header('location: search.php?error=emptyinputs');
            exit();
        }
    } else {
        header('location: index.php');
    } ?>
    <div></div>
    <div class="container" style="margin-left: 20px;width: 1400px;">
        <div class="row" style="margin-top: 11px;background: #bfa25e;width: 1400px !important;height: 753px;border: 3px solid #734c21;margin-bottom: 0px;">
            <?php
            $sql = "SELECT * FROM travel WHERE travel_source='$source' AND travel_destination='$destination' and travel_date >= '$date';";
            $result = mysqli_query($conn, $sql);
            $num_of_rows = mysqli_num_rows($result);
            if ($num_of_rows == 0) {
                echo "No travels found  ";
                header("location: search.php?error=NoTravelsFound");
                exit();
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    $x = $row['travel_id'];
                    echo "
            <div class='col-sm-6 col-md-4' style='margin: 10px 0px 0px 0px;margin-top: 10px;background: #734c21;height: 654px;width: 478px;margin-bottom: 0px;padding-top: 0px;margin-left: 10px;padding-bottom: 0px;'>
                <div class='pricingTable' style='background: url(&quot;assets/img/17000073.jpg&quot;) center / contain no-repeat;height: 635px;border: 1px #500f10 solid;margin-top: 8px;width: 452px;'>
                    <div class='price-value'><span></span><span class='month'></span></div>
                    <ul class='list-unstyled'>
                        <li style='font-size: 18px;margin-top: 64px;color: #734c21;'><strong>Travel ID</strong></li>
                        <li style='color: #53321f;'>" . $row['travel_id'] . "</li>
                        <li style='font-size: 18px;font-weight: bold;color: #734c21;'>Train ID</li>
                        <li style='color: #53321f;'>" . $row['train_id'] . "</li>
                        <li style='font-size: 18px;font-weight: bold;color: #734c21;'>Source</li>
                        <li style='color: #53321f;'>" . $row['travel_source'] . "</li>
                        <li style='font-size: 18px;font-weight: bold;color: #734c21;'>Destination</li>
                        <li style='color: #53321f;'>" . $row['travel_destination'] . "</li>
                        <li style='font-size: 18px;font-weight: bold;color: #734c21;'>Date</li>
                        <li style='color: #53321f;'>" . $row['travel_date'] . "</li>
                        <li style='font-size: 18px;font-weight: bold;color: #734c21;'>Time</li>
                        <li style='color: #53321f;'>" . $row['travel_time'] . "</li>
                        <li style='font-size: 18px;font-weight: bold;color: #734c21;''>First Class price</li>
                        <li style='color: #53321f;'>" . $row['1st_price'] . "</li>
                        <li style='font-size: 18px;font-weight: bold;color: #734c21;'>Second Class price</li>
                        <li style='color: #53321f;'>" . $row['2nd_price'] . "</li>
                    </ul><a class='pricingTable-signup' href='book.php?travel=$x&type=$type' style='border-radius: 10px;text-decoration: none;background: #734c21;width: 100px;height: 40px;color: #dccab4;'>Book</a>
                </div>
            </div>";
                }
            }
            ?>

        </div>
    </div>

</body>

</html>