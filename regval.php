<?php
$servername = "localhost";
$username = "";
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
$semester = $_POST['semester'];
$branch = $_POST['branch'];
$dob = $_POST['dob'];

// Insert into table
$sql = "INSERT INTO students (username, useremail, password, sem, branch, dob)
VALUES ('$name', '$email', '$password', '$semester', '$branch', '$dob')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
