<?php
// disini kita menerima kiriman POST dari
// halaman sebelah (index.html)

$namaKiriman = $_POST['nama'];

// penghapusan dari database ada di file dibawah ini
include 'koneksi.php';

echo "data $namaKiriman telah dihapus dari Database!<br/>";
echo "<a href='http://localhost/phpmyadmin'>Check Database</a><br/>";
echo "<a href='../../select'>Lihat Data apasaja tersisa (SELECT statement)</a>";	

?>