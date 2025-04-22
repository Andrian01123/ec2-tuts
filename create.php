<?php
$host = 'database-1.c38kuy62qmhp.ap-southeast-1.rds.amazonaws.com'; // Replace with your RDS endpoint
$db   = 'database-1';                   // The DB name you created
$user = 'admin';                  // Your RDS master username
$pass = 'Billion.0513';                  // Your RDS master password
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name  = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
