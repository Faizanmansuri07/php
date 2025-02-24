<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="insertoDb.php" method="post" >
    <label for="">
        <p>Employee no</p>
        <input type="number" placeholder="Enter id" name="eno">
    </label> 

    <label for="">
        <p>Employee name</p>
        <input type="text" placeholder="Enter name" name="ename">
    </label> 

    <label for="">
        <p>Employee city</p>
        <input type="text" placeholder="Enter city" name="ecity">
    </label> 
    <br>
    <br>
    <input type="submit" name='submit' value="submit">
    </form>
<?php
    include 'dbConnection.php';
    if(isset($_REQUEST['submit']))  {
        $eno  = $_REQUEST['eno'];
        $ename = $_REQUEST['ename'];
        $ecity = $_REQUEST['ecity'];
        if(!$eno && !$ename && !$ecity) {
            echo "Enter valid entiries";
        }
        $sql = "insert into emp_info values($eno, '$ename', '$ecity')";
        $result  = mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0) {
            echo "Data  inserted successfully";
        }   else {
            echo "There is a problem";
        }
    }
?>
</body>
</html>



