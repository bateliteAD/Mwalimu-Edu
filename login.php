<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the login credentials
$user = $_POST['username'];
$pass = $_POST['password'];

// Check if user exists
$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Successful login, redirect to another website
    header("Location: C:\Users\Administrator\Downloads\Website\Questionpapers.html");  // Change to your desired website
} else {
    echo "Invalid credentials!";
}

$conn->close();
?>
