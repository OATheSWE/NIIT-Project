<?php
$host = "localhost";
$root = "root";
$pwd = "";
$database = "school_db";

// $conn = mysqli_connect($host, $root, $pwd, $database);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

try {
    $pdo = new PDO("mysql:localhost=$host;school_db=$database", $root, $pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>