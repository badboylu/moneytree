<?php
 $servername="us-cdbr-east-02.cleardb.com";
 $dBUsername="b7fcd41c893d7a";
 $dBPassword="1e8f896b7da9e41";
 $dBName="heroku_61db5a5cdc2dfd8";
 $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

    $token= bin2hex(random_bytes(16));
    $sql="INSERT INTO userauth2 (token) VALUES (?);";
    $stmt= mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location:Signin.php?error=sqlerror123");
    exit();
 }

 mysqli_stmt_bind_param($stmt,"s",$token);
 mysqli_stmt_execute($stmt);

 header("Location:F1.php?auth=".$token);
 exit();
