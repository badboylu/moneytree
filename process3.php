<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$username = $_GET['username'];
$authtoken = $_GET['auth'];
$sql='DELETE FROM oders WHERE idOrderToken="'.$authtoken.'"';
mysqli_query($conn, $sql);
$sql2='DELETE FROM address WHERE idToken="'.$authtoken.'"';
mysqli_query($conn, $sql2);
$sql3='DELETE FROM deliverytoken WHERE idOrderID="'.$authtoken.'"';
mysqli_query($conn, $sql3);
       header("Location:register.html?error=SQL1");
       exit();
?>
