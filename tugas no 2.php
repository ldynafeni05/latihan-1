<?php
 $nasabah = " Kelas 2 ";

 if ($nasabah == "VIP") {
    $layanan = "kartu atm, buku tabungan, M-banking dan menjadi prioritas"; 
 }elseif ($nasabah == "kelas 1"){
    $layanan = "Kartu atm, buku tabungan dan M-banking";
 }elseif ($nasabah == "kelas 2") {
    $layanan = "kartu atm dan buku tabungan";
 }
 else {
    $layanan = "Kartu atm dan buku tabungan";
 }
    echo ("Firman daftar" .$nasabah. "mendapatkan layanan  $layanan");

 
?>
