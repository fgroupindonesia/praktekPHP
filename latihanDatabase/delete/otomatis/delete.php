<?php
// disini kita menerima kiriman GET dari
// halaman sebelah (index.html)

$idKiriman = $_GET['id'];

// manipulasi ke database ada di file dibawah ini
include 'koneksi_delete.php';

echo "Data telah berhasil dihapus dari Database!<br/>";
echo "<a href='http://localhost/phpmyadmin'>Check Database</a><br/>";

echo "<a href='../select'>Lihat SELECT statement</a>";	
echo <<<EOL
<br/>
<a href='../..'>Back to Home</a>
<br/>
<a href='../../insert'>Isi Data Lagi</a>
<br/>
<a href='index.php'>Delete Data Lagi</a>
EOL;

?>