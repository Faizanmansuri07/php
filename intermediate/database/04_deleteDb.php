<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<form action="04_deleteDb.php" method="post">
            <input type="number" name="sid" placeholder="Enter ID" required> <br>
            <input type="submit" name="submit" value="delete">
        </form>

        <?php
            include '01_dbconection.php';
            if(!isset($_POST['submit'])) {
                exit();
            }

            $id = htmlspecialchars(trim($_POST['sid']));
            $sql = "delete from emp_info where eno=$id";
            $result = mysqli_query($con, $sql);

            if(mysqli_affected_rows($con) > 0) {
            echo "data deleted sucessfully";
            }

        ?>
</body>
</html>