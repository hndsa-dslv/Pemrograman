<?php
include 'koneksi.php';

// Handle search
$search = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM siswa";
if ($search) {
    $query .= " WHERE nama LIKE '%$search%' OR nisn LIKE '%$search%' OR kelas LIKE '%$search%' OR jurusan LIKE '%$search%' OR alamat LIKE '%$search%' OR jenis_kelamin LIKE '%$search%'";
}
$result = $koneksi->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Halo Selamat Datang</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
.search-container {
    position: relative;
    display: inline-block;
    width: 100%;
    max-width: 400px;
}
.search-container input {
    width: 100%;
    padding: 12px 40px 12px 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}
.search-container .fa-search {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #666;
    cursor: pointer;
}
</style>
</head>
<body style="background-image: url(https://www.icebike.org/wp-content/uploads/2023/05/road-bikes-vs-mountain-bikes.jpg); background-size: cover; ">

<div class="w3-top">
  <div class="w3-bar w3-card w3-left-align w3-large" style="color: white;">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Me</a>
    <a href="data_siswa.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Data Siswa</a>
    <a href="wishlist.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Wishlist</a>
    <a href="/html/tugas.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Tugas HTML</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="about.php" class="w3-bar-item w3-button w3-padding-large">About Me</a>
    <a href="data_siswa.php" class="w3-bar-item w3-button w3-padding-large">Data Siswa</a>
    <a href="wishlist.php" class="w3-bar-item w3-button w3-padding-large">Wishlist</a>
    <a href="/html/tugas.php" class="w3-bar-item w3-button w3-padding-large">Tugas HTML</a>
  </div>
</div>

<div class="w3-container" style="margin-top: 80px;">
    <h2 class="w3-center">Data Siswa</h2>
    
    <!-- Search Bar -->
    <div class="w3-row w3-margin-bottom">
        <div class="w3-col l6 m8 s12">
            <form method="GET" action="" class="search-container">
                <input type="text" name="search" placeholder="Cari data siswa..." value="<?= htmlspecialchars($search); ?>">
                <i class="fa fa-search" onclick="this.parentElement.submit()"></i>
            </form>
        </div>
        <div class="w3-col l6 m4 s12" style="text-align: right;">
            <a href="tambah.php" class="w3-button w3-green">Tambah Data</a>
            <?php if ($search): ?>
                <a href="data_siswa.php" class="w3-button w3-gray">Reset</a>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Display search results info -->
    <?php if ($search): ?>
        <div class="w3-panel w3-pale-blue w3-border w3-margin-bottom">
            <p><strong>Hasil pencarian untuk:</strong> "<?= htmlspecialchars($search); ?>"</p>
        </div>
    <?php endif; ?>
    
    <table class="w3-table-all w3-white">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NISN</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Aksi</th>
      </tr>
      <?php
      $no = 1;
      $query_result = mysqli_query($koneksi, $query);
      if (mysqli_num_rows($query_result) > 0) {
          while ($row = mysqli_fetch_assoc($query_result)) {
      ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= htmlspecialchars($row['nama']); ?></td>
        <td><?= htmlspecialchars($row['nisn']); ?></td>
        <td><?= htmlspecialchars($row['kelas']); ?></td>
        <td><?= htmlspecialchars($row['jurusan']); ?></td>
        <td><?= htmlspecialchars($row['alamat']); ?></td>
        <td><?= htmlspecialchars($row['jenis_kelamin']); ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id']; ?>" class="w3-button w3-blue w3-small" style="margin-right:4px;">Edit</a>
          <a href="delete.php?id=<?= $row['id']; ?>" class="w3-button w3-red w3-small" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
        </td>
      </tr>
      <?php 
          }
      } else {
      ?>
      <tr>
        <td colspan="8" class="w3-center">
            <?php if ($search): ?>
                Tidak ada data yang ditemukan untuk pencarian "<?= htmlspecialchars($search); ?>"
            <?php else: ?>
                Tidak ada data siswa
            <?php endif; ?>
        </td>
      </tr>
      <?php } ?>
    </table>
  </div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <a href="https://www.facebook.com/profile.php?id=100069882103829"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/hnsa_0/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://id.pinterest.com/gfild2007/"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://x.com/UntukCa69198921"><i class="fa fa-twitter w3-hover-opacity"></i></a>
 </div>
 <p>Dibuat Oleh <a href="https://www.instagram.com/hnsa_0/" target="_blank">@hnsa_0</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// Auto submit search when Enter is pressed
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('input[name="search"]');
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                this.form.submit();
            }
        });
    }
});
</script>

</body>
</html>