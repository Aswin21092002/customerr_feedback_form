<?php
// Include the database connection file
include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $branch = $_POST['branch'];
    $value_for_money = $_POST['value_for_money'];
    $packaging = $_POST['packaging'];
    $quality = $_POST['quality'];
    $display = $_POST['display'];
    $variety = $_POST['variety'];
    $comments = $_POST['any other comments'];
    $employee_id_name = $_POST['employee id & name'];
    $birthday = $_POST['birthday'];
    $anniversary = $_POST['anniversary'];

    // Handle the recording URL if applicable
    $recording_url = ""; // Assuming you handle the audio recording URL

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO feedback (name, phone, email, branch, value_for_money, packaging, quality, display, variety, comments, employee_id_name, birthday, anniversary, recording_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssss", $name, $phone, $email, $branch, $value_for_money, $packaging, $quality, $display, $variety, $comments, $employee_id_name, $birthday, $anniversary, $recording_url);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
