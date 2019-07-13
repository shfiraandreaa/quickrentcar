<?php
	include ('database.php');
	
	$id = $_GET['id'];

	
	$sql ="DELETE FROM mobil WHERE id=$id";
	
	if ($conn->query($sql) === TRUE) {
		echo "sukses";
		
	} else {
		echo "gagal";
	}
	
	$conn->close();
?>