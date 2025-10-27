<?php
include "koneksi.php";
$result = $koneksi->query("SELECT * FROM mahasiswa ORDER BY angkatan DESC");
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Mahasiswa</title>
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
    .table thead {
      background: linear-gradient(90deg,#7c3aed,#06b6d4);
      color: #fff;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">📘 Data Mahasiswa</a>
  </div>
</nav>

<!-- Main Content -->
<div class="container my-5">
  <div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h3 class="fw-bold text-dark mb-0">Daftar Mahasiswa</h3>
      <a href="#" class="btn btn-primary">+ Tambah Data</a>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered align-middle">
        <thead>
          <tr class="text-center">
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Angkatan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($result->num_rows > 0):
            $no = 1;
            while($row = $result->fetch_assoc()):
          ?>
          <tr>
            <td class="text-center"><?= $no++; ?></td>
            <td><?= htmlspecialchars($row['nim']); ?></td>
            <td><?= htmlspecialchars($row['nama']); ?></td>
            <td><?= htmlspecialchars($row['jurusan']); ?></td>
            <td class="text-center"><?= htmlspecialchars($row['angkatan']); ?></td>
          </tr>
          <?php endwhile; else: ?>
          <tr>
            <td colspan="5" class="text-center text-muted">Belum ada data mahasiswa.</td>
          </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<footer class="text-center py-3 text-muted">
  <small>© <?= date('Y'); ?> Sistem Data Mahasiswa — Dibuat dengan ❤️ PHP Native + Bootstrap 5</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
