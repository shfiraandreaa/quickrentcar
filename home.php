

<html>
	<head>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/home.js"></script>
		<link rel="stylesheet" type="text/css" href="tema/home.css" />
		<title>::</title>
	</head>
	
	<body>
		<div class="daftar-menu">
		
			<?php
				$namaFile = 'menu'.$_SESSION['userType'].'.php';
				include($namaFile);
			?>

		</div>
				
		<div class="atas-kanan">
			
			<div class="user">	
				<img src="images/user.png"/>
				<span> Selamat Datang di Quickrentcar!</span>
			</div>	
			
				<div class="logout">
					<a href="controller/logout.php"><img src="images/logout.png" /></a>
				</div>
	
		</div>

		<div class="wadah-isi"></div>
		
	</body>
</html>