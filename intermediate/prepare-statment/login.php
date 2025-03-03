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
    <form method="POST" action="login.php">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Submit</button>
        <p>Already registered? <a href="register.php">Login</a></p>
    </form>
</div>

    <?php
    $conn = mysqli_connect("localhost","root", "", "user_system");

        if($_SERVER['REQUEST_METHOD'] === "POST") {
            $user = trim($_POST['username']);
            $password = trim($_POST['password']);

            if(!preg_match("/^[a-zA-Z-'  ]+$/", $user)) {
                echo "<p style=color:red>Enter Valid username</p>";
                exit();
            }
            getUser($user,$password);
        }

        function getUser($user,$password) {
            global $conn;
            $sql = "select password,username from user_info where username = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                if(password_verify($password, $row['password'])) {
                    echo "<p style=color:green>Login sucessfully</p>";
                    header("Location: greet.php?user=" . urlencode($row['username']));
                }   else {
                    echo "<p style=color:red>ERROR : while login</p>";
                }
            }   else {
                echo "<p style=color:red>ERROR : User not found</p>";
            }
        }

    ?>
</body>
</html>