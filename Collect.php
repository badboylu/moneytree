<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$new='SELECT * FROM address WHERE idOrderConfirmation="Pending" ';
$result1=mysqli_query($conn,$new);

while($row = mysqli_fetch_array($result1)) {
 $token[]=$row["idOrderToken"];
  }

$verification=Max($token);

$sql='SELECT idPrepperToken FROM deliverytoken WHERE idOrderID="'.$verification.'"';
$stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=SQL999");
       exit();
}
   mysqli_stmt_execute($stmt);
   mysqli_stmt_bind_result($stmt, $orderid);
  
   while (mysqli_stmt_fetch($stmt)) { 
    if (!$verification == $orderid) {
       header("Location:DL99.php?verification=error");
       exit();
    }else{
       header("Location:DL99.php?verification=success");
       exit();
    }
