<?php
include '../koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
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

  <h2>📘 Data Mahasiswa</h2>
  <a href="create.php">+ Tambah Mahasiswa</a>

  <table>
    <thead>
      <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?= $row['npm'] ?></td>
          <td><?= $row['nama'] ?></td>
          <td><?= $row['jurusan'] ?></td>
          <td><?= $row['alamat'] ?></td>
          <td>
            <a href="edit.php?npm=<?= $row['npm'] ?>">Edit</a> |
            <a href="delete.php?npm=<?= $row['npm'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

</body>
</html>
