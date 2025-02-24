<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "employee";

    $conn = mysqli_connect($server, $user, $pass, $db);

    if(mysqli_connect_error()) {
        exit();
    }

?>