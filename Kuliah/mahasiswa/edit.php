<?php
include '../koneksi.php';
$npm = $_GET['npm'];
$data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE npm='$npm'");
$row = mysqli_fetch_assoc($data);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama    = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $alamat  = $_POST['alamat'];

  $query = "UPDATE mahasiswa SET
              nama='$nama',
              jurusan='$jurusan',
              alamat='$alamat'
            WHERE npm='$npm'";

  mysqli_query($conn, $query);
  header("Location: index.php");
}
?>

<h2>Edit Mahasiswa</h2>
<form method="post">
  NPM: <b><?= $row['npm'] ?></b><br>
  Nama: <input type="text" name="nama" value="<?= $row['nama'] ?>"><br>
  Jurusan:
  <select name="jurusan">
    <option <?= $row['jurusan'] == "Teknik Informatika" ? "selected" : "" ?>>Teknik Informatika</option>
    <option <?= $row['jurusan'] == "Sistem Operasi" ? "selected" : "" ?>>Sistem Operasi</option>
  </select><br>
  Alamat: <textarea name="alamat"><?= $row['alamat'] ?></textarea><br>
  <button type="submit">Update</button>
</form>
