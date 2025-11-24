<?php
// admin/login_process.php
session_start();

if (!isset($_POST['dangnhap'])) {
    header("Location: login.php");
    exit;
}

$user = trim($_POST['username'] ?? '');
$pass = trim($_POST['password'] ?? '');

// Tài khoản demo (chỉ dùng test)
$ADMIN_USER = 'admin';
$ADMIN_PASS = 'admin123';

if ($user === $ADMIN_USER && $pass === $ADMIN_PASS) {
    // bảo mật session
    session_regenerate_id(true);
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_username'] = $user;
    header("Location: index.php");
    exit;
} else {
    $_SESSION['login_error'] = "Sai tài khoản hoặc mật khẩu";
    header("Location: login.php");
    exit;
}
