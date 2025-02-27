<?php

    // print_r($_REQUEST);
    // print_r($_GET);

    if($_SERVER['REQUEST_METHOD'] !== "POST") {
        exit();
    }   else {
    echo "<br> Hello ".$_POST['fname']."you are ".$_POST["fage"]. " years old";
    }

?>