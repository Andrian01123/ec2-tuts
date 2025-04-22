<?php
$host = 'database-1.c38kuy62qmhp.ap-southeast-1.rds.amazonaws.com'; // Replace with your RDS endpoint
$db   = 'database-1';                   // The DB name you created
$user = 'admin';                  // Your RDS master username
$pass = 'Billion.0513';                  // Your RDS master password
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM users");

echo "<table border='1'>
<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td></tr>";
}
echo "</table>";

$conn->close();
?>
