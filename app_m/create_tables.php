<?php
// Include config file
require_once "config2.php";

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS reservations (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
customer VARCHAR(30) NOT NULL,
table_number INT(2) NOT NULL,
phone_number VARCHAR(15) NOT NULL,
date_of_reservation DATE NOT NULL,
time_of_reservation TIME NOT NULL,
booked_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Create table
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();

header('Location: view_tables.php');
?>
