<?php
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM krs WHERE id=$id"));

$mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa");
$matakuliah = mysqli_query($conn, "SELECT * FROM matakuliah");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $npm = $_POST['mahasiswa_npm'];
  $kodemk = $_POST['matakuliah_kodemk'];

  mysqli_query($conn, "UPDATE krs SET mahasiswa_npm='$npm', matakuliah_kodemk='$kodemk' WHERE id=$id");
  header("Location: index.php");
}
?>

<h2>Edit KRS</h2>
<form method="post">
  Mahasiswa:
  <select name="mahasiswa_npm">
    <?php while ($m = mysqli_fetch_assoc($mahasiswa)) { ?>
      <option value="<?= $m['npm'] ?>" <?= $m['npm'] == $data['mahasiswa_npm'] ? 'selected' : '' ?>><?= $m['nama'] ?></option>
    <?php } ?>
  </select><br>

  Mata Kuliah:
  <select name="matakuliah_kodemk">
    <?php while ($mk = mysqli_fetch_assoc($matakuliah)) { ?>
      <option value="<?= $mk['kodemk'] ?>" <?= $mk['kodemk'] == $data['matakuliah_kodemk'] ? 'selected' : '' ?>><?= $mk['nama'] ?></option>
    <?php } ?>
  </select><br>

  <button type="submit">Update</button>
</form>
