<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid access");
}
include "db.php";
$email    = trim($_POST['email']);
$password = trim($_POST['password']);
$email = strtolower($email);
$sql = "SELECT * FROM Details WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Database query failed");
}
if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {

        echo "Login successful <br>";
        print "Redirecting to dashboard...";
        header("Location: index.html");
        exit();

    } else {
        die("Invalid password");
    }

} else {
    die("User not found");
}
?>
