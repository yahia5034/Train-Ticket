    <!DOCTYPE html>
    <html lang="en">
    <?php
    include_once 'dbh.php';
    session_start();
    $cus_id = $_SESSION['userid'];
    $sql = "SELECT * from  customer WHERE customer.cus_id=$cus_id;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck > 0) {
        $sql = " DELETE  FROM  customer WHERE customer.cus_id = '$cus_id';";
        mysqli_query($conn, $sql);
        header("location: ../includes/logout.inc.php?status=deleted");
    } else {
        header("location: ../login.php?action=failed");
    }
