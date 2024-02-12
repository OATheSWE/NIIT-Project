<?php
$host = "localhost";
$root = "root";
$pwd = "";
$database = "school_web";

$conn = mysqli_connect($host, $root, $pwd, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>