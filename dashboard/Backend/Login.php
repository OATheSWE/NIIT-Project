<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $matric = $_POST["matric_number"];
        $name = $_POST["name"];
        $password = $_POST["password"];
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