<?php 

	if(!isset($_COOKIE['status']))
	{
		header('location: login.html');
	}
	$user = explode('|', $_COOKIE['status']); 
?>
<html>
	<head>
		<title></title>
	</head>
	<style>
		body 
		{
		  background-image: url('../asset/backG.jpg');
		  background-size: cover;
		}
	</style>
	<body>
		<form method="post" action="../control/profileCusEdit.php" enctype="">
			<fieldset align="center">
				<legend>SETTINGS</legend>
				<table align="center">
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="<?php echo trim($user[2]); ?>"><br></td>
					</tr>

					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="<?php echo trim($user[0]); ?>"><br></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Save">
							<a href="profileCus.php"> GO BACK </a> 
						</td>
					</tr>
				</table>
				_______________________________________<br>
				<a href="cusAccoutDelete.php"> DELETE ACCOUNT! </a> 
			</fieldset>
		</form>
	</body>
</html>