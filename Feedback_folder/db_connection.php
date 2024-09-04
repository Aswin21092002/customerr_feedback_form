<?php
$servername = "localhost";
$username = "root"; // Change this to your MySQL username
$password = "1234"; // Change this to your MySQL password
$database = "feedbackDB"; // Name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
