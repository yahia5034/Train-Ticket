
<?php
function emptyInputSignup($fname, $lname, $username, $pass, $email, $phone, $dob, $credit)
{
    if (empty($fname) || empty($lname) || empty($username) || empty($pass) || empty($email) || empty($phone) || empty($dob)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUID($username)
{
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function duplicate_userName($conn, $username)
{
    $sql = "SELECT userName FROM customer WHERE userName ='$username';";
    $res = mysqli_query($conn, $sql);
    $num_of_rows = mysqli_num_rows($res);

    if ($num_of_rows != 0) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function CreateUser($conn, $fname, $lname, $username, $pass, $email, $phone, $dob, $credit)
{
    $sql = "INSERT INTO customer( fName,lName,userName,password,email,phone,dob,credit_num)VALUES('$fname','$lname','$username','$pass','$email','$phone','$dob','$credit');";
    mysqli_query($conn, $sql);
    header("location: ../login.php");
}
function emptyInputlogin($username, $password)
{
    if (empty($username) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function login_user($conn, $username, $password)
{
    $sql = "SELECT *  from customer where username='$username' ;";
    $result = mysqli_query($conn, $sql);
    $num_of_rows = mysqli_num_rows($result);
    if ($num_of_rows == 0) {
        header("location: ../login.php?error=incorrectusername");
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['password']) {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['userid'] = $row['cus_id'];
            $_SESSION['fname'] = $row['fname'];
            header("location: ../index.php");
            exit();
        } else {

            header("location: ../login.php?error=incorrectpassword");
            exit();
        }
    }
}
function login_admin($conn, $username, $password)
{
    $sql = "SELECT *  from admin where username='$username' ;";
    $result = mysqli_query($conn, $sql);
    $num_of_rows = mysqli_num_rows($result);
    if ($num_of_rows == 0) {
        header("location: ../login.php?error=incorrectusername");
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['password']) {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['adminid'] = $row['admin_id'];
            $_SESSION['fname'] = $row['fname'];
            header("location: ../index.php");
            exit();
        } else {
            header("location: ../login.php?error=incorrectpassword");
            exit();
        }
    }
}
