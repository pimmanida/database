<?php
// MySQL database variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_application_2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
