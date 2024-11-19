<?php
    include "header.php";
?>

<table>
        <th>الرقم</th>
        <th>إسم المريض</th>
        <th>البريد الإلكترونى</th>
        <th>التاريخ</th>



<?php

    $host = "localhost";
    $user = "root";
    $password = "pass123";
    $dbName = "alshifaa_hospital";

    $conn = mysqli_connect($host, $user, $password, $dbName);

    // if (isset($conn)) {
    //     echo "Connected to DB";
    // } else {
    //     echo "Failed to connect";
    // }


    $query = "SELECT* FROM patients";
    $result = mysqli_query($conn, $query);


    if ($result) {

        while ($row=mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['date']."</td></tr>";
        }
    } else {
        echo "No result";
    }
    
?>

</table>