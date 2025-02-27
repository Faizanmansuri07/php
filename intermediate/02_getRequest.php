<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="02_getRequest.php" method="get">
                <input type="text" placeholder="Enter Name" name="fname">
                <input type="submit" value="submit" name="submit">
        </form>


<?php

    if(isset($_GET['submit'])) {
        $name = $_GET['fname'];
        if(empty($name)) {
            exit();
        }
        echo $name;
    }
?>
</body>
</html>