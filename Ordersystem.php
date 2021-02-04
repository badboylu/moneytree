<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
$auth=$_GET['auth'];
$user=$_GET['username'];
$stat='Prepared';
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

$query='SELECT * FROM oders WHERE idOrderConfirmation='Pending'';
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)){
 $ordernumber[]=$row['idOrders'];
}

$last=Min($ordernumber);

$new2='SELECT * FROM deliverytoken';
$result2=mysqli_query($conn,$new2);

while($row2 = mysqli_fetch_array($result2)) {
 $token2[]=$row2["idPrepperToken"];
  }

foreach ($ordernumber as $keys) {
  if ($ordernumber){
      $sql="UPDATE order SET idOrderConfirmation='".$stat."' WHERE idOrderUsername='Lunga'  ";
      mysqli_query($conn,$sql);
      
      }
}

echo 'test3';
      

   





