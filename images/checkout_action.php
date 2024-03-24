<?php
// Database connection details
$servername = "localhost"; // Change to your MySQL server hostname (often 'localhost')
$username = "id21047578_arunkumarcopybook"; // Change to your MySQL username
$password = "Arun6768@"; // Change to your MySQL password
$dbname = "id21047578_arunkumar"; // Change to the name of your MySQL database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind parameters
$stmt = $conn->prepare("INSERT INTO checkout_info (name, email, mobile, house, street, city, state, landmark) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $email, $mobile, $house, $street, $city, $state, $landmark);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$house = $_POST['house'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$landmark = $_POST['landmark'];

if ($stmt->execute()) {
    // Redirect to success page
    header("Location: success.html");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
