<?php
include '../koneksi.php';

$mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa");
$matakuliah = mysqli_query($conn, "SELECT * FROM matakuliah");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $npm = $_POST['mahasiswa_npm'];
  $kodemk = $_POST['matakuliah_kodemk'];

  mysqli_query($conn, "INSERT INTO krs (mahasiswa_npm, matakuliah_kodemk) VALUES ('$npm', '$kodemk')");
  header("Location: index.php");
}
?>

<h2>Tambah KRS</h2>
<form method="post">
  Mahasiswa:
  <select name="mahasiswa_npm">
    <?php while ($m = mysqli_fetch_assoc($mahasiswa)) { ?>
      <option value="<?= $m['npm'] ?>"><?= $m['nama'] ?></option>
    <?php } ?>
  </select><br>

  Mata Kuliah:
  <select name="matakuliah_kodemk">
    <?php while ($mk = mysqli_fetch_assoc($matakuliah)) { ?>
      <option value="<?= $mk['kodemk'] ?>"><?= $mk['nama'] ?> (<?= $mk['jumlah_sks'] ?> SKS)</option>
    <?php } ?>
  </select><br>

  <button type="submit">Simpan</button>
</form>
