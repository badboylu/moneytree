<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$authtoken = $_GET['Collect'];
$driver='Lunga';
$stat='Collected';

$sql='SELECT idOrderID FROM deliverytoken WHERE idPrepperToken="'.$authtoken.'" ';
$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
 $token[]=$row['idOrderID'];
  }

foreach ($token as $key) {
}

echo $key;

$new2='SELECT * FROM deliverytoken ';
$result2=mysqli_query($conn,$new2);

while($row2 = mysqli_fetch_array($result2)) {
 $token2[]=$row2["idPrepperToken"];
  }

foreach ($token2 as $keys) {
  if ($keys==$authtoken){
      $sql="UPDATE deliverytoken SET idPrepperToken='".$stat."' WHERE idPrepperToken='".$authtoken."' ";
      mysqli_query($conn,$sql);
      $sql2="UPDATE address SET idOrderConfirmation='".$stat."' WHERE idToken='".$key."' ";
      mysqli_query($conn,$sql2);
      $sql3="UPDATE oders SET idOrderConfirmation='".$stat."' WHERE idOrderToken='".$key."' ";
      mysqli_query($conn,$sql3);
      header("Location:DL77.php");
      exit();
      echo 'killed it';
}else{
      
} 
}
 



    
