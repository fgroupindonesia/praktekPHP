<?php

// penghubung antara php dengan database harus ada koneksi.php
// isinya berupa login mysql dsb...

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$tablename = "praktekPHP";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi MySQL gagal! " . $conn->connect_error);
} 

// kali ini kita akan menarik data yg ada dari table database
// agar ditampilkan di html 

echo "<hr/><h3>Data</h3>";

$perintahSql = "SELECT * FROM $tablename";
$result = $conn->query($perintahSql);
$totalData = 0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"];
		echo ", Nama: " . $row["nama"];
		echo ", Alamat: " . $row["alamat"];
		echo ", Telp: " . $row["telp"];
		echo ", Kode Pos: " . $row["kodepos"];
		echo "<br/>";
		
		$totalData++;
    }
} 

echo "totalnya ada " . $totalData . " data";

echo "<br/><hr/><br/>";

$conn->close();

?>