<?php
$servername="dt3bgg3gu6nqye5f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dBUsername="fn5xp8yu9vmphif8";
$dBPassword="j0oarzobzrwqy40b";
$dBName="eebooc1cx2mejqru";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$auth=$_GET['auth'];
$user=$_GET['username'];
$collect=$_GET['Collect'];
$driver='Lunga';
$stat='Collected';
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

$query='SELECT * FROM deliverytoken WHERE idPrepperToken="'.$collect.'" ';
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
 $ordernumber[]=$row['idOrderID'];
}

$authcode=Min($ordernumber);

$query='SELECT * FROM deliverytoken WHERE idPrepperToken="'.$collect.'" ';
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
 $token[]=$row['idCustomerToken'];
}

$custi=Min($token);

$new2='SELECT * FROM deliverytoken';
$result2=mysqli_query($conn,$new2);

while($row2 = mysqli_fetch_array($result2)) {
 $token2[]=$row2["idPrepperToken"];
  }

foreach ($token2 as $keys) {
  if ($keys==$collect){
      $sql="UPDATE deliverytoken SET idPrepperToken='".$stat."' WHERE idPrepperToken='".$collect."' ";
      mysqli_query($conn,$sql);
      $sql2="UPDATE address SET idOrderConfirmation='".$stat."' WHERE idToken='".$authcode."' AND idOrderCode='".$collect."' ";
      mysqli_query($conn,$sql2);
      $sql3="UPDATE oders SET idOrderConfirmation='".$stat."' WHERE idOrderToken='".$authcode."' AND idOrderCode='".$collect."' ";
      mysqli_query($conn,$sql3);
      $sql2="UPDATE orderlog SET idOrderStat='Collected' WHERE idCustiToken='".$custi."' ";
      mysqli_query($conn,$sql2);
      header("Location:DL77.php?username=".$user."&auth=".$auth."&custi=".$custi."");
      exit();
      }
}


    
