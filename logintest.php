<?php

$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$mailuid=$_POST['mailuid'];
$password=$_POST['pwd'];

if(empty($mailuid)||empty($password)){
    header("Location:signing.html?error=emptyfields");
    exit();
  }
 
 $sql="SELECT * FROM users WHERE uidUsers=?";
 $stmt=mysqli_stmt_init($conn); 
 
    if(!mysqli_stmt_prepare($stmt, $sql)){
     header("Location:signing.html?error=sqlerror");
     exit();
  }else{
      header("Location:index.html?error=AllGood");
     exit();
    }
    
?>
