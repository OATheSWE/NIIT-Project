<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Registeration</title>
</head>
<body>
<form action="Reg.php" method="post" enctype="multipart/form-data">
        <h1>Registeration<h1>
        <p>Fill up the correct values<p>

        <label for="Name"><b>Name</b></label>
        <input type="text" name="lastname" id="" required><br/>

        <label for="Username"><b>Username</b></label>
        <input type="text" name="username" id="" required><br/>

        <label for="jamb-number"><b>Jamb number</b></label>
        <input type="number" name="Jamb number" id="" required><br/>

        <label for="Faculty"><b>Faculty</b></label>
        <input type="text" name="faculty" id="" required><br/>

        <label for="password"><b>Password</b></label>
        <input type="text" name="password" id="" required><br/>
       
     <button type="submit" name="submit">SUBMIT</button>
    </form>
</body>
</html>

<?php


if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pwd = $_POST['password'];
    if($user == $username && $pwd == $password){
        $_SESSION['username'] = $user;
        header("Location: login.php");
        exit;
    }
    else{
        echo "invalid username or password";
    }

}



?>