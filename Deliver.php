<?php
$servername="dt3bgg3gu6nqye5f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dBUsername="fn5xp8yu9vmphif8";
$dBPassword="j0oarzobzrwqy40b";
$dBName="eebooc1cx2mejqru";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$custicode = $_GET['Deliver'];
$auth = $_GET['auth'];
$driver = $_GET['username'];
$stat='Delivered';
$username = $_GET['username'];
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
$query='SELECT * FROM deliverytoken WHERE idCustomerToken="'.$custicode.'" ';
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
 $ordernumber[]=$row['idOrderID'];
}
$authcode=Min($ordernumber);
$query2='SELECT * FROM deliverytoken WHERE idCustomerToken="'.$custicode.'" ';
$result2=mysqli_query($conn,$query2);
while($row=mysqli_fetch_array($result2)){
 $ordernumber2[]=$row2['idOrder'];
}
$ordernumber=Max($ordernumber2);
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
      $sql2="UPDATE address SET idOrderConfirmation='".$stat."' WHERE idToken='".$authcode."' AND idOrderCustiCode='".$custicode."' ";
      mysqli_query($conn,$sql2);
      $sql4="UPDATE oders SET idOrderConfirmation='".$stat."' WHERE idOrderToken='".$authcode."' AND idOrderCustiCode='".$custicode."' ";
      mysqli_query($conn,$sql4);
      $sql5="UPDATE orderlog SET idOrderStat='".$stat."' WHERE idCustiToken='".$custicode."' ";
      mysqli_query($conn,$sql5);
      header("Location:DLH.php?username=".$username."&auth=".$auth."");
      exit();
  
}
}
 



    
