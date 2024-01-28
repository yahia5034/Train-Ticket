<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/nav-styles.css">
    <style>
        .nav-link:hover {
            background-color: white;
            border-radius: 5px;
        }

        .navbar {
            position: fixed !important;
            width: 100% !important;

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" style="height: 80px;background-color: #734c21;color: #ffffff">
        <div class="container-fluid"><img src="platform-9-3-4-logo-4183841033-seeklogo.com.png" style="width: 56px;"><a class="navbar-brand" style="color: #2d190d;">&nbsp;HOGWARTS EXPRESS</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">


                    <?php
                    session_start();
                    if (isset($_SESSION['adminid']) || isset($_SESSION['userid'])) {
                        echo '
                        <li class="nav-item">
                        <a class="nav-link " style="color: #2d190d;position: relative;right: 25px;font-weight: bold;" href="index.php">&nbsp;Home</a>
                        </li>';

                        if (isset($_SESSION['adminid'])) {
                            echo '
                        <div class="nav-item dropdown" ><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="text-decoration: none;color: #2d190d;margin-top: 0;margin-right: 0;margin-bottom: 0;position: relative;top: 8px;font-weight: bold;">Manage Customer</a>
                        <div class="dropdown-menu" style="background: #212020 !important;color: rgb(114,123,13) !important;margin-top: 15px !important;">
                        <a class="dropdown-item" href="signup.php" style="color: #fff5f5;background: #212020 !important;">Add Customer</a>
                        <a class="dropdown-item" href="includes/admin_edit_cus.php" style="color: #fff !important;background: #212020 !important;">Edit Customer</a>
                        <a class="dropdown-item" href="includes/admin_del_cus.php" style="color: #fff !important;background: #212020 !important;">Delete Customer</a></div>
                        </div>
                        
                        <div class="nav-item dropdown" ><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="margin-left:20px;text-decoration: none;color: #2d190d;margin-top: 0;margin-right: 0;margin-bottom: 0;position: relative;top: 8px;font-weight: bold;">Manage</a>
                        <div class="dropdown-menu" style="background: #212020 !important;color: rgb(114,123,13) !important;margin-top: 15px !important;">
                        <a class="dropdown-item" href="view_train_admin.php?view_own_tickets=1" style="color: #fff5f5;background: #212020 !important;">Trains</a>
                        <a class="dropdown-item" href="view_travel_admin.php" style="color: #fff !important;background: #212020 !important;">Travels</a></div>
                        </div>
                        <li class="nav-item">
                        <a class="nav-link" style="color: #2d190d;font-weight: bold;" href="includes/admin_edit_self.php">&nbsp;Portfolio</a></li>';
                        } else {
                            echo '
                        <div class="nav-item dropdown" ><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="text-decoration: none;color: #2d190d;margin-top: 0;margin-right: 30px;margin-bottom: 0;position: relative;top: 8px;font-weight: bold;">Manage</a>
                        <div class="dropdown-menu" style="background: #212020 !important;color: rgb(114,123,13) !important;margin-top: 15px !important;">
                        <a class="dropdown-item" href="includes/deletecusself.php" style="color: #fff !important;background: #212020 !important;">Delete Account</a></div>
                        </div>
                        <li class="nav-item">
                        <a class="nav-link " style="color: #2d190d;position: relative;right: 25px;font-weight: bold;" href="view_ticket.php?view_own_tickets=1">&nbsp;View My Reservations</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " style="color: #2d190d;position: relative;right: 25px;font-weight: bold;" href="view travel cus/view_travel_cus.php">&nbsp;Schedule</a>
                        </li>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " style="color: #2d190d;position: relative;right: 25px;font-weight: bold;" href="search.php">&nbsp;Book</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" style="color: #2d190d;font-weight: bold;" href="includes/customer_edit_self.php">&nbsp;Portfolio</a></li>';
                        }
                        echo '
                       
                        <li class="nav-item">
                        <a class="nav-link" style="color: #2d190d;font-weight: bold;" href="includes/logout.inc.php"><i class="fa fa-sign-out"></i>&nbsp;Log out</a></li>
                        ';
                    } else {
                        echo '
                            <li class="nav-item">
                            <a class="nav-link" style="color: #2d190d;font-weight: bold;" href="login.php">Log in</a></li>
                            <li class="nav-item">
                            <a class="nav-link" style="color: #2d190d;font-weight: bold;" href="signup.php">Signup</a></li>
                        ';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <script src="assets/bootstrap/js/bootstrap.min.js "></script>

</body>

</html>