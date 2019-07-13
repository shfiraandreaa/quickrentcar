<?php
	include('database.php');
	
	$namaMobil = $_POST['namaMbl'];
	$pilihanPaket = $_POST['pilPkt']; 
	$hargaDidapat = $_POST['harga'];
	
	$sql = "INSERT INTO paket VALUES(null, '$namaMobil', '$pilihanPaket' ,$hargaDidapat)";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Tersimpan";
	} else {
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
?>