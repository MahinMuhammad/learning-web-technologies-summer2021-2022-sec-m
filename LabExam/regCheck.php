<?php 
	session_start();

	$userid = $_POST['id'];
	$password = $_POST['password'];
	$passwordConf = $_POST['passwordConf'];
	$userName = $_POST['name'];
	$userType = $_POST['userType'];
	$fname = $_POST['fname'];

	if($userid == null || $password == null || $passwordConf == null || $userType == null || $userName == null){
		echo "not field can be empty or options unchecked";
	}else{

		if($password == $passwordConf)
		{
			$user = $userid."|".$password."|".$userName."|".$userType."\r\n";
			$file = fopen('user.txt', 'a');
			fwrite($file, $user);

			if($fname == 'create')
			{
				header('location: home.php');
			}
			else
			{
				header('location: login.html');
			}
		}
		else
		{
			echo "Password confirmation failed!";
		}

	}


?>