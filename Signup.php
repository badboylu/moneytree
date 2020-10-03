<?php

Require 'dbh.php';

$username=$_POST['uid'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$passwordrepeat=$_POST['pwdrepeat'];

if(empty($username)||empty($email)||empty($password)||empty($passwordrepeat)){
   header("Location:Signin.html?error=emptyfields&uid=".$username.".&email=".$email);
     exit();
}                  

else if(!FILTER_VAR($email, FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)){        
   header("Location:Signin.html?error=invalidemail&uid");
     exit();
}

else if(!FILTER_VAR($email, FILTER_VALIDATE_EMAIL)){        
   header("Location:Signin.html?error=invalidemail&uid=".$username);
     exit();
}

else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){        
   header("Location:Signin.html?error=invaliduid&email=".$email);
     exit();
}

else if($password !== $passwordrepeat){
   header("Location:Signin.html?error=passwordcheck&uid=".$username.".&email=".$email);
     exit();
}

else{
   $sql="SELECT uidUsers FROM users WHERE uidUsers=?";
   $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.html?error=sqlerror");
       exit();
}
  else{
   mysqli_stmt_bind_param($stmt,"s",$username);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $resultCheck=mysqli_stmt_num_rows($stmt);
  if($resultCheck > 0){
       header("Location:Signin.html?error=usernametaken&email=".$email);
       exit();
}
  else{ 
    $sql="INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES(?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
     header("Location:Signin.html?error=usernametaken&email=".$email);
       exit();
}
    else{
     $hashedPwd=password_hash($password,PASSWORD_DEFAULT);
     mysqli_stmt_bind_param($stmt,"sss",$username,$email,$password);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_store_result($stmt);
     header("Location:index.html?signup=successful");
       exit();
            }
        }
    }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);

