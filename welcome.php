<?php
session_start();

// Memeriksa jika user belum login
if (!isset($_SESSION['login_user'])) {
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['login_user']); ?>!</h2>
    <a href="logout.php">Logout</a>
</body>
</html>
