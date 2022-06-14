<?php
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	function emptyCheck($a)
	{
		if($a==null)
		{
			echo "Cannot have empty field".'<br>';
			return false;
		}
		else
		{
			return true;
		}
	}

	if(function emptyCheck($day) && function emptyCheck($month) && function emptyCheck($year))
	{
		echo "Valid";
	}
	else
	{
		echo "Invalid".'<br>';
	}

?>