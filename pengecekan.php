				if($_SESSION['userType']=='Admin'){
					include('menuAdmin.php');
				}else{
					include('menuUser.php');
				}