<!-- file ini digunakan untuk latihan peserta kelas praktekPHP -->

<html>
<head>
<title>Praktek UPDATE Statement</title>
</head>
<body>

<h1>Praktek UPDATE Statement</h1>
<hr/>
<p>Pilih data mana yang mau diupdate</p>
<form method="GET" action="edit.php">
<span>Nama :</span> 
<select name='id'>
	<?php include 'koneksi_select.php'; ?>
</select>
 <br/>
<input type="submit" value="Edit"/>
</form>
<hr/>

<p>Jika data diatas tidak muncul, maka anda harus mengisi dulu
data yg ada dari Latihan <b>INSERT Statement.</b></p>

<hr/>
<br/>
<a href='..'>Back to Home</a><br/>
<a href='../insert/'>Coba Isi Data</a>


</body>
</html> 