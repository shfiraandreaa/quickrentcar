<?php
	include ('controller/database.php');
	include ('controller/viewAllMobil.php');
?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="tema/management.css">
</head>
<body>
	<h2>Berikut Ini Daftar Mobil yang Tersedia</h2>
	<table>
			<tr>
				<td>Id Peminjam</td>
				<td>Nama Mobil</td>
				<td>Tahun Mobil</td>
				<td>Warna Mobil</td>
				<td>Kapasitas Penumpang</td>
				<td>Harga Sewa</td>
				<td>Status Kendaraan</td>
				<?php
					if($_SESSION['userType']== 'Admin'){
						echo '<td>Delete</td>';
					}
				?>
			</tr>
			
		 <?= $kontenTable ?>
	</table>
</body>
</html>