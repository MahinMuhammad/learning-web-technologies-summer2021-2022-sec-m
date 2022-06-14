<?php
	$name = $_POST['name'];
	
	function emptyCheck($name)
	{
		if($name==null)
		{
			echo "Cannot be empty".'<br>';
			return false;
		}
		else
		{
			return true;
		}
	}

	function twoWord($name)
	{
		for ($i=0; $i < strlen($name); $i++) 
		{ 
			if($name[$i]==" ")
			{
				return true;
			}
		}
		echo "Have to contain at least two words".'<br>';
		return false;
	}

	function firstLetter($name)
	{
		if(('a' <= $name[0] && $name[0] <= 'z') || ('A' <= $name[0] && $name[0] <= 'Z'))
		{
			return true;
		}
		else
		{
			echo "Must start with letter".'<br>';
			return false;
		}
	}

	function checkChar($name)
	{
		for ($i=0; $i < strlen($name); $i++) 
		{ 
			if(('a' <= $name[$i] && $name[$i] <= 'z') || ('A' <= $name[$i] && $name[$i] <= 'Z') || $name[$i]=="." || $name[$i]=="-" || $name[$i]==" ")
			{

			}
			else
			{
				echo "Can only contain letters, period and dash".'<br>';
				return false;
			}
		}
		return true;
	}

	if(emptyCheck($name) && twoWord($name) && firstLetter($name) && checkChar($name))
	{
		echo "Valid";
	}
	else
	{
		echo "Invalid".'<br>';
	}
	
	
?>