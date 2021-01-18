<?php

$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$uid=$_POST['uid'];
$password=$_POST['pwd'];
$boss='Admin-Lunga';
$driver='Driver-Lunga';
$sql="SELECT * FROM users WHERE emailUsers=? OR uidUsers=? ";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.html?error=SQL1");
       exit();
}
   mysqli_stmt_bind_param($stmt,"ss",$uid,$uid);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $count=mysqli_stmt_num_rows($stmt);
   mysqli_stmt_close($stmt);
if (!$count>0){
    header("Location:Signin.php?error=wrnguid");
    exit();
}else if ($count>0){
   $sql='SELECT pwdUsers FROM users WHERE emailUsers="'.$uid.'" OR uidUsers="'.$uid.'"';
   $stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=SQL2");
       exit();
}
   mysqli_stmt_execute($stmt);
   mysqli_stmt_bind_result($stmt, $hash);
  
   while (mysqli_stmt_fetch($stmt)) { 
    if (password_verify($password, $hash)) {
    $token= bin2hex(random_bytes(16));
    mysqli_stmt_close($stmt);
    $sql="INSERT INTO userauth2 (username,token) VALUES (?,?);";
    $stmt= mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location:Signin.php?error=sqlerror123");
    exit();
 }

 mysqli_stmt_bind_param($stmt,"ss",$uid,$token);
 mysqli_stmt_execute($stmt);

 if($uid==$boss){
    header("Location:AdminCBI.php?login=successful"."&auth=".$token."&username=".$uid);
    exit();
 }
if($uid==$driver){
    header("Location:DLH.php?login=successful"."&auth=".$token."&username=".$uid);
    exit();
 }
 
 
    header("Location:Shop.php?login=successful"."&auth=".$token."&username=".$uid);
    exit();

} else {
    header("Location:Signin.php?error=wrngpwd"."&username=".$uid);
    exit();
}
}
}   
?>
