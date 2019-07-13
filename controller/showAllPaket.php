<?php
	include ("database.php");


	$sql = "SELECT * FROM paket";
	
	$dataDitemukan = array();
	
	$result = $conn->query($sql);
	if ($result->num_rows >0){
		
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>" . $row['nama_mobil'] . "</td>";
			echo "<td>" . $row['pilihan_paket'] . " </td>";
			echo "<td>" . $row['harga'] . "</td>";
			echo "</tr>";
		}
		
		
		
	}else{
		echo "0";
	}
?>