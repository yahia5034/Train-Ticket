<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>signup</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/signup-styles.css">
    <style>
        .error{
            background-color: red;
            color: white;
        }
    </style>
</head>


<body class="text-start m-auto" style="background: #d6b881;color: #845a08;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div style="width: 80%;height: 30%;margin-top: 40px;margin-left: 30px;margin-bottom: 30px;">
                    <div class="table-responsive" style="border-radius: 20px;border-style: solid;border-color: #4d340f;height: initial;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="fs-3" style="color: #100e0e;font-family: initial;">
                                        <h1><strong>Sign up</strong></h1>
                                    </th>
                                </tr>
                            </thead>
                            <form action="includes/signup.inc.php" method="POST">
                            <tbody>
                                <tr>
                                    <td><label class="form-label">First Name:</label></td>
                                    <td><input class="border rounded-0 border-3" name= "FName" type="text" style="margin-left: 49px;border-width: 0px;"required></td>
                                </tr>
                                <tr>
                                    <td><label class="form-label">Last Name:</label></td>
                                    <td><input class="border rounded-0 border-3"  name= "LName" type="text" style="margin-left: 49px;"required></td>
                                </tr>
                                <tr>
                                    <td><label class="form-label">UserName:</label></td>
                                    <td><input class="border rounded-0 border-3" name= "userName"type="text" style="margin-left: 49px;"required></td>
                                </tr>
                                <tr>
                                    <td><label class="form-label">Password:<br></label></td>
                                    <td><input class="border rounded-0 border-3" name= "Password" type="text" style="margin-left: 49px;"required></td>
                                </tr>
                                <!-- <tr>
                                    <td><label class="form-label">Renter password:<br></label></td>
                                    <td><input class="border rounded-0 border-3" name= "email" type="text" style="margin-left: 49px;"></td>
                                </tr> -->
                                <tr>
                                    <td><label class="form-label">Email</label>&nbsp;:</td>
                                    <td><input class="border rounded-0 border-3" name= "email"type="text" style="margin-left: 49px;"required></td>
                                </tr>
                                <tr>
                                    <td><label class="form-label">Phone Number:<br></label></td>
                                    <td><input class="border rounded-0 border-3" name= "PhoneNum"type="text" style="margin-left: 49px;"required></td>
                                </tr>
                                <tr>
                                    <td><label class="form-label">Birth Date:<br></label></td>
                                    <td><input class="border rounded-0 border-3" name= "DOB" type="date" style="margin-left: 49px;width:188.2px;" required=""></td>
                                </tr>
                                <tr>
                                    <td><label class="form-label">Credit Number</label></td>
                                    <td><input class="border rounded-0 border-3" name= "credit" type="text" style="margin-left: 49px;"></td>
                                </tr>
                                <tr>
                                    <td> <?php 
                                            if(isset($_GET['error'])){
                                                $error=$_GET['error'];
                                                if($error=="empty"){
                                                echo "<p class='error'> Fill All Feilds </p>";
                                                }else if($error=='invalid_username')
                                                {
                                                    echo "<p class='error'>Invalid Username</p>";
                                                }else if($error=='invalid_email')
                                                {
                                                    echo "<p class='error'>Invalid Email/p>"; 
                                                }
                                                else if($error=='usernameExist')
                                                {
                                                    echo "<p class='error' >Username Exist , please choose another one</p>";
                                                }
                                            }
                                                
                                            ?></td>
                                    <td class="text-end"><button class="btn btn-primary " type="submit"  name="submit" style="margin-right: 25px;background-color: #4d340f;">Sign up</button></td>
                                   
                                </tr>
                                
                            </tbody>
                        </form>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 offset-xl-0 align-items-center">
                <div style="/*background-image: url(&quot;aldain-austria-316143-unsplash.jpg&quot;);*/"></div><img src="assets/img/dining-room-5114247__480.jpg" width="100%" height="85%" style="margin-top: 40px;">
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>