<?php 
	if(!isset($_COOKIE['status']))
	{
		header('location: ../view/login.html');
	}
	$userEmail = $_POST['email'];
	$password = $_POST['password'];
	$passwordConf = $_POST['passwordConf'];
	$userName = $_POST['name'];
	$userType = $_POST['userType'];

	require_once "../model/userModel.php";

	if($userEmail == null || $password == null || $passwordConf == null || $userType == null || $userName == null){
		echo '<h1>Empty Field!!!</h1>';
		echo'<br><a href="../view/reg.html"> Go Back </a>';
	}else{

		if($password == $passwordConf)
		{
			$user['username'] = $userName;
			$user['email'] = $userEmail;
			$user['pass'] = $password;
			$user['userType'] = $userType;
			if(regFun($user))
			{
				header('location: ../view/login.html');
			}
			else
			{
				echo '<h1>Registration Failed failed!!!</h1>';
				echo'<br><a href="../view/reg.html"> Go Back </a>';
			}

			
		}
		else
		{
			echo '<h1>Password confirmation failed!!!</h1>';
			echo'<br><a href="../view/reg.html"> Go Back </a>';
		}

	}
?>