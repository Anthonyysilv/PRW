<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpchatapp_db";

    $con = mysqli_connect($hostname, $username, $password, $dbname);
    if (!$con) {
        echo "Database connection error".mysqli_connect_error();
    }
?>