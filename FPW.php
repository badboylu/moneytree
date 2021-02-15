<?php
   
   $servername="us-cdbr-east-02.cleardb.com";
   $dBUsername="b7fcd41c893d7a";
   $dBPassword="1e8f896b7da9e41";
   $dBName="heroku_61db5a5cdc2dfd8";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
   $auth=bin2hex(random_bytes(8));
   $date = date("Y-m-d");
   date_default_timezone_set('Africa/Johannesburg');
   $userEmail=$_GET["email"];
 
$sql="SELECT * FROM users WHERE emailUsers=?";
  $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Reset.php?error=SQL1");
       exit();
 }
   mysqli_stmt_bind_param($stmt,"s",$userEmail);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $count=mysqli_stmt_num_rows($stmt);
   mysqli_stmt_close($stmt);
 if (!$count>0){
    header("Location:Reset.php?error=emailnotfound");
    exit();
 }

$sql="INSERT INTO pwdrest (pwdResetEmail,pwdResetToken,pwdResetDate) VALUES (?,?,?);";
    $stmt= mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
       header("Location:Reset.php?error=SQL1");
       exit();
 }

 mysqli_stmt_bind_param($stmt,"sss",$userEmail,$auth,$date);
 mysqli_stmt_execute($stmt);

    header("Location:R1.php?link=sent"."&auth=".$auth."&email=".$userEmail);
    exit();
?>
