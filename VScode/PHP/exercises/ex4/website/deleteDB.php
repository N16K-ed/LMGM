<?php
$servername = "localhost:3308";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "DROP DATABASE bdFran";
if ($conn->query($sql) === TRUE) {
  echo "Database deleted successfully";
} else {
  echo "Error deleting database: " . $conn->error;
}

$conn->close();
?>