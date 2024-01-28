<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Search</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/book.css">
</head>

<body style="background: #d6b881;height: 600px;">
    <div style="width: 100%;">
        <?php include "nav.php"; ?>
    </div>
    <div class="container" style="margin-top: 133px;margin-right: 0px;margin-left: 140px;padding-right: 0px;height: 500px;width: 77%;padding-left: 50px;border-radius: 3px;border: 5px double #734c21 ;">
        <div class="row">

            <div class="col" style="margin-right: 0px;background: #d6b881;margin-top: 0px;width: 518px;height: 485px;margin-left: 8px;">
                <form action="result.php" method="POST">
                    <h1 style="margin-top: 26px;margin-bottom: 31px;font-weight: bold;color: #734c21;">Book your travel</h1>
                    <hr style="border-width: 0px;height: 2px;">
                    <div class="row" style="margin-right: 1px;margin-left: 12px;">
                        <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                            <label class="col-form-label" style="font-size: 21px;font-weight: bold;color: #734c21;">Source</label>
                        </div>
                        <div class="col">
                            <select name="Source" id="source" required>
                                <?php include "includes/stations.php"; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-right: 1px;margin-left: 12px;">
                        <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                            <label class="col-form-label">Destination</label>
                        </div>
                        <div class="col">
                            <select name="Destination" id="destination" required>
                                <?php include "includes/stations.php"; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-right: 1px;margin-left: 12px;">
                        <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                            <label class="col-form-label">Date&nbsp;</label>
                        </div>
                        <div class="col">
                            <input type="date" name="Date" placeholder="Date" style="width:188.2px;">
                        </div>
                    </div>
                    <div class="row" style="margin-right: 1px;margin-left: 12px;">
                        <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                            <label class="col-form-label">Time</label>
                        </div>
                        <div class="col">
                            <input type="time" name="Time" placeholder="Time" style="width:188.2px;">
                        </div>
                    </div>
                    <div class="row" style="margin-right: 1px;margin-left: 12px;">
                        <div class="col-lg-5" style="color: #734c21;font-size: 19px;font-weight: bold;">
                            <label class="col-form-label">Type</label>
                        </div>
                        <div class="col">
                            <select name="type" id="" style="width:188.2px;">
                                <option value="single">Single</option>
                                <option value="return">Return</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"><button class="btn btn-primary" type="submit" name="search" value="search" style="margin-left: 76px;margin-top: 32px;border-color: #734c21;background: #734c21;width: 160px;height: 40px;padding-left: 0px;padding-right: 4px;margin-right: 60px;">Search</button></div>
                    </div>
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] === "NoTravelsFound") {
                            echo "<p style='color:red;'> No Travels Found </p>";
                        }
                    }
                    ?>
                </form>
            </div>
            <div class="col" style="background: #d6b881;width: 200px;margin-right: 21px;margin-top: 6px;border-width: 0px;height: 485px;"><img src="assets/img/HP%20(Part%204)_%20Marauder%27s%20Map_.jpg" style="margin-right: 0px;margin-left: 60px;padding-left: 0px;height: 460px;margin-top: 19px;"></div>
        </div>
    </div>

</body>

</html>