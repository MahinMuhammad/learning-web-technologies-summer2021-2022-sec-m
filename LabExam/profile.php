<?php 
	session_start();
 ?>
 <html>
     <head>
        <title></title>
     </head>
     <body>
        <table border="1" align="center" width="40%">
            <tr>
                <td>Profile</td>
                <td></td>
            </tr>
            <tr>
                <td>ID</td>
                <td><?php echo $_SESSION['userId']; ?></td>
            </tr>
                <tr>
                <td>NAME</td>
                <td><?php echo $_SESSION['name']; ?></td>
            </tr>
                <tr>
                <td>USER TYPE</td>
                <td><?php echo $_SESSION['userType']; ?></td>
            </tr>
                </tr>
                <tr>
                <td></td>
                <td><a href="home.php"> GO HOME </a> </td>
            </tr>
        </table>
     </body>
 </html>
