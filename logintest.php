<?php

$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$mailuid=$_POST['mailuid'];
$password=$_POST['pwd'];

if (!filter_var($mailuid, FILTER_VALIDATE_EMAIL)) {
  header("Location:Signin.html?error=wrongemailformat");
    exit();
}

    $sql="SELECT * FROM users WHERE emailUsers='$mailuid' ";
    $query=mysqli_query($conn,$sql);
     
 
    
?>
