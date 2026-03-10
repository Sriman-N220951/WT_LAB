<?php

$conn = mysqli_connect("localhost", "root", "", "user_system");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Receive form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Encrypt password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into database
$sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$hashed_password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>