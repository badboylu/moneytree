<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$user=$_GET['username'];
$preptoken= bin2hex(random_bytes(3));
$date = date("Y-m-d");
date_default_timezone_set('Africa/Johannesburg');
$orderready='Prepared';
$authtoken=$_GET['auth'];
$query="SELECT * FROM oders WHERE idOrderConfirmation='Pending'";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
 $ordernumbers[]=$row['idOrders'];
}

$order=Min($ordernumbers);

$sql="UPDATE oders SET idOrderConfirmation='".$orderready."' WHERE idOrders='".$order."'";
$ready=mysqli_query($conn,$sql);
mysqli_query($conn,$sql);

 $new='SELECT * FROM oders WHERE idOrders="'.$order.'" ';
 $result1=mysqli_query($conn,$new);

while($row = mysqli_fetch_array($result1)) {
 $token[]=$row["idOrderToken"];
  }

$order1=Max($token);

$sql1="SELECT * FROM address WHERE idOrderConfirmation='Placed'";
$result2=mysqli_query($conn,$sql1);
$orderready1='Pending';
while($row=mysqli_fetch_array($result2)){
 $ordernumbers1[]=$row['idUser'];
}

$order2=Max($ordernumbers1);

  

$sql2="UPDATE address SET idOrderConfirmation='".$orderready1."' WHERE idUser='".$order2."' AND idToken='".$order1."' ";
mysqli_query($conn,$sql2);

$sql3="UPDATE deliverytoken SET idusername='".$_GET['username']."' WHERE idOrderID='".$order1."' ";
mysqli_query($conn,$sql3);

$sql4="UPDATE deliverytoken SET idOrdertoken='".$order1."' WHERE idOrderID='".$order1."' ";
mysqli_query($conn,$sql4);

$sql5="UPDATE deliverytoken SET idPrepperToken='".$preptoken."' WHERE idOrderID='".$order1."' ";
mysqli_query($conn,$sql5);

$sql6="UPDATE deliverytoken SET idDate='".$date."'  WHERE idOrderID='".$order1."' ";
mysqli_query($conn,$sql6);

    header("Location:D1.php?username=".$user."&auth=".$authtoken."");
    exit();





