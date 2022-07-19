<?php 

	if(!isset($_COOKIE['status']))
	{
		header('location: login.html');
	}
	$user = explode('|', $_COOKIE['status']); 

	$product = explode('|', $_COOKIE['product']);
?>

<html>
	<head>		
		<title>Product View</title>
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
			<legend> <?php echo trim($product[1]); ?> </legend>
			<table border="1" align="center" width="40%">
	            <tr>
	                <td align="center">DETAILS</td>
	            </tr>
	            <tr>
	                <td>
	                    <table align="center" width="50%">
	                        <tr>
	                            <td>NAME</td>
	                            <td><?php echo trim($product[1]); ?></td>
	                        </tr>
	                        <tr>
	                            <td>PRICE</td>
	                            <td><?php echo trim($product[2]); ?> BDT</td>
	                        </tr>
	                        <tr>
	                            <td colspan="2">
	                            	<table border="1" align="center">
	                            		<tr>
	                            			<td><?php echo trim($product[3]); ?></td>
	                            		</tr>
	                            	</table>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td align="center"><a href="cart.php"> BUY NOW </a></td>
	                            <td></td>
	                        </tr>
	                    </table>
	                </td>
	            </tr>
	        </table>
	        <a href="customerHome.php"> GO HOME </a>
		</fieldset>
	</body>
</html>