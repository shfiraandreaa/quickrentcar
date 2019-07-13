<?php
	include('database.php');
	
	$id = $_POST['id'];
	$status = $_POST['status'];
	$namaMobil = $_POST['nama_mobil'];

	$sql ="UPDATE data_peminjam SET status='$status' WHERE id=$id";
	
	if($status === "Sedang Menggunakan"){
		$statMobil = "Tidak Tersedia";
	}else{
		$statMobil = "Tersedia";
	}
	
	$sql2 ="UPDATE mobil SET status_ketersediaan='$statMobil' WHERE nama_mobil='$namaMobil'";
	
	if ($conn->query($sql) === TRUE) {
		echo "sukses";
		$conn->query($sql2);
	} else {
		echo "gagal";
	}
	
	
	
	$conn->close();
	
?>