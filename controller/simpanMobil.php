<?php
	include('database.php');
	
	$namaMobil = $_POST['namaMbl'];
	$tahunMobil = $_POST['tahunMbl'];
	$warnaMobil = $_POST['warnaMbl']; 
	$kapasitasDidapat = $_POST['kapasitas'];
	$harga = $_POST['hargaSewa'];
	
$status_ketersediaan = 'Tersedia';
	
	$sql = "INSERT INTO mobil VALUES(null, '$namaMobil', $tahunMobil, '$warnaMobil' ,'$kapasitasDidapat', $harga , '$status_ketersediaan')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Tersimpan";
	} else {
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
?>