<?php
$servername = "localhost";
$username = "id17284414_admin";
$password = "8#B1v?!/3a|@7bk7";
$dbname="id17284414_onlinepayment";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>