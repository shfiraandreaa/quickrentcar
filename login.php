

<html>
	<head>
		<script src="js/jquery-3.3.1.min.js"></script>
		<!--<script src="js/jsLogin.js"></script>-->
		<script src="js/Signup.js"></script>
		<link rel="stylesheet" type="text/css" href="tema/login1.css" />
		<title>Login</title>
	</head>
	
	<body>
	<div class="body-login">
		<form method="post" action="controller/verifikasiLogin.php">
			<div class="login">
				<h1>LOGIN</h1>
				<input type="text" name="username" id="user" placeholder="Username" />
			<br><br>
				<input type="password" name="password" id="pass" placeholder="Password" />
			<br><br>
				<button id="submit">LOGIN</button>
			<br>
				<span class="log">Don't have an account</span>
					<a class="signup" href="">SignUp</a>
			</div>
		</form>
		
		<div class="x-login">
			<img src="images/delete-icon.png" />
		</div>
	</div>
	</body>
</html>