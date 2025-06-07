<?php
$koneksi = new mysqli("localhost", "root", "", "bank_sampah");

$nama   = $_POST['nama'];
$no_hp  = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$pin    = $_POST['pin'];

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Cek jika nomor HP sudah terdaftar
$cek = $koneksi->query("SELECT * FROM nasabah WHERE no_hp = '$no_hp'");
if ($cek->num_rows > 0) {
  echo "<script>alert('Nomor HP sudah terdaftar!'); window.history.back();</script>";
  exit();
}

$simpan = $koneksi->query("INSERT INTO nasabah (nama, no_hp, alamat, pin) VALUES ('$nama', '$no_hp', '$alamat', '$pin')");

if ($simpan) {
  echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location='login.html';</script>";
} else {
  echo "<script>alert('Pendaftaran gagal!'); window.history.back();</script>";
}
?>
