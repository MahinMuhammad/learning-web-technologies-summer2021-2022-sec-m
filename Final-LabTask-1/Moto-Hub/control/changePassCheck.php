<?php
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
    $user = explode('|', $_COOKIE['status']);

	$password = $_POST['password'];
	$passwordNew = $_POST['passwordNew'];
	$passwordConf = $_POST['passwordConf'];

	if($password == null || $passwordNew == null || $passwordConf == null)
	{
		echo '<h1>Empty Field!!!</h1>';
		echo'<br><a href="../view/changePass.php"> Go Back </a>';
	}
	else
	{
		if($password == trim($user[1]))
		{
			if($passwordNew == $passwordConf)
			{
				$file = '../model/user.txt';
				$data = file_get_contents($file);
				$oldLine = trim($user[0])."|".trim($user[1])."|".trim($user[2])."|".trim($user[3])."\r\n";
				$newLine = trim($user[0])."|".$passwordNew."|".trim($user[2])."|".trim($user[3])."\r\n";
				$newData = str_replace($oldLine, $newLine, $data);
				file_put_contents($file, $newData);
				setcookie('status', $newLine, time()+3600, '/');
				header('location: ../view/customerHome.php');
			}
			else
			{
				echo '<h1>Password Confirmation Failed!!!</h1>';
				echo'<br><a href="../view/changePass.php"> Go Back </a>';
			}
		}
		else
		{
			echo '<h1>Wrong Current Password!!!</h1>';
			echo'<br><a href="../view/changePass.php"> Go Back </a>';
		}
	}

?>