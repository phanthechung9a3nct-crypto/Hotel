<?php
// admin/dashboard.php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head><meta charset="utf-8"><title>Admin Dashboard</title></head>
<body>
  <h1>Xin chào, <?= htmlentities($_SESSION['admin_username']) ?></h1>
  <p>Đây là trang quản trị.</p>
  <a href="logout.php">Đăng xuất</a>
</body>
</html>
