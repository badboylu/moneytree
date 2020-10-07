<?php

if(isset($_POST["request"])){
   $selector=bin2hex(random_bytes(8));
   $token=random_bytes(32);
   $url="www.kushlord.herokuapp.com/FPW.html?selector=".$selector."&validate=".bin2hex($token);
   $expires=date("U")+1800;
   require 'dbh.php';
   $userEmail=$_POST["email"];
   $stmt=mysqli_stmt_init($conn);
   $sql="DELETE FROM pwdReset WHERE pwdResetEmail=?";

 if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location:FPW.html?error=sqlerror");
    exit();
 }

 else{
 mysqli_stmt_bind_param($stmt,"s",$userEmail);
 mysqli_stmt_execute($stmt);
 }
 
    $sql="INSERT INTO pwdRest(pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) VALUES (?,?,?,?);";
    $stmt= mysqli_stmt_init($conn);



}

   
