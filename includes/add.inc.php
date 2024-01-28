<?php
    include_once "dbh.php";
    $train_id = $_POST['Train_ID'];
    $travel_source = $_POST['Source'];
    $travel_distination = $_POST['Destination'];
    $travel_date = $_POST['Date'];
    $travel_time = $_POST['Time'];
    $no_of_seats_available = $_POST['Number_Of_Available_Seats'];
    $first= $_POST['first'];
    $second= $_POST['second'];

        if(isset($_POST['add'])){
        $sql = "INSERT INTO travel( travel_date, travel_time, travel_source, travel_destination, no_of_seats_available, train_id, 1st_price, 2nd_price)
         VALUES ( '$travel_date', '$travel_time', '$travel_source', '$travel_distination', '$no_of_seats_available', '$train_id', '$first', '$second');";
        mysqli_query($conn, $sql);
        header("location: ../view_travel_admin.php?add=success");
    }
