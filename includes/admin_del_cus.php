<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin_delete_cus</title>
    <link rel="stylesheet" href="admin_del_cus.assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_del_cus.assets/css/Login-Box-En.css">
    <link rel="stylesheet" href="admin_del_cus.assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="admin_del_cus.assets/css/styles.css">
</head>

<body style="background: linear-gradient(black, #dccab4), #dccab4;">

    <div class="row">
        <script>
            function done() {
                alert("Are You Sure To Delete This Customer?");
            }
        </script>
        <div class="col" style="background: linear-gradient(black, #9f682b), #734c21;">
            <div class="container">
                <div class="row" style="padding-top: 59px;color: rgb(33, 37, 41);">
                    <div class="col-md-6" style="padding-top: 138px;padding-right: 16px;padding-left: 164px;background: linear-gradient(black, #9f682b), #734c21;">
                        <div class="card" style="margin-left: -85px;">
                            <div class="card-body" style="border-radius: 10px;margin-left: -5px;border-color: var(--bs-green);background: linear-gradient(black, #53321f), #53321f;">
                                <h4 class="card-title" style="text-align: center;color: #9f682b;">Delete customer</h4>
                                <form action="deletecusdb.php" method="POST" class="search-form">
                                    <div class="input-group" style="border-left-color: var(--bs-gray);"><input class="form-control" type="text" id="cusIdDelCus" name="cus_id" placeholder="customer ID" style="background: #dccab4;"><button onclick='done()' class="btn btn-light" id="deleteButtonDelCus" type="submit" style="color: #9f682b;font-weight: bold;background: linear-gradient(black, #734c21), #734c21;">Delete</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="background: linear-gradient(black, #9f682b), #734c21;color: #2d190d;"><img class="img-fluid" src="PngItem_4835922.png"></div>
                </div>
            </div>
        </div>
    </div>  
</body>

</html>