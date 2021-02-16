<?php
   $servername="us-cdbr-east-02.cleardb.com";
   $dBUsername="b7fcd41c893d7a";
   $dBPassword="1e8f896b7da9e41";
   $dBName="heroku_61db5a5cdc2dfd8";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$username=$_GET['username'];
$email=$_GET['email'];
$password=$_GET['auth'];

    $sql="INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES(?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:register.php?error=SQL3");
       exit();
}
     $hashedPwd=password_hash($password,PASSWORD_DEFAULT);
     mysqli_stmt_bind_param($stmt,"sss",$username,$email,$password);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_store_result($stmt);
     $sql="DELETE FROM pwdrest WHERE pwdResetEmail='".$email."' ";
     mysqli_query($conn,$sql);
     header("Location:Signin.php?signup=successful");
     exit();
