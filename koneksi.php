<?php
// Konfigurasi database
$server = "localhost";
$username = "root";
$password = "2077"; // Default Laragon tidak menggunakan password
$database = "handsa";

// Membuat koneksi
$koneksi = new mysqli($server, $username, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Set charset untuk mendukung karakter Indonesia
$koneksi->set_charset("utf8");

// Optional: Menampilkan pesan sukses (bisa dihapus di production)
// echo "Koneksi berhasil!";
?>