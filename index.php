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

<!-- Navbar -->
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
<header class="w3-container w3-red w3-center" style="background-image: url(https://64.media.tumblr.com/fce51096c29884a27fe3a49064cad9c2/tumblr_owuzz0LB1r1wcztofo1_500.gif); background-repeat: no-repeat; background-size:cover; opacity: 0.8; padding:128px 16px">
  <img src="" alt="">
  <h1 class="w3-margin w3-jumbo" style="color: rgb(0, 0, 0);">Selamat Datang</h1>
  <p class="w3-xlarge" style="color: rgb(0, 0, 0);">Jalan Boleh Masing-Masing Tapi Jangan Sampai Asing</p>
  <a href=https://www.tokopedia.com/sumbermajubike/pinarello-dogma-f12-vulcan-red-size-44-155-165cm-ori-168juta?extParam=ivf%3Dfalse%26keyword%3Dpinarello+dogma+f12%26search_id%3D20250522072509B7DA7D0351CD30135RJQ%26src%3Dsearch><button type="button" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button></a>
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
