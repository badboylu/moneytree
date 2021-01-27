<?php
 
$token= bin2hex(random_bytes(16));
    mysqli_stmt_close($stmt);
    $sql="INSERT INTO userauth2 (token) VALUES (?);";
    $stmt= mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location:Signin.php?error=sqlerror123");
    exit();
 }

 mysqli_stmt_bind_param($stmt,"s",$token);
 mysqli_stmt_execute($stmt);

 header("Location:F1.php?auth=".$token.");
 exit();
