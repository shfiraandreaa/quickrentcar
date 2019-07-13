<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tugas_web";
	
	// mulai koneksi
	$conn = new mysqli($servername, $username, $password, $dbname);
	// periksa koneksi
	if ($conn->connect_error) {
		die("connection failed: " . $conn->connect_error);
	}
?>