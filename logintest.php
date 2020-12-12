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
    $emaildunhash=
    $sql1="SELECT * FROM users WHERE emailUsers='$emaildunhash' ";
    $query1=mysqli_query($conn,$sql1);
    $count1=mysqli_num_row($query1):

if ($count1=0){
    header("Location:Signin.html?error=wrngeml");
    exit();
}else if ($count1>0){
    $passwordunhash=
    $sql2="SELECT * FROM users WHERE pwdUsers='$passwordunhash' ";
    $query2=mysqli_query($conn,$sql2);
    $count2=mysqli_num_row($query2):
if ($count2=0){
    header("Location:Signin.html?error=wrngpwd");
    exit();
}else if ($count2>0){
    header("Location:index.html");
    exit();
}
}   
?>
