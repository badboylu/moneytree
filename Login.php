<?php

if(isset($_POST['login'])){

   require'dbh.php';

  $mailuid=$_POST['mailuid'];
  $password=$_POST['pwd'];

  if(empty($mailuid)||empty($password)){
   header("Location:signing.html?error=emptyfields");
   exit();
 }
  else{

   $sql="SELECT * FROM users WHERE uidUsers=?";
   $stmt=mysqli_stmt_init($conn) 

    if(!mysqli_stmt_prepare($stmt, $sql)){
     header("Location:signing.html?error=sqlerror");
     exit();
  }
   else{
     mysqli_stmt_bind_params($stmt,"ss",$mailuid,$mailuid);
     mysqli_stmt_execute($stmt);
     $result=mysqli_stmt_get_result($stmt);
      
      if($row=mysqli_fetch_assoc($result)){
       $pwdcheck=password_verify($password, $row['pwdUsers']);
       exit();
   }
      else{
       
   }
  }
 }
}
