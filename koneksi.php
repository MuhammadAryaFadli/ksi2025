<?php
$host = "localhost";
$user = "root";      // sesuaikan
$pass = "";          // sesuaikan
$db   = "ksi2025"; // sesuaikan dengan database kamu

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
