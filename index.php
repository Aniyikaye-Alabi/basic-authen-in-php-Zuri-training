<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h3>Registration Portal</h3>
    <form action="processregistration.php" method="POST">
        <input type="text" name="name" value="" placeholder="Username"/>
        <input type="number" name="age" value="" placeholder="Age"/>
        <input type="date" name="DOB" value="" placeholder="Date of Birth"/>
        <input type="password" name="password" placeholder="Set Password">
        <input type="submit" name="submit" value="Submit">
    </form>
    <p>Already signed up <a href="login.php">login here</a></p>
</body>
</html>