<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$verification='';

$sql='SELECT idPrepperToken FROM deliverytoken WHERE OrderId="'.$verification.'"';
$stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=SQL999");
       exit();
}
   mysqli_stmt_execute($stmt);
   mysqli_stmt_bind_result($stmt, $orderid);
  
   while (mysqli_stmt_fetch($stmt)) { 
    if (!$verification == $orderid) {
    
    }else{
    
    }
