<?php 
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
    $user = explode('|', $_COOKIE['status']);

    $password = $_POST['password'];

    if($password == null)
    {
        echo '<h1>Empty Field!!!</h1>';
        echo'<br><a href="../view/cusAccoutDelete.php"> Go Back </a>';
    }
    else
    {
        if($password == trim($user[1]))
        {
            $file = '../model/user.txt';
            $data = file_get_contents($file);
            $oldLine = trim($user[0])."|".trim($user[1])."|".trim($user[2])."|".trim($user[3])."\r\n";
            $newLine = '';
            $newData = str_replace($oldLine, $newLine, $data);
            file_put_contents($file, $newData);
            setcookie('status', $newLine, time()-100, '/');
            header('location: ../view/login.html');
        }
        else
        {
            echo '<h1>Wrong Password!!!</h1>';
            echo'<br><a href="../view/cusAccoutDelete.php"> Go Back </a>';
        }
    }
 ?>

