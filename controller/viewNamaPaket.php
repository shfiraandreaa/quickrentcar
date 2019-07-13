<?php
	include('database.php');
	
	$sqlSelect = "SELECT * FROM paket";
	
	$result = $conn->query($sqlSelect);
	
	$kontenOption = "";
	
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()){
			//$id = $row['id'];
			$nama = $row['pilihan_paket'];
			
			$kontenOption .= "<option value='$nama'>$nama</option>";
		}
	}
	
	echo $kontenOption; 
?>