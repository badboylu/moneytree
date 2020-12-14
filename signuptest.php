<?php

$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$username=$_POST['uid'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$passwordrepeat=$_POST['pwdrepeat'];
$sql="SELECT emailUsers FROM users WHERE emailUsers=?";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.html?error=SQL");
       exit();
}
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       header("Location:register.html?error=invalidemail");
       exit();
}
   mysqli_stmt_bind_param($stmt,"s",$email);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $resultCheck=mysqli_stmt_num_rows($stmt);
   if($resultCheck > 0){
       header("Location:register.html?error=emailexists=".$username);
       exit();
} 
    $sql="INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES(?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.html?error=SQL");
       exit();
}
     $hashedPwd=password_hash($password,PASSWORD_DEFAULT);
     mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedPwd);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_store_result($stmt);
     header("Location:index.html?signup=successful");
       exit();
      
?>

