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
    <h2>Register</h2>
    <form method="POST" action="register.php">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" required>
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="number" name="mobile" required>
        </div>
        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" name="dob" required>
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" name="age" required>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Submit</button>
        <p>Already registered? <a href="login.php">Login</a></p>
    </form>
</div>

    <?php
    error_reporting(E_ALL); ini_set('display_errors', 1);
    $conn = mysqli_connect("localhost","root", "", "user_system");

if($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $mobile = htmlspecialchars(trim($_POST['mobile']));
        $date  = $_POST['dob'];
        $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
        $username = htmlspecialchars(trim($_POST['username']));
        $password = trim($_POST['password']);

        if(strlen($password) < 4) {
            echo "<p style=color:red>password shiuld be more than 4 character</p>";

        }   else {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }

        checkUserInputs($name,$mobile,$age, $username);
}

    function checkUserInputs($name,$mobile,$age, $username) {
        if(!preg_match("/^[a-zA-Z-'  ]+$/", $name)) {
            echo "<p style=color:red>Enter Valid name</p>";
        }
        if(!preg_match("/^[0-9]{10,15}$/", $mobile) || strlen($mobile) !== 10) {
            echo "<p style=color:red>Enter Valid mobile number</p>";
        }
        if($age < 0) {
            echo "<p style=color:red>Enter Valid mobile Age</p>";

        }
        if(!preg_match("/^[a-zA-Z-']+$/", $username)) {
            echo "<p style=color:red>Enter Valid user name</p>";
        }
        // insertDataToDB();
        ismobileexist($mobile);
    }

    function ismobileexist($mobile) {
        global $conn,$username;
            $sql = "select * from user_info where mobile = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "i", $mobile);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_affected_rows($conn) > 0) {
            echo "<p style=color:red>mobile number exist in the database</p>";
            }   else {
                // insertDataToDB();
                isuserExist($username);
            }
            mysqli_stmt_close($stmt);
    }

    function isuserExist($username) {
        global $conn;
        $sql = "select * from user_info where username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

      if(mysqli_affected_rows($conn) > 0) {
      echo "<p style=color:red>username exist in the database</p>";
      }   else {
        insertDataToDB();
      }
      mysqli_stmt_close($stmt);
    }


    function insertDataToDB() {
        global $name,$mobile,$age, $username, $password, $date,$conn;

        $sql = "insert into user_info values(?,?,?,?,?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssiss", $name,$mobile, $date, $age, $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_affected_rows($conn) > 0) {
            echo "<p style=color:green>data inserted sucessfully</p>"; 
        }
    }


?>

</body>
</html>