<?php

$conn = mysqli_connect("localhost", "root", "", "user_system");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* ✅ Allow access only via POST */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Access denied.");
}

$email = trim($_POST['email']);
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
        echo "Login successful! Welcome " . $row['username'];
    } else {
        echo "Invalid password!";
    }
} else {
    echo "User not found!";
}

mysqli_close($conn);
?>
