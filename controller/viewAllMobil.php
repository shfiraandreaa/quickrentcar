<?php
	include('database.php');
	
	$sqlSelect = "SELECT * FROM mobil";
	
	$result = $conn->query($sqlSelect);
	
	$kontenTable = "";
	
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()){
			$dataTR = "<tr>";
			//fungsinnya agar td awal tidak muncul sehingga dikosongkan
			$dataTD = "<td>". $row['id'] . "</td>";
			$dataTD .= "<td>" . $row['nama_mobil'] . "</td>";
			$dataTD .= "<td>" . $row['tahun_mobil'] . "</td>";
			$dataTD .= "<td>" . $row['warna_mobil'] . "</td>";
			$dataTD .= "<td>" . $row['kapasitas'] . "</td>";
			$dataTD .= "<td>" . $row['harga_sewa'] . "</td>";
			$dataTD .= "<td>" . $row['status_ketersediaan'] . "</td>";
			$alamat = "controller/deleteMobil.php?id=".$row['id'];
			$anchor = "<a data='Mobil' class='delete' href='$alamat'>Hapus</a>";
					if($_SESSION['userType']== 'Admin'){
						$dataTD .= "<td>$anchor</td>";
					}
			$dataTR .= $dataTD . "</tr>";
			
			// simpan ke variable kontenTable
			$kontenTable .= $dataTR;
		}
	}
?>