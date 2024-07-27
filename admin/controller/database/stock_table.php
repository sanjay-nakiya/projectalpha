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

// sql to create Users table
$sql = "CREATE TABLE stock 
(
    id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(4) NOT NULL,
    product_id VARCHAR(30) NOT NULL,
    stock INT(4) NOT NULL  DEFAULT '0',   
)";

if (mysqli_query($conn, $sql)) {
  echo "Table Users created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);
?>