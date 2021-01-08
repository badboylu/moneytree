<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$query="SELECT * FROM oders WHERE idOrderConfirmation='Pending'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
mysqli_stmt_close($stmt);
if (!$count>0){
    header("Location:D2.php");
    exit();
}else{
    header("Location:Distro.php");
    exit();
}
