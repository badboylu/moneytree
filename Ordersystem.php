<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$query="SELECT * FROM oders WHERE idOrderConfirmation='Pending'";
$result=mysqli_query($conn,$query);
$orderready="Prepared";
while($row=mysqli_fetch_array($result)){
 $ordernumbers[]=$row['idOrders'];
}
$order=Min($ordernumbers);
$sql="INSERT INTO oders (idOrderConfirmation) WHERE idOrders=".$order" VALUES (?);";
    $stmt= mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location:Distro.php?error=sqlerror777");
    exit();
 }
 mysqli_stmt_bind_param($stmt,"s",$orderready);
 mysqli_stmt_execute($stmt);
 
    header("Location:Distro.php?Prep=successful"."&auth=".$token."&username=".$uid);
    exit();
