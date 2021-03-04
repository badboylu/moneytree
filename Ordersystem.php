<?php
$servername="dt3bgg3gu6nqye5f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dBUsername="fn5xp8yu9vmphif8";
$dBPassword="j0oarzobzrwqy40b";
$dBName="eebooc1cx2mejqru";
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

$query1="select * from deliverytoken";
$result1=mysqli_query($conn,$query1);
while($row=mysqli_fetch_array($result1)){
 $ordernumbers1[]=$row['id'];
}
$order1=Max($ordernumbers1);

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
      $sql2="UPDATE orderlog SET idOrderStat='Prepared' WHERE idCustiToken='".$keys."' ";
      mysqli_query($conn,$sql2);
      header("Location:D1.php?username=".$user."&auth=".$authtoken."");
      exit();
      }
}

