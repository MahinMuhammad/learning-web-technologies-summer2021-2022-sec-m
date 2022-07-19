<?php 

	if(!isset($_COOKIE['status']))
	{
		header('location: login.html');
	}
	$user = explode('|', $_COOKIE['status']); 

	$file = fopen('../model/product.txt', 'r');
	$data=fgets($file);
	$product = explode('|', $data);
	setcookie('product', $data, time()+3600, '/');
?>
<html>
	<head>
		<title>Home Page</title>
	</head>
	<style>
		body 
		{
		  background-image: url('../asset/backG.jpg');
		  background-size: cover;
		}
	</style>
	<body>
		<fieldset align="center">
			<table  width="100%">
				<tr>
					<td width="250"></td>
					<td align="center" width="200"><a href="profileCus.php"> Profile </a></td>
					<td align="center" width="200"><a href="inbox.php"> Inbox </a></td> 
					<td align="center" width="200"><a href="services.php"> Services </a></td> 			
					<td align="center" width="200"><a href="changePass.php"> Change Password </a></td>
					<td align="center" width="200"><a href="cart.php"> Cart </a></td>
					<td align="center" width="200"><a href="../control/logout.php"> Logout </a></td>
					<td width="250"></td>
				</tr>
			</table>
			<h1>Welcome <?php echo trim($user[2]); ?>!</h1>
			<table border="1" align="center">
				<tr>
					<td align="center" colspan="2"> MARKET PLACE</td>
				</tr>
				<tr>
					<td align="center" colspan="2"><a href="productView.php"> <?php echo trim($product[1]); ?> </a></td>
				</tr>
				<tr>
					<td align="center"><a href="profileCus.php"> Prev </a></td>
					<td align="center"><a href="profileCus.php"> Next </a></td>
				</tr>
			</table>
		</fieldset>
	</body>
</html>