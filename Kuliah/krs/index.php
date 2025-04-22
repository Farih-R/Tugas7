<?php
include '../koneksi.php';

$query = "SELECT krs.*, 
                 mahasiswa.nama AS nama_mhs, 
                 matakuliah.nama AS nama_mk, 
                 matakuliah.jumlah_sks 
          FROM krs 
          JOIN mahasiswa ON krs.mahasiswa_npm = mahasiswa.npm 
          JOIN matakuliah ON krs.matakuliah_kodemk = matakuliah.kodemk";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      padding: 20px;
    }
    h2 {
      color: #2c3e50;
    }
    a {
      text-decoration: none;
      color: #fff;
      background-color: #3498db;
      padding: 8px 12px;
      border-radius: 5px;
      margin-bottom: 15px;
      display: inline-block;
    }
    a:hover {
      background-color: #2980b9;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      margin-top: 15px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #2c3e50;
      color: #fff;
    }
    td a {
      color: #2980b9;
      background: none;
      padding: 0;
      margin: 0;
    }
    td a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
    
<h2>Data KRS</h2>
<a href="create.php">+ Tambah KRS</a>
<table border="1" cellpadding="8">
  <tr>
    <th>No</th>
    <th>Nama Lengkap</th>
    <th>Mata Kuliah</th>
    <th>Keterangan</th>
    <th>Aksi</th>
  </tr>
  <?php $no = 1; while($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td><?= $no++ ?></td>
    <td><?= $row['nama_mhs'] ?></td>
    <td><?= $row['nama_mk'] ?></td>
    <td><?= $row['nama_mhs'] ?> Mengambil Mata Kuliah <?= $row['nama_mk'] ?> (<?= $row['jumlah_sks'] ?> SKS)</td>
    <td>
      <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
      <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
    </td>
  </tr>
  <?php } ?>
</table>
