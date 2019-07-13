<?php
	include ("database.php");
	
	$dapatUser = $_POST['user'];
	$dapatPass = $_POST['pass'];
	$dapatEmail = $_POST['email'];
$userType = 'General';
		
	$sql ="INSERT INTO user VALUES(null, '$dapatUser', '$dapatPass', '$dapatEmail' , '$userType')";
	
	
	
	if ($conn->query($sql) === TRUE) {
		echo "Tersimpan";
		//header("Location../login.php");
	} else {
		echo "Gagal Tersimpan";
	}
	
	$conn->close();
?>