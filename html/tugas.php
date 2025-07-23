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
</style>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        ul {
            list-style-type: none;
        }
        li {
            margin: 5px 0;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-card w3-left-align w3-large w3-red" style="color: white;">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="/index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="/about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Me</a>
    <a href="/data_siswa.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Data Siswa</a>
    <a href="/wishlist.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Wishlist</a>
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

<!-- Header -->
<header class="w3-container" style="padding:128px 16px">
<h1>Daftar File Tugas HTML</h1>
    <ul>
        <?php
        // Baca isi folder saat ini
        $files = scandir(__DIR__);
        $tugasFiles = [];
        
        // Debug: tampilkan semua file yang ditemukan
        echo "<!-- Debug: Files found in directory: ";
        foreach ($files as $file) {
            echo $file . ", ";
        }
        echo " -->\n";
        
        // Filter file yang sesuai pattern dengan lebih fleksibel
        foreach ($files as $file) {
            // Pastikan ini adalah file (bukan folder) dan berekstensi .html
            if (is_file(__DIR__ . '/' . $file) && pathinfo($file, PATHINFO_EXTENSION) === 'html') {
                // Pattern yang lebih fleksibel untuk menangkap berbagai format nama file
                if (preg_match('/^Pertemuan[_\-\s]*(\d+)\.html$/i', $file, $matches)) {
                    $tugasFiles[] = [
                        'filename' => $file,
                        'number' => (int)$matches[1]
                    ];
                }
            }
        }
        
        // Debug: tampilkan file yang cocok dengan pattern
        echo "<!-- Debug: Matching files found: " . count($tugasFiles) . " -->\n";
        
        // Urutkan berdasarkan nomor pertemuan
        usort($tugasFiles, function($a, $b) {
            return $a['number'] - $b['number'];
        });
        
        // Tampilkan file yang sudah diurutkan
        if (count($tugasFiles) > 0) {
            foreach ($tugasFiles as $fileData) {
                $file = $fileData['filename'];
                $number = $fileData['number'];
                echo "<li><a href='$file'>$file</a> (Pertemuan ke-$number)</li>\n";
            }
        } else {
            echo "<li>Tidak ada file tugas HTML yang ditemukan</li>\n";
            
            // Tampilkan semua file HTML yang ada untuk debugging
            echo "<li><strong>File HTML yang ditemukan:</strong></li>\n";
            foreach ($files as $file) {
                if (is_file(__DIR__ . '/' . $file) && pathinfo($file, PATHINFO_EXTENSION) === 'html') {
                    echo "<li style='margin-left: 20px;'>• <a href='$file'>$file</a></li>\n";
                }
            }
        }
        ?>
    </ul>
    
    <div style="margin-top: 30px; padding: 15px; background-color: #f8f9fa; border-radius: 5px;">
        <h3>Informasi Folder</h3>
        <p><strong>Direktori saat ini:</strong> <?php echo __DIR__; ?></p>
        <p><strong>Total file di folder:</strong> <?php echo count($files); ?></p>
        <p><strong>File HTML yang cocok pattern:</strong> <?php echo count($tugasFiles); ?></p>
    </div>
</header>

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
</script>

</body>
</html>