<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<h2>Login</h2>
    <?php if(isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <form method="post" action="">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>

        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd"><br><br>

        <input type="submit" name="submit" value="Login">
    </form>





<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $matric = $_POST["matric_number"];
        $name = $_POST["name"];
        $password = $_POST["password"];

        $_SESSION['username'] = $user;
        header("Location: dashboard.php"); // Redirect to dashboard on successful login
        exit;
    ?>
        <h1><?php echo 'Welcome ' . $name; ?></h1>

       
    <?php
    } else {
        echo "Access denied. Please submit your matriculation number and password.";
    }
    ?>
</body>

</html>
</body>
</html>