<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin_edit_cus</title>
    <link rel="stylesheet" href="admin_edit_cus_assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_edit_cus_assets/css/Login-Box-En.css">
    <link rel="stylesheet" href="admin_edit_cus_assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="admin_edit_cus_assets/css/styles.css">
</head>

<body style="background: linear-gradient(180deg, black, rgb(142,142,142) 0%, rgb(114,71,45) 2%, rgb(81,49,30) 19%, rgb(115,72,45) 85%, white 100%, rgb(119,74,47) 100%), rgb(72,43,27);">
    <div class="row">
        <div class="col" style="background: linear-gradient(black, rgb(72,43,27) 15%, rgb(81,49,30) 65%, rgb(83,50,31) 76%, white), #53321f;">
            <div class="container">
                <div class="row" style="padding-top: 59px;">
                    <div class="col-md-6" style="padding-top: 138px;padding-right: 16px;padding-left: 164px;background: #dccab4;">
                        <div class="card" style="margin-left: -85px;">
                            <div class="card-body" style="border-radius: 10px;margin-left: -5px;border-color: var(--bs-green);background: linear-gradient(black, rgb(114,71,45) 65%, rgb(119,74,47) 68%, rgb(129,80,51) 74%, white), rgb(83,50,31);">
                                <h4 class="card-title" style="text-align: center;color: #e5eeea;">Edit customer</h4>
                                <form action="edit_user_profile.php" method="POST">
                                    <div class="input-group" style="border-left-color: var(--bs-gray);">
                                        <input name="cus_id" class="form-control" type="text" id="cusIdEditCus" placeholder="customer ID" style="background: var(--bs-white);">
                                        <input name="submit" type="submit" value="Search" class="btn btn-light" id="searchButtonEditCus" style="color: var(--bs-white);font-weight: bold;background: repeating-linear-gradient(black, rgb(114,71,45) 48%, white), rgb(83,50,31);">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="background: #dccab4;"><img class="img-fluid" src="image.png" style="margin-top: 50px;"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>