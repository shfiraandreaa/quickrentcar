<?php
	include ('controller/database.php');
	include ('controller/viewAllPeminjam.php');
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="tema/management.css">
</head>
<body>
	<h2>Berikut Ini Daftar Peminjam</h2>
	<table>
			<tr>
				<td>#</td>
				<td>Nama Peminjam</td>
				<td>Alamat</td>
				<td>No.Tlp</td>
				<td>Mobil Dipesan</td>
				<td>Tanggal Pemesanan</td>
				<td>Tanggal Pengembalian</td>
				<td>Paket yang Dipilih</td>
				<td>Status</td>
				<td>Delete</td>
			</tr>
		 <?= $kontenTable ?>
	</table>
	<div class="btn-pinjam">
		<button id="ubahMenggunakan" name="buttonSedangMenggunakan">Sedang Menggunakan</button> 
		<button id="ubahKembali" name="buttonMobilKembali">Mobil Sudah Dikembalikan</button> 
	</div>
</body>
</html>