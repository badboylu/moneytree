<?php

$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$username=$_POST['uid'];
$email=$_POST['email'];
$password=$_POST['pwd'];

$sql="SELECT uidUsers FROM users WHERE uidUsers=?";
$stmt=mysqli_stmt_init($conn);
mysqli_stmt_bind_param($stmt,"s",$username);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
$sql="INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES(?,?,?)";
$stmt=mysqli_stmt_init($conn);
$hashedPwd=password_hash($password,PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt,"ss",$email,$password);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

?>
