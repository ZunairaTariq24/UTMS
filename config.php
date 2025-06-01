<?php
$host = "localhost";
$user = "root";          // default XAMPP user
$password = "";          // default empty password in XAMPP
$dbname = "university_transport";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
