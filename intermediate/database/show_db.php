<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Employee Information</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
        </tr>

        <?php 
        include '01_dbconection.php';
        $sql = "SELECT * FROM emp_info";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row["eno"]."</td>";
            echo "<td>".$row["ename"]."</td>";
            echo "<td>".$row["ecity"]."</td>";
            echo "</tr>";
        }

        mysqli_close($con);
        ?>
    </table>
</body>
</html>
