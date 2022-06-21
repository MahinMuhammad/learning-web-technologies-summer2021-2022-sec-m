<?php 
	session_start();

	if(isset($_COOKIE['status']))
	{
		if($_SESSION['userType'] == "Admin")
		{
			header('location: homeAdmin.php');
		}
		else
		{
			header('location: homeUser.php');
		}
	}
	else
	{
		echo "invalid request";
	} 

?>


