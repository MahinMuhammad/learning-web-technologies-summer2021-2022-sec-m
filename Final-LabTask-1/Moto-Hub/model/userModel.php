<?php 
    require_once "db.php";

    function regFun($user){
        $conn = getConnection();
		$sql = "insert into userTab values('{$user['username']}', '{$user['email']}', '{$user['pass']}', '{$user['userType']}')";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

?>