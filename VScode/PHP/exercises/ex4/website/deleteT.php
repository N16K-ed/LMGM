<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "bdFran";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "DROP TABLE MyGuests;";

if ($conn->query($sql) === TRUE) {
  echo "Table <em>MyGuests</em> deleted in <strong>$dbname</strong> successfully";
} else {
  echo "Error deleting table: " . $conn->error;
}

$conn->close();
?>