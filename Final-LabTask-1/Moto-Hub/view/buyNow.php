<?php 
    if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }
    // $user = explode('|', $_COOKIE['status']); 

    $product = explode('|', $_COOKIE['product']);

    // $newUser = trim($user[0])."|".trim($user[1])."|".trim($user[2])."|".trim($user[3])."|".trim($product[0])."\r\n";

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
        <fieldset align="center">
            <legend>CART</legend>
            <table border="1" align="center">
                <tr>
                    <td align="center" width="100"> NAME</td>
                    <td align="center" width="100"><?php echo trim($product[1]); ?></td>
                    <td><a href="customerHome.php"> BUY </a></td>
                </tr>
            </table>
        </fieldset>
    </body>
</html>