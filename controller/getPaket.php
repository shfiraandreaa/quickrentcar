<?php
	include('database.php');
	
	$namaMobil = $_POST['pilihMbl'];
	
	$sqlSelect = "SELECT * FROM paket WHERE nama_mobil = '$namaMobil'";
	
	$dataDitemukan = array();
	
	$result = $conn->query($sql);
	if ($result->num_rows >0){
		
		while($row = $result->fetch_assoc()){
			$dataDitemukan[] = $row['pilihan_paket'];
		}
		
		echo json_encode($dataDitemukan);
		
	}else{
		echo "0";
	}
	
?>										