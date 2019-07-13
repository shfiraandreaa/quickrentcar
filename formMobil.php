<html>
	<head>
		<title></title>
	</head>
	
	<body>
		<h2>Isi Formulir Untuk Menambah Daftar Mobil</h2>
		<form action="controller/simpanMobil.php" method="post" id="isian_mobil">
			<table id="tabel_Tmobil">
				<tr>
					<td>Nama Mobil</td>
					<td>:</td>
					<td><input type="text" name="namaMbl" id="nama_mbl" /></td>
					
				</tr>
				
				<tr>
					<td>Tahun Mobil</td>
					<td>:</td>
					<td><input type="text" name="tahunMbl" id="tahun_mbl" /></td>
				</tr>
				
				<tr>
					<td>Warna Mobil</td>
					<td>:</td>
					<td><input type="text" name="warnaMbl" id="warna_mbl" /></td>
				</tr>
				
				<tr>
					<td>Kapasitas Penumpang</td>
					<td>:</td>
					<td><input type="text" name="kapasitas" id="jumlah_pnm" /></td>
				</tr>
				
				<tr>
					<td>Harga Sewa</td>
					<td>:</td>
					<td><input type="number" name="hargaSewa" id="harga" /></td>
				</tr>
				
			</table>
			<br><br>
				<input type="submit" id="save" value="SIMPAN" />
		</form>

	</body>
</html>