<?php

$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$mailuid=$_POST['mailuid'];
$password=$_POST['pwd'];

if(empty($mailuid)||empty($password)){
    header("Location:signing.html?error=emptyfields");
    exit();
    }
    $sql="SELECT emailUsers FROM users WHERE emailUsers=?";

    $stmt=mysqli_stmt_init($conn); 
 
    mysqli_stmt_bind_param($stmt,"s",$mailuid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if($resultCheck = 0){
        header("Location:index.html?error=WrongUsername");
        exit();
    }else{
        header("Location:index.html?error=successful");
        exit();
    }

    ?>
