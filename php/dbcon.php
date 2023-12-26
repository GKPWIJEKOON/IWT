<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$db_password = "";
$dbname = "diet_and_health";

// Create a new connection
$conn = new mysqli($servername, $username, $db_password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>