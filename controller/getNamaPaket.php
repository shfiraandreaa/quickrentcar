<?php
	include('database.php');
	
	$namaMobil = $_POST['pilihMbl'];
	
	$sqlSelect = "SELECT * FROM paket WHERE nama_mobil = '$namaMobil'";
	
	$result = $conn->query($sqlSelect);
	
	$kontenOption = "";
	
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()){
			$nama = $row['pilihan_paket'];
			
			$kontenOption .= "<option value='$nama'>$nama</option>";
		}
	}
	
	echo $kontenOption; 
?>