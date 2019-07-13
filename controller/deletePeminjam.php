<?php
	include ('database.php');
	
	$id = $_GET['id'];

	
	$sql ="DELETE FROM data_peminjam WHERE id=$id";
	
	if ($conn->query($sql) === TRUE) {
		echo "sukses";
		
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>