<?php
$servername="us-cdbr-east-02.cleardb.com";
$dBUsername="b7fcd41c893d7a";
$dBPassword="1e8f896b7da9e41";
$dBName="heroku_61db5a5cdc2dfd8";
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

$new2='SELECT * FROM deliverytoken ';
$result2=mysqli_query($conn,$new2);

while($row2 = mysqli_fetch_array($result2)) {
 $token2[]=$row2["idPrepperToken"];
  }

foreach ($token2 as $keys) {
  if ($keys==$collect){
      $sql="UPDATE deliverytoken SET idPrepperToken='".$stat."' WHERE idPrepperToken='".$authtoken."' ";
      mysqli_query($conn,$sql);
      $sql2="UPDATE address SET idOrderConfirmation='".$stat."' WHERE idToken='".$key."' ";
      mysqli_query($conn,$sql2);
      $sql3="UPDATE oders SET idOrderConfirmation='".$stat."' WHERE idOrderToken='".$key."' ";
      mysqli_query($conn,$sql3);
      header("Location:DL77.php?username=".$user."&auth=".$auth."");
      exit();
      



    
