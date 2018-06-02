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

// melanjutkan yg sebelum nya diterima (delete_form.php),
// yaitu 1 variable $namaKiriman

$perintahSql = "DELETE FROM $tablename WHERE nama LIKE ?";

$semuaNama = "%".$namaKiriman."%";

$stmt = $conn->prepare($perintahSql);
$stmt->bind_param("s", $semuaNama);

$stmt->execute();

$stmt->close();
$conn->close();

?>