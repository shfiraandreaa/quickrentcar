<html>
	<head>
		<title></title>
	</head>
	
	<body>
		<h2>Isi Formulir Untuk Menambah Daftar Mobil</h2>
		<form action="controller/simpanPaket.php" method="post" id="isian_paket">
			<table id="tabel_Tpaket">
				<tr>
					<td>Nama Mobil</td>
					<td>:</td>
					<td><input type="text" name="namaMbl" id="nama_mobil" /></td>
					
				</tr>
				
				<tr>
					<td>Pilihan Paket</td>
					<td>:</td>
					<td><input type="text" name="pilPkt" id="pilih_pkt" /></td>
				</tr>
				
				<tr>
					<td>Harga</td>
					<td>:</td>
					<td><input type="text" name="harga" id="harga_pkt" /></td>
				</tr>
	
			</table>
			<br><br>
				<input type="submit" value="SIMPAN" />
		</form>

	</body>
</html>