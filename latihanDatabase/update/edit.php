<h1>Praktek UPDATE Statement</h1>

<p>Lakukan update data dibawah lalu tekan tombol Update segera</p>

<?php
 // disini kita akan melakukan 
 // penarikan data berdasarkan id/nama yg disubmit oleh frame sebelumnya
 // yaitu (index.php) pada Latihan Update Statement.
 
$idKiriman = $_GET['id'];
 
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


$perintahSql = "SELECT * FROM $tablename WHERE id=$idKiriman";
$result = $conn->query($perintahSql);
$totalData = 0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<form method='POST' action='koneksi_update.php' >";
		echo "<input name='id' value='". $row['id'] . "' type='hidden' />";
		echo "Nama : <input name='nama' type='text' value='". $row["nama"] ."'/><br/>";
		echo "Alamat : <input name='alamat' type='text' value='". $row["alamat"] ."'/><br/>";
		echo "Telp : <input name='telp' type='text' value='". $row["telp"] ."'/><br/>";
		echo "Kodepos : <input name='kodepos' type='text' value='". $row["kodepos"] ."'/><br/>";
		echo "<input type='submit' value='Update'/>";
		echo "</form>";
		$totalData++;
    }
} 


echo "<br/><hr/><br/>";

$conn->close();
?>
<br/>
<a href='../update/'>Back to Latihan Update</a>
