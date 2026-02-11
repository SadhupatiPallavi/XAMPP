<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid access");
}
include "db.php";
$username = trim($_POST['username']);
$email    = trim($_POST['email']);
$password = trim($_POST['password']);
$username = ucwords(strtolower($username));
$email = strtolower($email);
if (strlen($username) < 3) {
    die("Username must be at least 3 characters long");
}
if (strlen($password) < 6) {
    die("Password must be at least 6 characters long");
}
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO Details (username, email, password)
        VALUES ('$username', '$email', '$hashed_password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful <br>";
    print "Redirecting to login page...";
    header("Location: login.html");
    exit();
} else {
    die("Database error: " . mysqli_error($conn));
}
?>
