<?php
$host = "localhost"; // atau 127.0.0.1
$user = "root";      // ganti dengan user MySQL Anda
$pass = "";          // ganti dengan password MySQL Anda
$db   = "radar";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}else{
    echo "Database Terkoneksi";
}
?>