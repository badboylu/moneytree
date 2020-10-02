<?php

if(isset($_POST['signup-submit'])){

Require 'dbh.php';

$username=$_POST['uid'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$passwordrepeat=$_POST['pwdrepeat'];

if(empty($username)||empty($email)||empty($password)||empty($passwordrepeat)){
   header("Location:signup.html?error=emptyfields&uid=".$username.".&email=".$email);
     exit();
}                  

else if(!FILTER_VAR($email, FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)){        
   header("Location:signup.html?error=invalidemail&uid);
     exit();
}

else if(!FILTER_VAR($email, FILTER_VALIDATE_EMAIL)){        
   header("Location:signup.html?error=invalidemail&uid=".$username);
     exit();
}

else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){        
   header("Location:signup.html?error=invaliduid&email=".$email);
     exit();
}

else if($password !== $passwordrepeat){
   header("Location:signup.html?error=passwordcheck&uid=".$username.".&email=".$email);
     exit();
}

else{
   $sql="SELECT uidUsers FROM users WHERE uidUsers=?";
   $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:signup.html?error=sqlerror");
       exit();
}
  else{
   mysqli_stmt_bind_param($stmt,"s",$username);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $resultCheck=mysqli_stmt_num_rows($stmt);
  if($resultCheck > 0){
       header("Location:signup.html?error=usernametaken&email=".$email");
       exit();
}
}

 }
}
