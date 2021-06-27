<?php

    $sname = "127.0.0.1";
    $uname = "c5957shihua";
    $password = "root";

    $db_name = "c5957mir2";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        echo "Connection failed!";
        exit();
    }

?>