<?php

$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";

$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$uid=$_POST['uid'];
$password=$_POST['pwd'];

    
    $sql="SELECT * FROM users WHERE emailUsers='$uid' OR uidUsers='$uid' ";
    $query=mysqli_query($conn,$sql);
    $count=mysqli_num_row($query):

if (!$count>0){
    header("Location:Signin.html?error=wrnguid");
    exit();
}else if ($count>0){
    $sql="SELECT pwd FROM users WHERE emailUsers='$uid' OR uidUsers='$uid' ";
    $query=mysqli_query($conn,$sql);
    $result=mysqli_num_row($query):
if (!$result>0){
    header("Location:Signin.html?error=wrngpwd");
    exit();
}else if ($result>0){
    header("Location:index.html?login=successful");
    exit();
}
}   
?>
