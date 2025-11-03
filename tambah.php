<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $angkatan = $_POST['angkatan'];

  $sql = "INSERT INTO mahasiswa (nim, nama, jurusan, angkatan)
          VALUES ('$nim', '$nama', '$jurusan', '$angkatan')";

  if ($koneksi->query($sql) === TRUE) {
    header("Location: index.php?status=sukses");
    exit;
  } else {
    echo "Error: " . $koneksi->error;
  }
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8fafc;
      font-family: 'Inter', sans-serif;
    }
    .navbar {
      background-color: #0f172a;
    }
    .navbar-brand {
      color: #fff;
      font-weight: 700;
      letter-spacing: 0.5px;
    }
    .card {
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .btn-primary {
      background: linear-gradient(90deg,#7c3aed,#06b6d4);
      border: none;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="index.php">📘 Data Mahasiswa</a>
  </div>
</nav>

<!-- Form Tambah Data -->
<div class="container my-5">
  <div class="card p-4 mx-auto" style="max-width:600px;">
    <h3 class="fw-bold mb-4 text-dark text-center">Tambah Data Mahasiswa</h3>
    <form method="POST">
      <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Jurusan</label>
        <input type="text" name="jurusan" class="form-control" placeholder="Masukkan Jurusan" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Angkatan</label>
        <input type="number" name="angkatan" class="form-control" placeholder="Masukkan Tahun Angkatan" required>
      </div>
      <div class="d-flex justify-content-between align-items-center">
        <a href="index.php" class="btn btn-secondary">← Kembali</a>
        <button type="submit" class="btn btn-primary px-4">Simpan</button>
      </div>
    </form>
  </div>
</div>

<footer class="text-center py-3 text-muted">
  <small>© <?= date('Y'); ?> Sistem Data Mahasiswa — Dibuat dengan ❤️ PHP Native + Bootstrap 5</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
