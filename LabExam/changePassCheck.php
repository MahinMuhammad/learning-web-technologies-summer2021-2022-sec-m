<?php
	echo "hi";
	$password = $_POST['password'];
	$passwordNew = $_POST['passwordNew'];
	$passwordConf = $_POST['passwordConf'];

	if($password == null || $passwordNew == null || $passwordConf == null)
	{
		echo '<h1>Empty Field!!!</h1>';
		echo'<br><a href="changePass.html"> Go Back </a>';
	}

?>