<?php 
	session_start();

	if(isset($_COOKIE['status'])){
		if($_SESSION['userType'] == 'Admin')
		{
			echo '<html>
					<head>
						<title>Home Page</title>
					</head>
					<body>
						<h1>Welcome'. $_SESSION['name'].'!</h1>
						<a href="profile.php"> Profile </a> | 
						<a href="changePass.html"> Change Password </a> |
						<a href="userList.php"> View Users </a>
						<a href="logout.php"> Logout </a>
					</body>
					</html>'
?>


<?php 
	}
	else
	{
		echo '<html>
				<head>
					<title>Home Page</title>
				</head>
				<body>
					<h1>Welcome'. $_SESSION['name'].'!</h1>
					<a href="profile.php"> Profile </a> | 
					<a href="changePass.html"> Change Password </a> |
					<a href="logout.php"> Logout </a>
				</body>
				</html>'
	}
	}else{
		echo "invalid request";
	}  
?>


