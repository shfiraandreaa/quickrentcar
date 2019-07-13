<?php
	include('database.php');
	
	$pilihanPaket = $_POST['pilihanPkt'];
	
	$sqlSelect = "SELECT * FROM paket WHERE pilihan_paket = '$pilihanPaket'";
	
	$dataDitemukan = array();
	
	$result = $conn->query($sql);
	if ($result->num_rows >0){
		
		while($row = $result->fetch_assoc()){
			$dataDitemukan[] = $row['harga'];
		}
		
		echo json_encode($dataDitemukan);
		
	}else{
		echo "0";
	}
	
?>										