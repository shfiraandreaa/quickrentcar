<?php
	include('database.php');
	
	$namaPaket = $_POST['pilihanPkt'];
	$namaMobil = $_POST['pilihanMbl'];
	
	$sqlSelect = "SELECT * FROM paket WHERE nama_mobil = '$namaMobil' AND pilihan_paket = '$namaPaket'";
	
	$result = $conn->query($sqlSelect);
	
	$kontenOption = "";
	
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()){
			$nama = $row['harga'];
			
			$kontenOption .= "<option value='$nama'>$nama</option>";
		}
	}
	
	echo $kontenOption; 
?>