<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $npm     = $_POST['npm'];
  $nama    = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $alamat  = $_POST['alamat'];

  $query = "INSERT INTO mahasiswa (npm, nama, jurusan, alamat)
            VALUES ('$npm', '$nama', '$jurusan', '$alamat')";

  mysqli_query($conn, $query);
  header("Location: index.php");
}
?>

<h2>Tambah Mahasiswa</h2>
<form method="post">
  NPM: <input type="text" name="npm" required><br>
  Nama: <input type="text" name="nama" required><br>
  Jurusan:
  <select name="jurusan">
    <option value="Teknik Informatika">Teknik Informatika</option>
    <option value="Sistem Operasi">Sistem Operasi</option>
  </select><br>
  Alamat: <textarea name="alamat"></textarea><br>
  <button type="submit">Simpan</button>
</form>
