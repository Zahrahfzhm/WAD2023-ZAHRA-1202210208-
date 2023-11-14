<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "127.0.0.1:3308";
$user = "root";
$pw = "";
$db = "db_wad_modul3";
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
$koneksi = mysqli_connect($host, $user, $pw, $db);

if (!$koneksi) {
    echo "Koneksi Gagal: ".mysqli_error();
}
// 
?>