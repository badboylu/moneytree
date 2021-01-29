<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$custicode = $_GET['Deliver'];
$auth = $_GET['auth'];
$driver='Lunga';
$stat='Delivered';

$query='SELECT * FROM deliverytoken WHERE idCustomerToken="'.$custicode.'" ';
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
 $ordernumber[]=$row['idOrderID'];
}

$authcode=Min($ordernumber);

$new2='SELECT * FROM deliverytoken ';
$result2=mysqli_query($conn,$new2);

while($row2 = mysqli_fetch_array($result2)) {
 $token2[]=$row2["idCustomerToken"];
  }

foreach ($token2 as $keys) {
  if ($keys==$custicode){
      $sql3="UPDATE deliverytoken SET idPrepperToken='".$stat."' WHERE idCustomerToken='".$custicode."' ";
      mysqli_query($conn,$sql3);
      $sql="UPDATE deliverytoken SET idCustomerToken='".$driver."' WHERE idCustomerToken='".$custicode."' ";
      mysqli_query($conn,$sql);
      $sql2="UPDATE address SET idOrderConfirmation='".$stat."' WHERE idToken='".$authcode."' ";
      mysqli_query($conn,$sql2);
      $sql4="UPDATE oders SET idOrderConfirmation='".$stat."' WHERE idOrderToken='".$authcode."' ";
      mysqli_query($conn,$sql4);
      header("Location:DL01.php");
      exit();
  
}
}
 



    
