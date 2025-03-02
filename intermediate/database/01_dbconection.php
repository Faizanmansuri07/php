<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "employee";


    $con = mysqli_connect($server, $user, $password, $db);
    if(!$con) {
        die("Error while connecting database".mysqli_connect_error());
        exit();
    } 
?>