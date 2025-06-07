<?php
session_start();

// Contoh login dummy (seharusnya Anda ambil dari database)
$akun_terdaftar = [
  'no_hp' => '081234567890',
  'pin' => '1234'
];

$no_hp = $_POST['no_hp'];
$pin = $_POST['pin'];

if ($no_hp === $akun_terdaftar['no_hp'] && $pin === $akun_terdaftar['pin']) {
  $_SESSION['user'] = $no_hp;
  header("Location: dashboard.php");
  exit();
} else {
  echo "<script>alert('Login gagal! Nomor HP atau PIN salah.'); window.history.back();</script>";
}
?>
