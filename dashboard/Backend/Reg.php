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
         <label for="firstname"><b>First Name</b></label>
        <input type="text" name="firstname" id="" required><br/>

        <label for="firstname"><b>Last Name</b></label>
        <input type="text" name="lastname" id="" required><br/>

        <label for="firstname"><b>Username</b></label>
        <input type="text" name="username" id="" required><br/>

        <label for="firstname"><b>Jamb number</b></label>
        <input type="number" name="Jamb number" id="" required><br/>

        <label for="firstname"><b>Faculty</b></label>
        <input type="text" name="faculty" id="" required><br/>

        <label for="firstname"><b>Password</b></label>
        <input type="text" name="password" id="" required><br/>
       
     <button type="submit" name="submit">SUBMIT</button>
    </form>
</body>
</html>

<?php
// if(isset($_POST['submit'])){
//     header("Location: Login.php");
//     exit;
// }


if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $password = $_POST['pwd'];
    if($user == $username && $password == $pwd){
        $_SESSION['username'] = $user;
        header("Location: login.php");
        exit;
    }
    else{
        echo "invalid username or password";
    }

}



?>