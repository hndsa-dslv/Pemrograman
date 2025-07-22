<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = trim($_POST['nama']);
    $nisn = trim($_POST['nisn']);
    $kelas = trim($_POST['kelas']);
    $jurusan = trim($_POST['jurusan']);
    $alamat = trim($_POST['alamat']);
    $jenis_kelamin = $_POST['jenis_kelamin'];

    if (!empty($nama) && !empty($nisn) && !empty($kelas) && !empty($jurusan) && !empty($alamat) && !empty($jenis_kelamin)) {
        $stmt = $koneksi->prepare("INSERT INTO siswa (nama, nisn, kelas, jurusan, alamat, jenis_kelamin) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $nama, $nisn, $kelas, $jurusan, $alamat, $jenis_kelamin);
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
  <title>Tambah Siswa</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container w3-margin-top">
    <h2>Tambah Data Siswa</h2>
    <form method="POST">
      <p><label>Nama</label><input class="w3-input w3-border" type="text" name="nama" required></p>
      <p><label>NISN</label><input class="w3-input w3-border" type="text" name="nisn" required></p>
      <p><label>Kelas</label><input class="w3-input w3-border" type="text" name="kelas" required></p>
      <p><label>Jurusan</label><input class="w3-input w3-border" type="text" name="jurusan" required></p>
      <p><label>Alamat</label><textarea class="w3-input w3-border" name="alamat" maxlength="255" required></textarea></p>
      <p>
        <label>Jenis Kelamin</label>
        <select class="w3-select w3-border" name="jenis_kelamin" required>
          <option value="" disabled selected>Pilih jenis kelamin</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </p>
      <p>
        <button class="w3-button w3-green" type="submit">Simpan</button>
        <a class="w3-button w3-grey" href="data_siswa.php">Batal</a>
      </p>
    </form>
</div>
</body>
</html>