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
<body style="background-image: url(https://wallpapersok.com/images/hd/black-and-white-aesthetic-winding-road-9642s5hv2j4hdl4m.jpg);">

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

<!-- Header -->
<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('background.jpg'); /* Background jalan hitam putih */
            background-size: cover;
            background-position: center;
            color: white;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 50px;
            background-color: rgba(0, 0, 0, 0.5); /* transparansi agar teks mudah dibaca */
        }

        .container img {
            width: 300px;
            height: auto;
            margin-right: 30px;
            border-radius: 10px;
        }

        .text-content {
            max-width: 600px;
        }

        .text-content h1 {
            color: white;
        }

        .text-content p {
            color: white;
            line-height: 1.6;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="https://granfondo-cycling.com/wp-content/uploads/sites/3/2017/06/Specialized-S-works-tarmac-2018-review-granfondo-cycling-22-von-41-1140x760.jpg" alt="Gambar Sepeda">
    
    <div class="text-content">
        <h1>Specialized Tarmac S-Works</h1>
        <p>Specialized Tarmac 2018 yang baru lebih dari sekadar sepeda jalan raya yang didesain ulang. Kami menguji sepeda ini di Amerika Serikat dan inilah kesan pertama kami. Tidak puas hanya dengan mengetahui tentang model 2018, kami juga bertanya-tanya apa yang bisa diharapkan dari Tarmac 2020. Mark Cote, CMO Specialized, memberikan pandangan sekilas tentang masa depan pengembangan sepeda jalan raya.</p>
        <p>Drivetrain Shimano Dura-Ace Di2 9150 11-speed
Wheels Roval CLX 32
Brakes eecycleworks eebrake
Tires Turbo Cotton 700×26 mm
Cranks S-Works carbon fiber
Price 9999 €</p>
    </div>
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
</script>

</body>
</html>
