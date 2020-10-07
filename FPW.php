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

 else{
 mysqli_stmt_bind_param($stmt,"s",$userEmail);
 mysqli_stmt_execute($stmt);
 }
 
    $sql="INSERT INTO pwdRest(pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) VALUES (?,?,?,?);";
    $stmt= mysqli_stmt_init($conn);

 if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location:FPW.html?error=sqlerror");
    exit();
 }

 else{
 $hashedToken=password_hash($token, PASSWORD_DEFAULT);
 mysqli_stmt_bind_param($stmt,"ssss",$userEmail,$selector,$hashedToken,$expires);
 mysqli_stmt_execute($stmt);
 }

   mysqli_stmt_close($stmt);
   mysqli_close();
   
   $to=$userEmail;
   $subject='Reset Kush Lord password';
   $message='<p> We have received a request for a password reset. Please follow the link below to reset your password.</p>
   $message='<p> Reset link: <br> ;
   $message='<a href="'.$url.'">'.$url.'</a></p>;
}

   
