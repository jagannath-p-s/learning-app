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
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$sem = $_POST['sem'];
$branch = $_POST['branch'];
$dob = $_POST['dob'];

// Insert into table
$sql = "INSERT INTO students (username, email, password, branch, sem, dob)
VALUES ('$name', '$email', '$password', '$branch', '$sem', '$dob')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>