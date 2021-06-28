<?php

    $sname = "127.0.0.1";
    $uname = "c5838pawel";
    $password = "root";

    $db_name = "c5838flex";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        echo "Connection failed!";
        exit();
    }

?>