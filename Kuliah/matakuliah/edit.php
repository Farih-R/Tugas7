<?php
include '../koneksi.php';
$kodemk = $_GET['kodemk'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM matakuliah WHERE kodemk='$kodemk'"));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = $_POST['nama'];
  $sks = $_POST['jumlah_sks'];

  mysqli_query($conn, "UPDATE matakuliah SET nama='$nama', jumlah_sks=$sks WHERE kodemk='$kodemk'");
  header("Location: index.php");
}
?>

<h2>Edit Mata Kuliah</h2>
<form method="post">
  Kode MK: <b><?= $data['kodemk'] ?></b><br>
  Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
  Jumlah SKS: <input type="number" name="jumlah_sks" value="<?= $data['jumlah_sks'] ?>"><br>
  <button type="submit">Update</button>
</form>
