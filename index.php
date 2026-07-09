<?php
session_start();
include 'db.php';
if (!isset($_SESSION['user'])) { header("Location: login.php"); exit(); }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="glass-card">
    <nav class="flex-nav">
        <h3>Admin Dashboard</h3>
        <div>
            <a href="add_user.php" style="color: white; margin-right: 15px;">+ Add User</a>
            <a href="logout.php" style="color: white;">Logout</a>
        </div>
    </nav>
    <table class="modern-table">
        <thead>
            <tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Actions</th></tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['Id']}</td>
                        <td>{$row['Name']}</td>
                        <td>{$row['Email']}</td>
                        <td><span class='badge'>{$row['role']}</span></td>
                        <td>
                            <a href='edit_user.php?id={$row['Id']}' class='action-btn edit-btn'>Edit</a>
                            <a href='delete_user.php?id={$row['Id']}' class='action-btn delete-btn' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>