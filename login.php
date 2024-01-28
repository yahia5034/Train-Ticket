<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/loginstyle.css">
</head>

<body style="margin-top: 30px;"><div id="main-wrapper" class="container">
<?php 
    session_start();
    if(((isset($_SESSION['userid']))) || ((isset($_SESSION['adminid']))))
    {
        header("location: index.php");
    }
    ?>
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-5">
                                    <h1 class="fs-1 text-theme" style="font-family: 'Abril Fatface', serif;"><strong>Login</strong></h1>
                                </div>
                                <h6 class="h5 mb-0 text-theme">Just Log In and Book your travel now .</h6>
                                <p class="text-muted mt-2 mb-5"></p>
                                <form action="includes/login.inc.php" method='post'>
                                    <div class="form-group">
                                        <label for="userName">User name</label>
                                        <input type="text" class="form-control " name="username" id="username" required/>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" required />
                                        Admin<input type="checkbox" name="checkbox" id="">
                                    </div>
                                    <button type="submit" class="btn btn-theme" name='submit'>Login</button>
                                    <?php
                                        if(isset($_GET['error'])){
                                            if($_GET['error']==="empty"){
                                            echo "<p> Fill All Feilds </p>";
                                            }else if($_GET['error']==='incorrectusername')
                                            {
                                                echo "<p>Invalid Username</p>";
                                            }else if($_GET['error']==='incorrectpassword')
                                            {
                                                echo "<p>Invalid password</p>"; 
                                            }else if($_GET['error']==='none')
                                            {
                                                session_start();
                                                header("Location: index.php"); 
                                            }
                                        }
                                        ?>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-inline-block">
                            <div class="account-block rounded-right">
                                <div class="overlay rounded-right"></div>
                                <div class="account-testimonial">
<!--                                     <h4 class="text-white mb-4">This beautiful theme yours!</h4>
                                    <p class="lead text-white">"Best investment i made for a long time. Can only recommend it for other users."</p>
                                    <p>- Admin User</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
<!--             -->
            <!-- end row -->
        </div>
        <!-- end col -->
    </div>
    <!-- Row -->
</div>
 <p class="text-muted text-center mt-3 mb-0">Don't have account? <a href="signup.php" class="text-primary ml-1">Sign up</a></p>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>