<?php
if (isset($_GET["user"])) {
    $username = htmlspecialchars($_GET["user"]); // Prevent XSS attacks
} else {
    $username = "Guest";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
</body>
</html>
