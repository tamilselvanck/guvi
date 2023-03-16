<?php

// Replace the database credentials with your own
$host = 'localhost';
$username = 'username';
$password = '';
$database = 'guvi';

// Connect to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$password=$_POST['password'];

// Insert the data into the database
$sql = "INSERT INTO mytable (name,email,password) VALUES ('$name', '$email',$password)";
if (mysqli_query($conn, $sql)) {
  $response = array('status' => 'success', 'message' => 'Data inserted successfully');
} else {
  $response = array('status' => 'error', 'message' => 'Error inserting data: ' . mysqli_error($conn));
}

// Close the database connection
mysqli_close($conn);

echo json_encode($response);

?>
