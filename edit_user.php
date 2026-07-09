<?php
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE Id = $id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
<div class="glass-card" style="width: 400px;">
    <h2>Edit User</h2>
    <form action="process_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
        <input type="text" name="name" value="<?php echo $row['Name']; ?>" required style="width:100%; padding:10px; border-radius:5px; border:none; margin:5px 0;">
        <input type="email" name="email" value="<?php echo $row['Email']; ?>" required style="width:100%; padding:10px; border-radius:5px; border:none; margin:5px 0;">
        <button type="submit" style="width:100%; padding:10px; margin-top:10px; background:#6c5ce7; color:white; border:none; border-radius:5px; cursor:pointer;">Update User</button>
    </form>
</div>
</body>
</html>