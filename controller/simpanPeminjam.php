<?php
	include('database.php');
	
	$namaPeminjam = $_POST['namaPjm'];
	$alamatPeminjam = $_POST['alamat']; 
	$noTlpPeminjam = $_POST['tlp'];
	$pilihanMbl = $_POST['pilihanMbl'];
	$tanggalPesan = $_POST['tanggal_pesan'];
	$jumlahHari = $_POST['lama_hari'];
	$pilihanPkt = $_POST['pilihanPkt'];
	$harga = $_POST['harga'];
	
	$status = "menunggu";
	
	$datePinjam = strtotime($tanggalPesan);
	$datePinjam = strtotime("+". $jumlahHari ." day", $datePinjam);
		//echo $datePinjam.'<br>';
	$tanggalKembali = date('Y-m-d', $datePinjam);
		//echo $tanggalKembali;
	
	$sql = "INSERT INTO data_peminjam VALUES(null, '$namaPeminjam', '$alamatPeminjam' , '$noTlpPeminjam' ,'$pilihanMbl', '$tanggalPesan' , '$tanggalKembali' , '$pilihanPkt' , '$harga', '$status')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Tersimpan";
	} else {
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
?>