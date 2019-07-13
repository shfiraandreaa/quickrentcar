<?php
	include('database.php');
	
	$sqlSelect = "SELECT * FROM data_peminjam";
	
	$result = $conn->query($sqlSelect);
	
	$kontenTable = "";
	
	
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()){
			$dataTR = "<tr>";
			//fungsinnya agar td awal tidak muncul sehingga dikosongkan
			//$dataTD = "<td>". $row['id'] . "</td>";
			$nomorID = $row['id'];
			$namaMobil = $row['nama_mobil_dipesan'];
			$dataTD = "<td><input type='checkbox' value='$nomorID' nama-mobil='$namaMobil'/></td>";
			$dataTD .= "<td>" . $row['nama'] . "</td>";
			$dataTD .= "<td>" . $row['alamat'] . "</td>";
			$dataTD .= "<td>" . $row['no_tlp'] . "</td>";
			$dataTD .= "<td>" . $row['nama_mobil_dipesan'] . "</td>";
			$dataTD .= "<td>" . $row['tanggal_pesan'] . "</td>";
			$dataTD .= "<td>" . $row['tanggal_kembali'] . "</td>";
			$dataTD .= "<td>" . $row['pilihan_paket'] . "</td>";
			$dataTD .="<td>" . $row['status']."</td>";
			$alamat = "controller/deletePeminjam.php?id=".$row['id'];
			$anchor = "<a data='Peminjam' class='delete' href='$alamat'>Hapus</a>";
			$dataTD .= "<td>$anchor</td>";
			$dataTR .= $dataTD . "</tr>";
			
			// simpan ke variable kontenTable
			$kontenTable .= $dataTR;
		}
	}
?>