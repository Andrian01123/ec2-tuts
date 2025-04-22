<?php
$host = 'database-1.c38kuy62qmhp.ap-southeast-1.rds.amazonaws.com';
$db = 'database-1';
$user = 'admin';
$pass = 'Billion.0513'; // or your MySQL password

// Connect to database
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert into database
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>