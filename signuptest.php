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
$sql1="SELECT uidUsers FROM users WHERE uidUsers=?";
$stmt1=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt1,$sql1)){
       header("Location:register.html?error=SQL1");
       exit();
}
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       header("Location:register.html?error=invalidemail");
       exit();
}
   mysqli_stmt_bind_param($stmt1,"s",$email);
   mysqli_stmt_execute($stmt1);
   mysqli_stmt_store_result($stmt1);
   $resultCheck=mysqli_stmt_num_rows($stmt1);
   if($resultCheck > 0){
       header("Location:register.html?error=emailtaken=".$username);
       exit();
} 
    $sql2="INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES(?,?,?)";
    $stmt2=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt2,$sql2)){
        header("Location:register.html?error=SQL2);
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

