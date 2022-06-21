<?php 
	session_start();

	$userId = $_POST['userId'];
	$password = $_POST['password'];

	if($userId == null || $password == null){
		echo "null user Id/password";
	}else{
		$file = fopen('user.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$user = explode('|', $data);
			if($userId == trim($user[0]) && $password == trim($user[1])){
				$_SESSION['status'] = true;
				$_SESSION['userId'] = trim($user[0]);
				$_SESSION['name'] = trim($user[2]);
				$_SESSION['userType'] = trim($user[3]);
				setcookie('status', 'true', time()+3600, '/');
				header('location: home.php');
			}
		}
		echo "invalid user";
	}

?>