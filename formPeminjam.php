<html>
	<head>

		<title></title>
	</head>
	
	<body>
		<h2>Isi Formulir di Bawah ini untuk Melakukan Pemesanan</h2>
		<form action="controller/simpanPeminjam.php" method="post" id="isian-pinjam">
			<table id="tabel_Tpeminjam">
				<tr>
					<td>Nama Peminjam</td>
					<td>:</td>
					<td><input type="text" name="namaPjm" id="namaPeminjam" /></td>
					
				</tr>
				
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" id="alamatPjm" /></td>
				</tr>
				
				<tr>
					<td>No.Tlp</td>
					<td>:</td>
					<td><input type="text" name="tlp" id="tlpPjm" /></td>
				</tr>
				
				<tr>
					<td>Mobil yang Dipesan</td>
					<td>:</td>
					<td>
						<select class="pil_mobil" name="pilihanMbl" id="selectMbl">
							<option>Select</option>
							<?php
								include('controller/viewNamaMobil.php');
							?>
						</select>
					</td>
				</tr>
				
				<tr>
					<td>Tanggal_Pemesanan</td>
					<td>:</td>
					<td><input type="date" name="tanggal_pesan" id="tglPjm" /></td>
				</tr>
				
				<tr>
					<td>Lama Hari</td>
					<td>:</td>
					<td><input type="text" name="lama_hari" id="jmlHari" /></td>
				</tr>
				
				<tr>
					<td>Pilihan Paket</td>
					<td>:</td>
					<td>
						<select class="pil_Paket" name="pilihanPkt"  id="pilPaket">
							<option>Select</option>
							<?php
								include('controller/viewNamaPaket.php');
							?>
						</select>
					</td>
				</tr>
				
				<tr>
					<td>Harga</td>
					<td>:</td>
					<td>
						<select id="harga" name="harga" >
							<option>Select</option>
						</select>
					</td>
				</tr>
				
			</table>
			<br><br>
				<input type="submit" value="PINJAM" />
		</form>

	</body>
</html>