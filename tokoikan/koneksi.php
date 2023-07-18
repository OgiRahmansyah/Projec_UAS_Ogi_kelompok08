<?php
// Create connection
$con = mysqli_connect("http://127.0.0.1/", "root", "", "toko_ikan");

// Check connection
if (mysqli_connect_errno()) {
  echo "Koneksi Gagal: " . mysqli_connect_error();
  exit();
}
?>