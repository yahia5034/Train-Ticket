<?php
include "../nav2.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Recharge</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Box-En.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .bal {
            width: 350px;
            position: absolute;
            left: 39%;
            top: 17%;
            display: flex;
            flex-direction: row;
        }

        .pbal {
            font-size: 40px;
            color: #de8623;
            font-weight: bold;
        }

        .rbal {
            font-size: 20px;
            position: relative;
            top: 21px;
            left: 15px;
            font-weight: bold;
            color: #000;
        }

        .error {
            position: relative;
            left: 38%;
            top: 10%;
            font-size: 22px;
            font-weight: bold;
        }
    </style>
</head>

<body style="background-image: linear-gradient(120deg,#483014, #a97438); height:1000px;">
    <?php
    include "../includes/dbh.php";
    if (isset($_POST['confirm'])) {
        $balance = $_POST['balance'];
        $credit_num = $_POST['credit_num'];
        $sql = "UPDATE admin SET balance = balance + '$balance' WHERE credit_num = '$credit_num';";
        mysqli_query($conn, $sql);
        $select = "SELECT * FROM admin WHERE credit_num = '$credit_num';";
        $query2 = mysqli_query($conn, $select);
        $num = mysqli_num_rows($query2);
        if ($num > 0) {
            $result = mysqli_fetch_assoc($query2);
            echo
            "<div class='bal'>
                        <p class='pbal'> Your Balance</p>
                        <p class='rbal'>" . $result['balance'] . "</p>
                    </div>";
        } else {
            echo "<p class='error' style='color: red;'>The credit number ( " . $credit_num . " ) is not found!!</p>";
        }
    }
    ?>
    <div class="row">
        <div class="col" style="margin-top: 50px;">
            <div class="container" style="height: 360.234px;">
                <div class="row" style="padding-top: 59px;margin-top: 75px;">
                    <div class="col-md-6" style="padding-top: 138px;padding-right: 16px;padding-left: 164px;height: 350.234px;background: linear-gradient(#734c21 34%, #bfa25e), #734c21;">
                        <div class="card" style="margin-left: -122px;margin-right: 21px;border-color: #734c21;margin-bottom: 209px;">
                            <div class="card-body" style="position: relative;bottom: 70px;border-radius: 10px;margin-left: 0px;border-color: var(--bs-green);background: linear-gradient(#7b4a18, #281704), #734c21;margin-bottom: -88px;padding-bottom: 14px;height: 233.79700000000003px;">
                                <h4 class="card-title" style="text-align: center;color: rgb(45,25,13);">Recharge Admin Balance</h4>
                                <form method="POST" action="" class="search-form" style="height: 150px;">
                                    <div class="input-group" style="border-left-color: var(--bs-gray);"><input class="form-control" type="number" id="numOfSeatsEditTrain" placeholder="Credit Number" name="credit_num" style="background: #eae7e3;color: #734c21;margin-bottom: 2px;margin-top: -12px;"></div>
                                    <div class="input-group" style="border-left-color: var(--bs-gray);"><input class="form-control" type="number" id="numOfSeatsEditTrain-1" placeholder="Amount" name="balance" style="background: #eae7e3;color: #734c21;margin-top: 8px;"></div>
                                    <input type="submit" name="confirm" value="Confirm" style="border:2px #734c21 solid;position: relative;top: 25px;background: linear-gradient(#ab702e 17%, #bfa25e), #734c21;text-decoration: none;color: #2d190d;padding: 8px;margin-left: 220px;margin-bottom: 126px;margin-top: 39px;padding-left: 16px;padding-right: 16px;border-radius: 5px;">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="background: linear-gradient(#734c21 33%, #bfa25e), #734c21;padding: -38px;"><img class="img-fluid" src="assets/img/hogwarts-express-at-universal-studios-florida-800x400.webp" style="margin-top: 24px;height: 308px;"></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>