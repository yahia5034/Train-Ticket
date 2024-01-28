<?php
include "dbh.php";
$select = "SELECT * FROM travel";
$query2 = mysqli_query($conn, $select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table,td,th {
            margin: 10px auto;
            background-color: #eee;
            border: solid black 1px;
            border-collapse: collapse;
            padding: 10px;
        }

        th {
            background-color: gray;
        }

        .edit {
            background-color: blue;
            color: white;
        }

        .new {
            background-color: green;
            color: white;
            margin-left: 66%;
            margin-top: 30px;
        }
        h1{
            font-size: xx-large;
            background-color: #d26e3c;
            text-align: center;
            width: 400px;
            padding: 10px;
            border-radius: 15px;
            margin-left: 35%;
        }
    </style>
</head>
<body>
    <h1>TOOT TOOT SCHEDULE</h1>
<table>
        <thead>
            <tr>
                <th>Travel ID</th>
                <th>Train ID</th>
                <th>Source</th>
                <th>Destination</th>
                <th>Date</th>
                <th>Time</th>
                <th>Number Of Available Seats</th>
            </tr>

        </thead>
        <tbody>
            <?php
            $num = mysqli_num_rows($query2);
            if ($num > 0) {
                while ($result = mysqli_fetch_assoc($query2)) {
                    echo "<tr>
                                <td>" . $result['travel_id'] . "</td>
                                <td>" . $result['train_id'] . "</td>
                                <td>" . $result['travel_source'] . "</td>
                                <td>" . $result['travel_destination'] . "</td>
                                <td>" . $result['travel_date'] . "</td>
                                <td>" . $result['travel_time'] . "</td>
                                <td>" . $result['no_of_seats_available'] . "</td>
                            </tr>";
                }
            }
            ?>
</body>
</html>