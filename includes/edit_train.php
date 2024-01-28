<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>EditTrain</title>
    <link rel="stylesheet" href="edit_train_assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="edit_train_assets/css/Login-Box-En.css">
    <link rel="stylesheet" href="edit_train_assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="edit_train_assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="edit_train_assets/css/styles.css">
</head>

<body style="background: linear-gradient(#483014 69%, #a97438 90%), #734c21;height: 733px;">
    <?php
    $train_id = $_GET['train_id'];
    ?>
    <div class="row">
        <div class="col" style="background: linear-gradient(rgb(72,48,20) 16%, rgb(169,116,56) 85%, #cb904f), #734c21;">
            <div class="container" style="height: 360.234px;">
                <div class="row" style="padding-top: 59px;margin-top: 75px;">
                    <div class="col-md-6" style="padding-top: 138px;padding-right: 16px;padding-left: 164px;height: 350.234px;background: linear-gradient(#734c21 34%, #bfa25e), #734c21;">
                        <div class="card" style="margin-left: -122px;margin-right: 21px;border-color: #734c21;">
                            <div class="card-body" style="border-radius: 10px;margin-left: 0px;border-color: var(--bs-green);background: linear-gradient(#7b4a18, #281704), #734c21;">
                                <h4 class="card-title" style="text-align: center;color: rgb(45,25,13);">Edit Train</h4>
                                <form action="edittraindb.php" method="POST" class="search-form">
                                    <input type="hidden" name="train_id" value="<?php echo $train_id; ?>">
                                    <div class="input-group" name="no_of_seats" style="border-left-color: var(--bs-gray);"><input class="form-control" type="text" value="<?php echo $train_id; ?>" name="no_of_seats" placeholder="NumOfSeats" style="background: #eae7e3;color: #734c21;"><button class="btn btn-light" id="addButtonedittrain" type="submit" style="color: #2d190d;font-weight: bold;background: linear-gradient(#ab702e 17%, #bfa25e), #734c21;">Save</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="background: linear-gradient(#734c21 33%, #bfa25e), #734c21;padding: -38px;"><img class="img-fluid" src="hogwarts-express-at-universal-studios-florida-800x400.png" style="margin-top: 54px;"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>