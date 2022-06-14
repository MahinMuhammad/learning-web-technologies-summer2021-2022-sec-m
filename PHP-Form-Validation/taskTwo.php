<?php
	$email = $_POST['email'];
	
	function emptyCheck($email)
	{
		if($email==null)
		{
			echo "Cannot be empty".'<br>';
			return false;
		}
		else
		{
			return true;
		}
	}

	if(emptyCheck($email))
	{
		echo "Valid";
	}
	else
	{
		echo "Invalid".'<br>';
	}
	

?>