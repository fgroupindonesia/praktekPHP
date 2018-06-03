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

// melanjutkan yg sebelum nya diterima (save_form.php),
// yaitu 4 variable $namaKiriman, $alamatKiriman, $telpKiriman, $kodeKiriman;

$perintahSql = "INSERT INTO $tablename VALUES (null, ?, ?, ?, ?)";

$stmt = $conn->prepare($perintahSql);
$stmt->bind_param("ssss", $namaKiriman, $alamatKiriman, $telpKiriman, $kodeKiriman);

$stmt->execute();

$stmt->close();
$conn->close();

?>