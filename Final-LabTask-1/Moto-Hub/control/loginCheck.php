<?php 
	if(!isset($_COOKIE['status']))
	{
		header('location: ../view/login.html');
	}
	$userEmail = $_POST['email'];
	$password = $_POST['password'];

	if($userEmail == null || $password == null)
	{
		echo '<h1>Email or Password Empty!!!</h1>';
		echo'<br><a href="../view/login.html"> Go Back </a>';
	}
	else
	{
		$file = fopen('../model/user.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$user = explode('|', $data);
			if($userEmail == trim($user[0]) && $password == trim($user[1]))
			{

				// $_SESSION['status'] = true;
				// $_SESSION['email'] = trim($user[0]);
				// $_SESSION['name'] = trim($user[2]);
				// $_SESSION['userType'] = trim($user[3]);
				setcookie('status', $data, time()+3600, '/');
				
				switch (trim($user[3])) 
				{
					case "Customer":
						header('location: ../view/customerHome.php');
						break;

					case "Seller":
						header('location: ../view/sellerHome.php');
						break;

					case "Service-Man":
						header('location: ../view/serviceManHome.php');
						break;

					case "Admin":
						header('location: ../view/adminHome.php');
						break;
					
					default:
						echo "user type not found!";
						break;
				}
			}
		}
		echo '<h1>Invalid user!!!</h1>';
		echo'<br><a href="../view/login.html"> Go Back </a>';		
	}

?>