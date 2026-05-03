<?php
$host = "mysql";
$user = "root";
$password = "Pass@123";
$db = "jobtracker";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
