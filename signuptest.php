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
$hashedPwd=password_hash($password,PASSWORD_DEFAULT);
$hashedEml=password_hash($email,PASSWORD_DEFAULT);
$sql1="SELECT emailUsers FROM users WHERE emailUsers=?";
$stmt1=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt1,$sql1)){
       header("Location:register.html?error=SQL1");
       exit();
}
$sql3="SELECT pwdUsers FROM users WHERE pwdUsers=?";
$stmt3=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt3,$sql3)){
       header("Location:register.html?error=SQL3");
       exit();
}
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       header("Location:register.html?error=invalidemail");
       exit();
}
   mysqli_stmt_bind_param($stmt1,"s",$hashedEml);
   mysqli_stmt_execute($stmt1);
   mysqli_stmt_store_result($stmt1);
   $resultCheck1=mysqli_stmt_num_rows($stmt1);
   if($resultCheck1 > 0){
       header("Location:register.html?error=emailtaken=".$username);
       exit();
} 
   mysqli_stmt_bind_param($stmt3,"s",$hashedPwd);
   mysqli_stmt_execute($stmt3);
   mysqli_stmt_store_result($stmt3);
   $resultCheck3=mysqli_stmt_num_rows($stmt3);
   if($resultCheck3 > 0){
       header("Location:register.html?error=passwordtaken=".$username.$email);
       exit();
} 
    $sql2="INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES(?,?,?)";
    $stmt2=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt2,$sql2)){
       header("Location:register.html?error=SQL2");
       exit();
}
     $hashedPwd=password_hash($password,PASSWORD_DEFAULT);
     $hashedEml=password_hash($password,PASSWORD_DEFAULT);
     mysqli_stmt_bind_param($stmt2,"sss",$username,$hashedEml,$hashedPwd);
     mysqli_stmt_execute($stmt2);
     mysqli_stmt_store_result($stmt2);
     header("Location:index.html?signup=successful");
       exit();
      
?>

