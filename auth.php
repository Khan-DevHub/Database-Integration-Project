<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $email;
        $_SESSION['role'] = $row['role']; 
        header("Location: index.php");
    } else {
        echo "Invalid Details!";
    }
} else {
    header("Location: login.php");
}
?>