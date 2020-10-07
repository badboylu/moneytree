<?php

if(isset($_POST["request"])){
   $selector=bin2hex(random_bytes(8));
   $token=random_bytes(32);
   $url="www.kushlord.herokuapp.com/FPW.html?selector=".$selector."&validate=".bin2hex($token);
   $expires=date("U")+1800;
   require 'dbh.php';
   $userEmail=$_POST["email"];
   $sql="DELETE FROM pwdReset WHERE pwdResetEmail=?";
   $stmt=mysqli_stmt_init($conn);

 if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location:FPW.html?error=sqlerror");
    exit();
 }
}

   
