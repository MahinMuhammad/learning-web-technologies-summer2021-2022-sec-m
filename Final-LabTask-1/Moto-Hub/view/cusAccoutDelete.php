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
		<form method="post" action="../control/cusAccoutDeleteCheck.php" enctype="">
			<fieldset align="center">
				<table align="center">
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Delete">
							<a href="profileCusSet.php"> ABORT </a> 
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
</html>