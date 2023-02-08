<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jagan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form values
$email = $_POST['email'];
$password = $_POST['password'];

// Authenticate user
$sql = "SELECT * FROM students WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // User authenticated
  echo "User authenticated successfully";
} else {
  // User not authenticated
  echo "Incorrect email or password";
}

$conn->close();
?>



