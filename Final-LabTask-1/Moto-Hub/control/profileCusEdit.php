<?php 

	if(!isset($_COOKIE['status']))
	{
		header('location: ../view/login.html');
	}
	$user = explode('|', $_COOKIE['status']);

	$userEmail = $_POST['email'];
	$userName = $_POST['name'];

	if($userEmail == null || $userName == null)
	{
		echo '<h1>Name or Email can not be empty!!!</h1>';
		echo'<br><a href="../view/profileCusSet.php"> Go Back </a>';
	} 
	else
	{
		$file = '../model/user.txt';
		$data = file_get_contents($file);
		$oldLine = trim($user[0])."|".trim($user[1])."|".trim($user[2])."|".trim($user[3])."\r\n";
		$newLine = $userEmail."|".trim($user[1])."|".$userName."|".trim($user[3])."\r\n";
		$newData = str_replace($oldLine, $newLine, $data);
		file_put_contents($file, $newData);
		setcookie('status', $newLine, time()+3600, '/');
		header('location: ../view/customerHome.php');
	}
?>