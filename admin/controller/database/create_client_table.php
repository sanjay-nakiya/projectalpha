<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alpha";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// SQL query to create clients table
$sql = "CREATE TABLE clients (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  store_name VARCHAR(255) NOT NULL,
  owner_name VARCHAR(100) NOT NULL,
  category VARCHAR(100) NOT NULL,
  gst_no VARCHAR(15),
  logo VARCHAR(255) NOT NULL,
  whatsapp_no VARCHAR(15) NOT NULL,
  email VARCHAR(100) NOT NULL,
  other_mobile_no VARCHAR(15) NOT NULL,
  address TEXT,
  google_address_link VARCHAR(255),
  location VARCHAR(100)
)";

if (mysqli_query($conn, $sql)) {
  echo "Table client created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);
?>