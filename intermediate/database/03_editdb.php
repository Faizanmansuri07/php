<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
        <h2>Edit Employee Data</h2>
        <form action="03_editdb.php" method="post">
            <input type="number" name="sid" placeholder="Enter ID" required> <br>
            <p>Enter new Entries</p>
            <input type="text" name="sname" placeholder="Enter Name" required> <br>
            <input type="text" name="scity" placeholder="Enter City" required> <br>
            <input type="submit" name="submit" value="Edit into Database">
        </form>

        <?php
            include '01_dbconection.php';

            if ($_SERVER['REQUEST_METHOD'] !== "POST") {
                exit();
            }
            

            
        $id = htmlspecialchars(trim($_POST['sid']));
        $name = htmlspecialchars(trim($_POST['sname']));
        $city = htmlspecialchars(trim($_POST['scity']));

        if (empty($id) || empty($name) || empty($city)) {
            die("<p style='color:red;'>Error: All fields are required!</p>");
        }

        $sql = "update emp_info set ename='$name', ecity='$city' where eno=$id";
        $result = mysqli_query($con, $sql);

        if(mysqli_affected_rows($con) > 0) {
            echo "data edited sucessfully";
        }
        mysqli_close($con);

        ?>
</body>
</html>