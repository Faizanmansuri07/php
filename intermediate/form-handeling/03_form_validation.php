<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="">
            name : 
            <input type="text" placeholder="Enter Name" name="fname">
        </label>
        <br>
        <br>
        <label for="">
            Age : 
            <input type="text" placeholder="Enter Age" name="fage">
        </label>
        <br>
        <br>

        <label for="">
            College name  :
            <input type="text" placeholder="Enter College" name="fcollege">
        </label>
        <br>
        <br>

        <label for="">
            select Gender
            <input type="radio" value="male" name="gender">Male
            <input type="radio" value="female" name="gender"> Female
            <input type="radio" value="other" name="gender"> Other
        </label>
    <br>
    <br>

        <label for="">
            Share your thought : 
            <textarea name="thought" id="">

            </textarea>
        </label>
        <br>
        <br>

        <input type="submit" name="submit" value="submit">
        </form>

     <h1>Your input</h1>

     <?php
if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    die("Invalid Request");
}

$name = htmlspecialchars(trim($_POST['fname']));
$age = htmlspecialchars(trim($_POST['fage']));
$college = htmlspecialchars(trim($_POST["fcollege"]));
$gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : "";
$thought = htmlspecialchars(trim($_POST['thought']));

if (empty($name) || empty($age) || empty($college) || empty($gender)) {
    die("All fields are required!");
}

echo "<h2>Your Input:</h2>";
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "College: " . $college . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Your Thoughts: " . $thought . "<br>";
?>

</body>
</html>