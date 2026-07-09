<?php
include 'db.php';
session_start();
if ($_SESSION['role'] !== 'admin') die("Access Denied");
$id = intval($_GET['id']);
mysqli_query($conn, "DELETE FROM users WHERE Id = $id");
header("Location: index.php");
?>