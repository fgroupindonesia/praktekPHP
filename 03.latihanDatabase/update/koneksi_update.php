<?php
// disini kita menerima kiriman POST dari
// halaman sebelah (form.html)
$idKiriman = $_POST['id'];
$namaKiriman = $_POST['nama'];
$alamatKiriman = $_POST['alamat'];
$telpKiriman = $_POST['telp'];
$kodeKiriman = $_POST['kodepos'];

// penyimpanan ke database ada di file dibawah ini

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$tablename = "praktekPHP";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi MySQL gagal! " . $conn->connect_error);
} 

// melanjutkan yg sebelum nya diterima (save_form.php),
// yaitu 4 variable $namaKiriman, $alamatKiriman, $telpKiriman, $kodeKiriman;

$perintahSql = "UPDATE $tablename SET nama=?, alamat=?, telp=?, kodepos=? WHERE id=?";

$stmt = $conn->prepare($perintahSql);
$stmt->bind_param("ssssi", $namaKiriman, $alamatKiriman, $telpKiriman, $kodeKiriman, $idKiriman);

$stmt->execute();

$stmt->close();
$conn->close();

echo "Beberapa variable POST telah berhasil diupdate ke Database!<br/>";
echo "<a href='http://localhost/phpmyadmin'>Check Database</a><br/>";
echo "<a href='../select'>Lihat SELECT statement</a>";	
echo <<<EOL
<br/>
<a href='../..'>Back to Home</a>
<br/>
<a href='../../insert'>Isi Data Lagi</a>
EOL;

?>