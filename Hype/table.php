<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "REGISTER";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE Signup (
username varchar(80)  PRIMARY KEY, 
email VARCHAR(300) NOT NULL,
phonenumber VARCHAR(300),
trainingEx VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>