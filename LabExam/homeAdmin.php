<html>
	<head>
		<title>Home Page</title>
	</head>
		<body>
			<fieldset align="center">
				<h1>Welcome <?php session_start(); echo $_SESSION['name']; ?>!</h1>
				<a href="profile.php"> Profile </a> <br>
				<a href="changePassword.html"> Change Password </a> <br>
				<a href="userList.php"> View Users </a> <br>
				<a href="logout.php"> Logout </a>
			</fieldset>
		</body>
</html>