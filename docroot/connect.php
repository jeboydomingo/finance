<?php
$host = "db";
$user = "user";
$pswd = "user";
$db = "default";

// Create connection.
$conn = new mysqli($host, $user, $pswd, $db);

// Check connection.
if ($conn->connect_error) {
  die ("Connection failed: " . $conn->connect_error);
}
?>
