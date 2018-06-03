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

// melanjutkan yg sebelum nya diterima (delete.php),
// yaitu 1 variable $idKiriman

$perintahSql = "DELETE FROM $tablename WHERE id=?";

$stmt = $conn->prepare($perintahSql);
$stmt->bind_param("i", $idKiriman);

$stmt->execute();

$stmt->close();
$conn->close();

?>