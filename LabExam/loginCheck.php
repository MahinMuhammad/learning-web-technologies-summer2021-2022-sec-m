<?php 
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == null || $password == null){
		echo "null username/password";
	}else{
		$file = fopen('user.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$user = explode('|', $data);
			if($username == trim($user[0]) && $password == trim($user[1])){
				$_SESSION['status'] = true;
				$_SESSION['name'] = $user[2];
				$_SESSION['userType'] = $user[3];
				setcookie('status', 'true', time()+3600, '/');
				header('location: home.php');
			}
		}
		echo "invalid user";
	}

?>