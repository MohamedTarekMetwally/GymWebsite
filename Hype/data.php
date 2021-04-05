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
$name=$_GET["name"];
$email=$_GET["email"];
$phonenumber=$_GET["phone_number"];

$sql = "INSERT INTO REGISTER (name, email, phone_number)
VALUES ('$name', '$email','$phonenumber')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>