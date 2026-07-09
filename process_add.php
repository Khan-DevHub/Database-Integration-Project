<?php
include 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password']; // Yahan future mein password_hash() use karein

$sql = "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$password')";
if(mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>