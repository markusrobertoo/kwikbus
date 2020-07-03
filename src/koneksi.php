<?php
$servername = "localhost";
$username = "kwikbusi_admin";
$password = "kwikbusadmin";
$dbname = "kwikbusi_kwikbus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>

