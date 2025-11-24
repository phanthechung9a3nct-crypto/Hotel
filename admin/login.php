<?php
// admin/login.php
session_start();

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Đăng nhập Admin</title>
  <style>
    body{font-family:Arial;background:#f4f6f8;display:flex;align-items:center;justify-content:center;height:100vh;margin:0;}
    .card{background:#fff;padding:26px;border-radius:10px;box-shadow:0 8px 24px rgba(0,0,0,0.08);width:360px}
    input{width:100%;padding:10px;margin-top:8px;border-radius:6px;border:1px solid #ccc}
    button{width:100%;padding:10px;margin-top:12px;border:none;border-radius:6px;background:#2d89ef;color:#fff;cursor:pointer}
    .error{color:#b00020;margin-top:10px}
  </style>
</head>
<body>
  <div class="card">
    <h2>Đăng nhập Admin</h2>
    <?php if (!empty($_SESSION['login_error'])): ?>
      <div class="error"><?= htmlentities($_SESSION['login_error']); unset($_SESSION['login_error']); ?></div>
    <?php endif; ?>

    <form method="post" action="login_process.php">
      <label>Tài khoản</label>
      <input type="text" name="username" required autofocus>

      <label>Mật khẩu</label>
      <input type="password" name="password" required>

      <button type="submit" name="dangnhap">Đăng nhập</button>
    </form>
  </div>
</body>
</html>
