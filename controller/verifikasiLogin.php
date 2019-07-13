<?php
	include('database.php');
	session_start();
	
	$userDidapat = $_POST['username'];
	$passDidapat = $_POST['password'];
	
	$sqlSelectUser = "SELECT * FROM user WHERE username='$userDidapat' AND password='$passDidapat'";
	
	
	$result = $conn->query($sqlSelectUser);
	
	if ($result->num_rows > 0) {
		
		
		
		while($row = $result->fetch_assoc()){
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['userType']= $row['userType'];
		}
	}

	
	$conn->close();
	
	if(isset($_SESSION['username'])){
		//echo $_SESSION['x'];
		header("Location:../home.php");
	}else{

		header("Location:../index.php");
		//echo "failed";
	}
?>