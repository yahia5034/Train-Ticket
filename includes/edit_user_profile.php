<!DOCTYPE html>
<html lang="en">
<?php
include_once 'dbh.php';
if (isset($_POST['cus_id'])) {

    $cus_id = $_POST['cus_id'];
    $sql = "SELECT * from  customer WHERE customer.cus_id=$cus_id;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $first = $row['fname'];
            $last = $row['lname'];
            $username = $row['username'];
            $id = $row['cus_id'];
            $password = $row['password'];
            $email = $row['email'];
            $phone = $row['phone'];
            $birth = $row['dob'];
            $credit = $row['credit_num'];
        }
    } else {
        header("location: ../includes/edit_user_profile.php?signup=unsuccess");
        return 0;
    }
} else {
    echo 'Invalid id';
    die();
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>edit_user_ profile</title>
    <link rel="stylesheet" href="edit_user_profile_assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="edit_user_profile_assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="edit_user_profile_assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="edit_user_profile_assets/css/styles.css">
</head>

<body style="margin-left: 0px;background: linear-gradient(180deg, black, #c78e6b), rgb(129,80,51);">
    <div class="container profile profile-view" id="profile">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info alert-dismissible absolue center" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>Profile save with success</span></div>
            </div>
        </div>
        <form action="editcusdb2.php" method="POST">
            <div class="row profile-row">
                <div class="col-md-4 relative" style="background: #dccab4;">
                    <div class="avatar"><img class="img-fluid" src="favpng_harry-potter-and-the-philosophers-stone-lord-voldemort-ron-weasley-j-k-rowling.png" style="background: linear-gradient(-110deg, black, #815033), #815033;margin-top: 50px;width: 295.7px;height: 380.7px;margin-left: 60px;"></div><input class="form-control" type="text" style="background: rgb(220,202,180);border-color: rgb(220,202,180);color: rgb(83,50,31);">
                </div>
                <div class="col-md-8" style="background: #dccab4;">
                    <h1 style="color: rgb(83,50,31);">User's Profile </h1>
                    <hr style="background: rgb(83,50,31);">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label" style="color: rgb(83,50,31);">Firstname </label><input class="form-control" type="text" name="first_name" value="<?php echo $first; ?>" style="background: linear-gradient(black, #c78e6b), rgb(129,80,51);"></div>
                        </div>
                        <div class="col-sm-12 col-md-6" style="border-color: rgb(83,50,31);">
                            <div class="form-group mb-3"><label class="form-label" style="color: rgb(83,50,31);">Lastname </label><input class="form-control" type="text" name="last_name" value="<?php echo $last; ?> " style="background: linear-gradient(black 4%, #c78e6b 100%), rgb(129,80,51);"></div>
                        </div>
                    </div>
                    <div class="form-group mb-3"><label class="form-label" style="color: rgb(83,50,31);">Email </label><input class="form-control" type="email" autocomplete="off" name="email" value="<?php echo $email; ?> " style="border-color: rgb(83,50,31);background: linear-gradient(black, #c78e6b), rgb(129,80,51);"></div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label" style="color: rgb(83,50,31);">Username</label><input readonly class="form-control" name="user_name" value="<?php echo $username; ?> " autocomplete="off" required="" style="border-color: rgb(83,50,31);background: linear-gradient(black, #c78e6b), rgb(129,80,51);"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label" style="color: rgb(83,50,31);">Password</label><input class="form-control" type="text" name="cus_password" value="<?php echo $password; ?>" autocomplete="off" required="" style="border-color: rgb(83,50,31);background: linear-gradient(black, #c78e6b), rgb(129,80,51);"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="padding-bottom: 15px;">
                            <div><label class="form-label" style="color: rgb(83,50,31);">ID</label><input readonly class="form-control" type="text" name="cus_id" value="<?php echo $id; ?> " style="border-color: rgb(83,50,31);background: linear-gradient(black, #c78e6b), rgb(129,80,51);"></div>
                        </div>
                        <div class="col">
                            <div><label class="form-label" style="color: rgb(83,50,31);">Phone number</label><input class="form-control" name="phone_num" value="<?php echo $phone; ?>" type="text" style="border-color: rgb(83,50,31);background: linear-gradient(black, #c78e6b), linear-gradient(black, white), rgb(129,80,51);"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="padding-bottom: 15px;">
                            <div><label class="form-label" style="color: rgb(83,50,31);">Credit number</label><input class="form-control" name="credit_num" value="<?php echo $credit; ?> " type="text" style="border-color: rgb(83,50,31);background: linear-gradient(black, #c78e6b), rgb(129,80,51);"></div>
                        </div>
                        <div class="col">
                            <div><label class="form-label" style="color: rgb(83,50,31);">Birth date</label><input class="form-control" name="birth_date" value="<?php echo $birth; ?>" type="text" style="border-color: rgb(83,50,31);background: linear-gradient(black, #c78e6b), rgb(129,80,51);"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col" style="margin-bottom: 15px;"><button class="btn btn-primary" type="submit" style="margin-left: 570px;margin-top: 11px;width: 150.5px;background: rgb(83,50,31);height: 56px;color: #dccab4;border-radius: 10px;border-color: #dccab4;">SAVE</button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>