<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="glass-card" style="width: 350px;">
    <h2>Login</h2>
    <form action="auth.php" method="POST">
        <input type="email" name="email" placeholder="Email" required style="width:100%; padding:10px; margin:10px 0; border-radius:5px; border:none;">
        <input type="password" name="password" placeholder="Password" required style="width:100%; padding:10px; margin:10px 0; border-radius:5px; border:none;">
        <button type="submit" style="width:100%; padding:10px; background:#6c5ce7; color:white; border:none; border-radius:5px; cursor:pointer;">Sign In</button>
    </form>
</div>
</body>
</html>