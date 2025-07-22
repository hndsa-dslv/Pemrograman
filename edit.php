<?php
include 'koneksi.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: data_siswa.php");
    exit();
}

$id = (int)$_GET['id'];
$stmt = $koneksi->prepare("SELECT * FROM siswa WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    header("Location: data_siswa.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = trim($_POST['nama']);
    $kelas = trim($_POST['kelas']);
    $jurusan = trim($_POST['jurusan']);
    $alamat = trim($_POST['alamat']);
    $jenis_kelamin = $_POST['jenis_kelamin'];

    if (!empty($nama) && !empty($kelas) && !empty($jurusan) && !empty($alamat) && !empty($jenis_kelamin)) {
        // Update tanpa mengubah NISN
        $stmt = $koneksi->prepare("UPDATE siswa SET nama = ?, kelas = ?, jurusan = ?, alamat = ?, jenis_kelamin = ? WHERE id = ?");
        $stmt->bind_param("sssssi", $nama, $kelas, $jurusan, $alamat, $jenis_kelamin, $id);
        $stmt->execute();
        $stmt->close();
        header("Location: data_siswa.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Siswa</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container w3-margin-top">
    <h2>Edit Data Siswa</h2>
    <form method="POST">
      <p><label>Nama</label><input class="w3-input w3-border" type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required></p>
      <p>
        <label>NISN</label>
        <input class="w3-input w3-border w3-light-grey" type="text" value="<?= htmlspecialchars($data['nisn']) ?>" readonly>
        <small class="w3-text-grey">NISN tidak dapat diubah</small>
      </p>
      <p><label>Kelas</label><input class="w3-input w3-border" type="text" name="kelas" value="<?= htmlspecialchars($data['kelas']) ?>" required></p>
      <p><label>Jurusan</label><input class="w3-input w3-border" type="text" name="jurusan" value="<?= htmlspecialchars($data['jurusan']) ?>" required></p>
      <p><label>Alamat</label><textarea class="w3-input w3-border" name="alamat" maxlength="255" required><?= htmlspecialchars($data['alamat']) ?></textarea></p>
      <p>
        <label>Jenis Kelamin</label>
        <select class="w3-select w3-border" name="jenis_kelamin" required>
          <option value="">Pilih jenis kelamin</option>
          <option value="Laki-laki" <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
          <option value="Perempuan" <?= $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select>
      </p>
      <p>
        <button class="w3-button w3-blue" type="submit">Update</button>
        <a class="w3-button w3-grey" href="data_siswa.php">Batal</a>
      </p>
    </form>
  </div>
</body>
</html>