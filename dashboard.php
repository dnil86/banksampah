<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
</head>
<body>
  <h1>Selamat datang, <?= htmlspecialchars($_SESSION['user']) ?>!</h1>
  <p>Ini adalah halaman dashboard setelah login.</p>
  <a href="logout.php">Logout</a>
</body>
</html>
