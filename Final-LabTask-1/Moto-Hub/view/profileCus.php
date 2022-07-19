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
        <table border="1" align="center" width="40%">
            <tr>
                <td align="center">PROFILE</td>
            </tr>
            <tr>
                <td>
                    <table align="center" width="50%">
                        <tr>
                            <td>NAME</td>
                            <td><?php echo trim($user[2]); ?></td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td><?php echo trim($user[0]); ?></td>
                        </tr>
                        <tr>
                            <td>USER TYPE</td>
                            <td><?php echo trim($user[3]); ?></td>
                        </tr>
                        <tr>
                            <td><a href="profileCusSet.php"> SETTINGS </a></td>
                            <td><a href="customerHome.php"> GO HOME </a></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
     </body>
 </html>
