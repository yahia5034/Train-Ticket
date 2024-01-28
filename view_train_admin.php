<?php
include_once 'includes/dbh.php';
$select = "SELECT * FROM train";
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
</head>


<body style="background: #bfa25e;">
    <script>
        function del() {
            alert("Are you sure to delete this train?");
        }
    </script>
    <div>
        <?php include "nav.php"; ?>
    </div>
    <div class="add"><a href="add_train.php" class="add-a" style="margin-top: 30px;">+ Add new train</a></div>
    <div class="container" style="margin-left: 20px;width: 1400px;">
        <div class="row" style="margin-top: 80px;background: #bfa25e;width: 1150px !important;border: 3px solid #734c21;margin-left: 25px;">
            <?php
            $num = mysqli_num_rows($query2);
            if ($num > 0) {
                while ($result = mysqli_fetch_assoc($query2)) {
                    $x = $result['train_id'];
                    echo '
            <div class="col-sm-6 col-md-4" style="margin-top: 10px;background: #734c21;height: 475px;width: 345px;margin-bottom: 31px; margin-right:26px;padding-top: 0px;margin-left: 10px;padding-bottom: 0px;">
                <div class="pricingTable" style="background: url(&quot;assets/img/17000073.jpg&quot;) center / contain no-repeat;height: 455px;border: 1px #500f10 solid;margin-top: 8px;width: 322px;">
                    <div class="price-value"><span></span><span class="month"></span></div>
                    <ul class="list-unstyled">
                    <li style="font-size: 18px;margin-top: 90px;"><strong>Train ID</strong></li>
                    <li>' . $result['train_id'] . '</li>
                    <li style="font-size: 18px;font-weight: bold;">Available seats</li>
                    <li>' . $result['no_of_seats'] . '</li>
                </ul><a class="pricingTable-signup" href="includes/edit_train.php?train_id=' . $x . '" style="border-radius: 25px;text-decoration: none;">Edit</a>
                <a class="pricingTable-signup" href="includes/deletetraindb.php?train_id=' . $x . '" onclick="del()" " style="width=50px,margin-left: 26px;margin-bottom: 39px;border-radius: 25px;text-decoration: none;">Delete</a>
                </div>
            </div>';
                }
            } ?>
        </div>
    </div>
</body>

</html>