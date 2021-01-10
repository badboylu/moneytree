<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$orderready='Prepared';
$query="SELECT * FROM oders WHERE idOrderConfirmation='Pending'";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
 $ordernumbers[]=$row['idOrders'];
}

$order=Min($ordernumbers);

 $sql='SELECT * FROM oders WHERE idOrders="'.$order.'" ';
 $result1=mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result1)) {
 $token[]=$row["idOrderToken"];
  }

$order1=Max($token);

echo $order; 
echo $order1;







