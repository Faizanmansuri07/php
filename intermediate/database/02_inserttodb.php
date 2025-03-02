<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Employee Data</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Insert Employee Data</h2>
        <form action="02_inserttodb.php" method="post">
            <input type="number" name="id" placeholder="Enter ID" required> <br>
            <input type="text" name="name" placeholder="Enter Name" required> <br>
            <input type="text" name="city" placeholder="Enter City" required> <br>
            <input type="submit" name="submit" value="Insert into Database">
        </form>

        <a href="show_db.php" target="_blank">View Database</a>
    </div>

    <?php
    include '01_dbconection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        checkInputs();
    }

    function checkInputs() {
        global $con;

        $id = htmlspecialchars(trim($_POST['id']));
        $name = htmlspecialchars(trim($_POST['name']));
        $city = htmlspecialchars(trim($_POST['city']));

        if (empty($id) || empty($name) || empty($city)) {
            die("<p style='color:red;'>Error: All fields are required!</p>");
        }

        $sql = "INSERT INTO emp_info VALUES ($id, '$name', '$city')";
        if (mysqli_query($con, $sql)) {
            echo "<p style='color:green;'>Data successfully inserted into the database!</p>";
        } else {
            echo "<p style='color:red;'>Error inserting data: " . mysqli_error($con) . "</p>";
        }

        mysqli_close($con);
    }
    ?>
</body>
</html>
