<?php
	session_start();
//memeriksa apakah ada kiriman POST?
if(isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
}else{
	//kalau tidak ada kirim POST
	//maka kita lempar user kembali kembali
	//page login
	header("Location:login.html");
}
?>