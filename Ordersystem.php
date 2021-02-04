<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$auth=$_GET['auth'];
$user=$_GET['username'];
$stat='Prepared';
$date = date("Y-m-d");
date_default_timezone_set('Africa/Johannesburg');
$sql='SELECT * FROM userauth2 WHERE token=?';
   $stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location:Signin.php?error=SQL1");
       exit();
}
   mysqli_stmt_bind_param($stmt,"s",$auth);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $count=mysqli_stmt_num_rows($stmt);
 if (!$count>0){
    header("Location:Signin.php?error=notloggedin");
    exit();
}



$query="SELECT * FROM oders WHERE idOrderConfirmation='Pending'";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
 $ordernumbers[]=$row['idOrders'];
}

$order=Min($ordernumbers);

$new='SELECT * FROM oders WHERE idOrders="'.$order.'" ';
$result1=mysqli_query($conn,$new);

while($row = mysqli_fetch_array($result1)) {
 $token[]=$row["idOrderCustiCode"];
  }

foreach ($token as $keys) {
  if ($keys){
      $sql="UPDATE oders SET idOrderConfirmation='".$stat."' WHERE idOrderCustiCode='".$keys."' ";
      mysqli_query($conn,$sql);
      $sql3="UPDATE deliverytoken SET idUsername='".$user."' WHERE idCustomerToken='".$keys."'  ";
      mysqli_query($conn,$sql3);
      $sql4="UPDATE deliverytoken SET idDate='".$date."' WHERE idCustomerToken='".$keys."' ";
      mysqli_query($conn,$sql4);
      echo 'test10';
      }
}

