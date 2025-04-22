<?php
include '../koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $kodemk = $_POST['kodemk'];
  $nama = $_POST['nama'];
  $sks = $_POST['jumlah_sks'];

  mysqli_query($conn, "INSERT INTO matakuliah VALUES ('$kodemk', '$nama', $sks)");
  header("Location: index.php");
}
?>

<h2>Tambah Mata Kuliah</h2>
<form method="post">
  Kode MK: <input type="text" name="kodemk"><br>
  Nama: <input type="text" name="nama"><br>
  Jumlah SKS: <input type="number" name="jumlah_sks"><br>
  <button type="submit">Simpan</button>
</form>
