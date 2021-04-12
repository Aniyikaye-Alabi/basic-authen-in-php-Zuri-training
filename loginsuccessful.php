<?php
    session_start();

    $username = $_SESSION['username'];

    echo "Login Successful, welcome to my world <strong>$username</strong>.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Click here to Logout</a>
</body>
</html>