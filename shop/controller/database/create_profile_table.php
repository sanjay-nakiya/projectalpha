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
$sql = "CREATE TABLE customer 
(
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    shop INT(4) NOT NULL,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,   
    village VARCHAR(255) NOT NULL,
    mobile INT(10) NOT NULL,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(10) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    user_role INT(1) NOT NULL DEFAULT '4'
    
)";

if (mysqli_query($conn, $sql)) {
  echo "Table Users created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);
?>