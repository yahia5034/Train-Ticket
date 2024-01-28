<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            background-color: midnightblue
        }

        .form {
            background-color: #444;
            width: 28%;
            height: 350px;
            margin: 8% auto;
            border-radius: 10px;
        }

        input,
        select {
            margin-left: 80px;
            padding: 5px;
            margin-bottom: 5px;
            width: 200px;
            height: 20px;
            border-radius: 5px;
            border: solid black 2px;
        }

        select {
            height: 35px;
            width: 214px;
        }

        h1 {
            background-color: #971010;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .add {
            margin-left: 150px;
            height: auto;
            padding: 5px;
            margin-bottom: 5px;
            width: 80px;
            background-color: darkgreen;
            border-radius: 5px;
        }

        .error {
            color: red;
        }

        p {
            margin-left: 38%;
            margin-top: -80px;
            font-size: xx-large;
        }

        label {
            margin-left: 15px;
        }
    </style>
</head>

<body>

</body>

</html> -->


<?php


include_once "dbh.php";

$travel_id = $_POST['Travel_ID'];
$train_id = $_POST['Train_ID'];
$travel_source = $_POST['Source'];
$travel_distination = $_POST['Destination'];
$travel_date = $_POST['Date'];
$travel_time = $_POST['Time'];
$no_of_seats_available = $_POST['Number_Of_Available_Seats'];
$first = $_POST['first'];
$second = $_POST['second'];
$update = "SELECT * FROM travel WHERE travel_id = '$travel_id';";
$result = mysqli_query($conn, $update);
$resultcheck = mysqli_num_rows($result);
if ($resultcheck > 0) {
    $update = "UPDATE travel SET train_id='$train_id', travel_source='$travel_source', travel_destination='$travel_distination', 
            travel_date='$travel_date', travel_time='$travel_time', no_of_seats_available='$no_of_seats_available',1st_price='$first',2nd_price='$second'
            WHERE travel.travel_id = $travel_id;";
    mysqli_query($conn, $update);
    header("Location: ../view_travel_admin.php?edit=success");
}

?>

<?php
// $id = $_GET['travel_id'];
// $update2 = "SELECT * FROM travel WHERE travel_id = '$id'";
// $query2 = mysqli_query($conn, $update2);
// while ($result = mysqli_fetch_assoc($query2)) {
//     $travel_id = $result['travel_id'];
//     $train_id = $result['train_id'];
//     $travel_source = $result['travel_source'];
//     $travel_distination = $result['travel_destination'];
//     $travel_date = $result['travel_date'];
//     $travel_time = $result['travel_time'];
//     $no_of_seats_available = $result['no_of_seats_available'];
// }
?>
<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="">
        <h1>Edit Travel</h1>
        <label>Travel ID</label>
        <input type="number" name="Travel_ID" value="<?php echo $travel_id; ?>" placeholder="Travel_ID" readonly >
        <br>
        <label>Train ID</label>
        <input type="number" name="Train_ID" value="<?php echo $train_id; ?>" placeholder="Train_ID" required >
        <br>
        <label for="Source">Source</label>
        <input type="text" list="cars" value="<?php echo $travel_source; ?>" />
        <datalist id="cars">
            <?php include "stations.php"; ?>
        </datalist>

            <br>
        <label for="Destination">Destination</label>
        <input type="text" list="cars" value="<?php echo $travel_distination; ?>" />
        <datalist id="cars">
            <?php include "stations.php"; ?>
        </datalist>

            <br>
            <label>Date</label>
        <input type="date" name="Date" value="<?php echo $travel_date; ?>" placeholder="Date" required >
        <br>
        <label>Time</label>
        <input type="time" name="Time" value="<?php echo $travel_time; ?>" placeholder="Time" required >
        <br>
        <label>Available seats</label>
        <input type="number" name="Number_Of_Available_Seats" value="<?php echo $no_of_seats_available; ?>" placeholder="NoOfAvailableSeats" required >
        <br>
        <input class="update" type="submit" name="update" value="Update">
    </form>
</body>

</html> -->




<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>travelTable</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="height: 720.2px;background: #734c21;">
    <div class="container profile profile-view" id="profile" style="width: 500px;height: 670.2px;background: url(&quot;assets/img/17000073.jpg&quot;) center / contain no-repeat;margin-top: 40px;">
        <div class="row" style="/*&quot;C: \Users\NourAllah\Pictures\Saved Pictures\17000073.jpg&quot;;*/">
            <div class="col-md-12 alert-col relative" style="/*&quot;C: \Users\NourAllah\Pictures\Saved Pictures\17000073.jpg&quot;;*/">
                <div class="alert alert-info alert-dismissible absolue center" role="alert" style="height: 70px;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>Profile save with success</span></div>
            </div>
        </div>
        <form method="POST" action="" >
            <div class="row profile-row" style="height: 597.2px;width: 543px;margin-right: -12px;margin-left: -116px;">
                <div class="col-md-8" style="margin-bottom: -18px;height: 645.2px;margin-left: 101px;margin-top: 12px;padding-left: 53px;width: 403px;">
                    <h1 style="margin: 132px 0px -19px;margin-top: 133px;width: 250.7px;padding-bottom: 34px;color: rgb(115,76,33);">Travel Details</h1>
                    <hr style="background: #734c21;">
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col" style="width: 97.5px;">
                                <div class="row">
                                    <div class="col" style="margin-bottom: 5px;width: 97.5px;"><label class="col-form-label" style="color: #734c21;">Travel ID</label></div>
                                    <div class="col" style="width: 264px;"><input class="form-control" readonly value="<?php echo $travel_id; ?>" name="Travel_ID" placeholder="Travel_ID" type="text" id="travelIdEditTravel" style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);"></div>
                                </div>
                                <div class="row">
                                    <div class="col" style="margin-bottom: 5px;width: 97.5px;"><label class="col-form-label" style="color: #734c21;">Train ID</label></div>
                                    <div class="col" style="width: 264px;"><input class="form-control" value="<?php echo $train_id; ?>" type="number" name="Train_ID" style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);font-size: 16px;"></div>
                                </div>
                                <div class="row">
                                    <div class="col" style="margin-bottom: 5px;width: 97.5px;"><label class="col-form-label" style="color: #734c21;">Source</label></div>
                                    <div class="col" style="width: 264px;">
                                        <input class="form-control" list="src"  type="text" name="Source" value="<?php echo $travel_source; ?>" style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;">
                                        <datalist id="src">
                                            <?php include "../../includes/stations.php"; ?>
                                        </datalist>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col" style="margin-bottom: 5px;width: 97.5px;"><label class="col-form-label" style="width: 97.5px;color: #734c21;">Destination&nbsp;</label></div>
                                    <div class="col">
                                        <input class="form-control" type="text" list="dest" name="Destination" value="<?php echo $travel_distination; ?>"  style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;">
                                        <datalist id="dest">
                                            <?php include "../../includes/stations.php"; ?>
                                        </datalist>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col" style="margin-bottom: 5px;width: 97.5px;"><label class="col-form-label" style="color: #734c21;">Date</label></div>
                                    <div class="col" style="width: 264px;"><input class="form-control" value="<?php echo $travel_date; ?>" type="date" name="Date"  style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3" style="margin-bottom: 5px;width: 97.5px;"><label class="col-form-label" style="color: #734c21;">Time</label></div>
                                    <div class="col" style="width: 265.5px;"><input class="form-control" name="Time"  value="<?php echo $travel_time; ?>" type="time" name="Time" style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3" style="color: #734c21;margin-bottom: 5px;width: 97.5px;"><label class="col-form-label" style="width: 99.7px;">No. Of Seats</label></div>
                                    <div class="col"><input class="form-control" type="number" value="<?php echo $no_of_seats_available; ?>" name="Number_Of_Available_Seats" style="width: 240px;background: #bfa25e;border-color: rgb(115,76,33);border-top-color: #734c21;filter: sepia(0%);margin-left: 0px;"></div>
                                    <div class="col-md-11" style="width: 264.5px;"><input class="btn btn-primary" value="SAVE" name="update" type="submit" style="margin-left: 330px;margin-top: 40px;background: #734c21;border-radius: 10px;color: #dccab4;position:relative;bottom:30px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html> -->