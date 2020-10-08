<?php

if(isset($_POST['reset-submit'])){

 $selector=$_POST["selector"];
 $validator=$_POST["validator"];
 $password=$_POST["pwd"];
 $passwordRepeat=$_POST["pwdRepeat"];

  if(empty($password) || empty($passwordRepeat)){
   header("Location:createpwd.html?error=empty fields");
   exit();
  }

  else if($password!=$passwordRepeat){
   header("Location:createpwd.html?error=empty fields");
   exit();
  }

   $currentDate=date("U");
   require 'dbh.php';
   $sql="SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires>=?;
";
   $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
     echo "sqlError";
     exit();
    }
    else{
     mysqli_stmt_bind_param($stmt,"s",$selector);
     mysqli_stmt_execute($stmt);
     $result=mysqli_stmt_get_result($stmt);
      if(!$row=mysqli_fetch_assoc($result)){
       echo "Please re-submit request";
       exit();
      }
      else{
       $tokenBin=hex2bin($validation);
       $tokenCheck=password_verify($tokenBin,$row["pwdResetToken"]);
        if($tokenCheck === false){
         echo "Please re-submit request";
         exit();
        }
        elseif($tokenCheck===true){
         $tokenEmail=$row['pwdResetEmail'];
         $sql="SELECT * FROM users WHERE emailUsers=?;";
         $stmt=mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
           echo "sqlError";
           exit();
          }
          else{
           mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
           mysqli_stmt_execute($stmt);
           $result=mysqli_stmt_get_result($stmt);
            if(!$row=mysqli_fetch_assoc($result)){
             echo "Please re-submit request";
             exit();
            }
            else{
             $sql="UPDATE users SET pwdUsers=? WHERE email used=?;";
             $stmt=mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt, $sql)){
               echo "sqlError";
               exit();
              }
              else{
               $newPwdHashed=password_hash($password, PASSWORD_DEFAULT);
               mysqli_stmt_bind_param($stmt,"ss",$newPwdHashed,$tokenEmail);
               mysqli_stmt_execute($stmt);
               $sql="DELETE FROM pwdRest WHERE pwdResetEmail=?;";
               $stmt=mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                 echo "sqlError";
                 exit();
                }
                else{
                 mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                 mysqli_stmt_execute($stmt);
                 header("Location:create-new-password.html?Reset=successfull");
                }
              }
            }
          }
        }
      }
    }
}
