<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$query="SELECT * FROM oders WHERE idOrderConfirmation='Pending'";
$result=mysqli_query($conn,$query);
$orderready='Prepared';
while($row=mysqli_fetch_array($result)){
 $ordernumbers[]=$row['idOrders'];
}
$order=Min($ordernumbers);
$sql="UPDATE oders SET idOrderConfirmation='".$orderready."' WHERE idOrders='".$order."'";
mysqli_query($conn,$sql);


$sql0="SELECT * FROM address WHERE idOrderConfirmation='Placed'";
$result1=mysqli_query($conn,$sql0);

$orderready1='Pending';

while($row=mysqli_fetch_array($result1)){
 $ordernumbers1[]=$row['idUser'];
}

$order1=Max($ordernumbers1);

$sql2="SELECT * FROM oders WHERE WHERE idOrders='".$order."'";
$result2=mysqli_query($conn,$sql2);
while($row=mysqli_fetch_array($result2)){
 $tokenarray[]=$row['idOrderToken'];
}

echo $tokenarray;

$sql1="UPDATE address SET idOrderConfirmation='".$orderready1."' WHERE idUser='".$order1."' ";

mysqli_query($conn,$sql1);
    

