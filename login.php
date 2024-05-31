<?php
session_start();

// Data pengguna
$users = [
    'user1' => 'password1',
    'user2' => 'password2'
];

// Memeriksa jika form login disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi username dan password
    if (isset($users[$username]) && $users[$username] === $password) {
        // Set session
        $_SESSION['login_user'] = $username;
        header("location: welcome.php");
    } else {
        // Jika gagal login
        $error = "Username atau Password salah";
        header("location: index.php?error=" . urlencode($error));
    }
}
?>
