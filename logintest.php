<?php

$servername="dt3bgg3gu6nqye5f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dBUsername="fn5xp8yu9vmphif8";
$dBPassword="j0oarzobzrwqy40b";
$dBName="eebooc1cx2mejqru";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$uid=$_POST['uid'];
$password=$_POST['pwd'];

 if ($uid=='Test-Owner'){
   $sql='SELECT pwdUsers FROM users WHERE uidUsers="Test"';
   $stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=pwd");
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
    header("Location:Signin.php?error=auth");
    exit();
 }

 mysqli_stmt_bind_param($stmt,"ss",$uid,$token);
 mysqli_stmt_execute($stmt);
 
    header("Location:Owner.php?login=successful"."&auth=".$token."&username=".$uid);
    exit();

} else {
    header("Location:Signin.php?error=wrngpwd"."&username=".$uid);
    exit();
}
}
}   

$sql="SELECT * FROM distrouser WHERE idDistro=? ";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.html?error=D1");
       exit();
}
   mysqli_stmt_bind_param($stmt,"s",$uid);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $count=mysqli_stmt_num_rows($stmt);
   mysqli_stmt_close($stmt);
if ($count>0){
   $sql='SELECT idPassword FROM distrouser WHERE idDistro="'.$uid.'"';
   $stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=SQL2");
       exit();
}
   mysqli_stmt_execute($stmt);
   mysqli_stmt_bind_result($stmt, $hash1);
  
   while (mysqli_stmt_fetch($stmt)) { 
    if (password_verify($password, $hash1)) {
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

    header("Location:Distro.php?login=successful"."&auth=".$token."&username=".$uid);
    exit();

} else {
    header("Location:Signin.php?error=wrngpwd"."&username=".$uid);
    exit();
}
}
}   

$sql="SELECT * FROM prepperuser WHERE idPrepper=? ";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.html?error=D1");
       exit();
}
   mysqli_stmt_bind_param($stmt,"s",$uid);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $count=mysqli_stmt_num_rows($stmt);
   mysqli_stmt_close($stmt);
if ($count>0){
   $sql='SELECT idPassword FROM prepperuser WHERE idPrepper="'.$uid.'"';
   $stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=SQL2");
       exit();
}
   mysqli_stmt_execute($stmt);
   mysqli_stmt_bind_result($stmt, $hash1);
  
   while (mysqli_stmt_fetch($stmt)) { 
    if (password_verify($password, $hash1)) {
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

    header("Location:PH.php?login=successful"."&auth=".$token."&username=".$uid);
    exit();

} else {
    header("Location:Signin.php?error=wrngpwd"."&username=".$uid);
    exit();
}
}
}   

$sql="SELECT * FROM driveruser WHERE idDriver=? ";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.html?error=D1");
       exit();
}
   mysqli_stmt_bind_param($stmt,"s",$uid);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $count=mysqli_stmt_num_rows($stmt);
   mysqli_stmt_close($stmt);
if ($count>0){
   $sql='SELECT idPassword FROM driveruser WHERE idDriver="'.$uid.'"';
   $stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=SQL2");
       exit();
}
   mysqli_stmt_execute($stmt);
   mysqli_stmt_bind_result($stmt, $hash1);
  
   while (mysqli_stmt_fetch($stmt)) { 
    if (password_verify($password, $hash1)) {
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

    header("Location:DLH.php?login=successful"."&auth=".$token."&username=".$uid);
    exit();

} else {
    header("Location:Signin.php?error=wrngpwd"."&username=".$uid);
    exit();
}
}
}   

$sql="SELECT * FROM users WHERE emailUser=? OR uidUsers=? ";
$stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=user1");
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
   $sql='SELECT pwdUsers FROM users WHERE emailUser="'.$uid.'" OR uidUsers="'.$uid.'"';
   $stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=pwd");
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
    header("Location:Signin.php?error=auth");
    exit();
 }

 mysqli_stmt_bind_param($stmt,"ss",$uid,$token);
 mysqli_stmt_execute($stmt);
 
    header("Location:Shop.php?login=successful"."&auth=".$token."&username=".$uid);
    exit();

} else {
    header("Location:Signin.php?error=wrngpwd"."&username=".$uid);
    exit();
}
}
}   
?>
