<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$new='SELECT * FROM address WHERE idOrderConfirmation="Pending" ';
$result1=mysqli_query($conn,$new);

while($row = mysqli_fetch_array($result1)) {
 $token[]=$row["idToken"];
  }

foreach ($token as $key) {
}


$new2='SELECT * FROM deliverytoken ';
$result2=mysqli_query($conn,$new2);

while($row2 = mysqli_fetch_array($result2)) {
 $token2[]=$row2["idPrepperToken"];
  }

foreach ($token2 as $keys) {
  if ($keys=='4a6539a'){
      echo 'Billions';
}else{
      echo 'Not working';
} 
}
 



    
