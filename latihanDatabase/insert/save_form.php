<?php
// disini kita menerima kiriman POST dari
// halaman sebelah (form.html)

$namaKiriman = $_POST['nama'];
$alamatKiriman = $_POST['alamat'];
$telpKiriman = $_POST['telp'];
$kodeKiriman = $_POST['kodepos'];

// penyimpanan ke database ada di file dibawah ini
include 'koneksi.php';

echo "Beberapa variable POST telah berhasil dikirim ke Database!<br/>";
echo "<a href='http://localhost/phpmyadmin'>Check Database</a><br/>";

echo "<a href='../select'>Lihat SELECT statement</a>";	
echo <<<EOL
<br/>
<a href='../..'>Back to Home</a>
<br/>
<a href='../../insert'>Isi Data Lagi</a>
EOL;

?>