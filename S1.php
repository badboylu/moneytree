<?php

    $sql="INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES(?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.php?error=SQL3");
       exit();
    }
     mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedPwd);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_store_result($stmt);
       header("Location:Shop.php?signup=successful");
       exit();
