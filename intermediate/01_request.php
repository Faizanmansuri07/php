<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <input type="text" name='uname' placeholder="Enter name">
                <input type="submit" name='submit' value="submitData">
            </form>


        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name =$_REQUEST['uname'];
            if (empty($name)) {
                echo "Name is empty";
              } else {
                echo $name;
              }
        }
        ?>
</body>
</html>