<?php
$username = 'Test5';
$signature = $_GET['payload'];

if($signature){
            $sql="INSERT INTO userauth2 (username,token) VALUES (?,?);";
            $stmt= mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:Signin.php?error=sql007");
            exit();
            }
            mysqli_stmt_bind_param($stmt,"ss",$username,$signature);
            mysqli_stmt_execute($stmt); 
}
?>                                
