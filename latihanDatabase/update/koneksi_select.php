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


$perintahSql = "SELECT * FROM $tablename";
$result = $conn->query($perintahSql);
$totalData = 0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["id"] . "'>" . $row["nama"] . "</option>";
		
		$totalData++;
    }
} 


echo "<br/><hr/><br/>";

$conn->close();

?>
<br/>
<a href='../'>Back to Latihan Update</a>
